<?php

namespace App\Http\Controllers\Admin;

use App\Models\VokasiStore;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\VokasiStoreGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\VokasiStoreRequest;

class VokasiStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vokasiStore = VokasiStore::orderBy('created_at', 'desc')->with('gallery')->get();

        return view('pages.admin.vokasi-store.index', compact('vokasiStore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.vokasi-store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VokasiStoreRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        // add to vokasi store
        $vokasiStore = VokasiStore::create($data);
        // add to thumbnail product
        if($request->hasfile('thumbnail'))
        {
            foreach($request->file('thumbnail') as $file)
            {
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                $product_galleries = new VokasiStoreGallery();
                $product_galleries->vokasi_stores_id = $vokasiStore['id'];
                $product_galleries->thumbnail = $path;
                $product_galleries->save();
            }
        }

        toast()->success('Save has been success');
        return redirect()->route('dashboard.vokasi-store.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VokasiStore $vokasiStore)
    {
        $thumbnail_product = VokasiStoreGallery::where('vokasi_stores_id', $vokasiStore['id'])->get();

        // dd($vokasiStore);
        return view('pages.admin.vokasi-store.edit', compact('vokasiStore', 'thumbnail_product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VokasiStoreRequest $request, VokasiStore $vokasiStore)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        // update to service
        $vokasiStore->update($data);

        // update to thumbnail service
        if($request->hasfile('thumbnails')){
            foreach ($request->file('thumbnails') as $key => $file)
            {
                // get old photo thumbnail
                $get_photo = VokasiStoreGallery::where('id', $key)->first();

                // store photo
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                // update thumbail
                $thumbnail_product = VokasiStoreGallery::find($key);
                $thumbnail_product->thumbnail = $path;
                $thumbnail_product->save();

                // delete old photo thumbnail
                $data = 'storage/'.$get_photo['thumbnails'];
                if(File::exists($data)){
                    File::delete($data);
                }else{
                    File::delete('storage/app/public/'.$get_photo['thumbnails']);
                }
            }
        }

        // add to thumbnail service
        if($request->hasfile('thumbnail')){
            foreach($request->file('thumbnail') as $file)
            {
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                $thumbnail_product = new VokasiStoreGallery();
                $thumbnail_product->vokasi_stores_id = $vokasiStore['id'];
                $thumbnail_product->thumbnail = $path;
                $thumbnail_product->save();
            }
        }

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.vokasi-store.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = VokasiStore::findorFail($id);
        $product->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.vokasi-store.index');
    }
}
