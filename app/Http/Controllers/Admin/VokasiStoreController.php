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
        $product = VokasiStore::orderBy('created_at', 'desc')->with('gallery')->get();

        return view('pages.admin.vokasi-store.index', compact('product'));
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
        $product = VokasiStore::create($data);
        // add to thumbnail product
        if($request->hasfile('photos'))
        {
            foreach($request->file('photos') as $file)
            {
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                $product_galleries = new VokasiStoreGallery();
                $product_galleries->vokasi_stores_id = $product['id'];
                $product_galleries->photos = $path;
                $product_galleries->save();
            }
        }

        // toast()->success('Save has been success');
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
    public function edit(VokasiStore $product)
    {
        $thumbnail_product = VokasiStoreGallery::where('vokasi_stores_id', $product['id'])->get();
        // return view('pages.admin.vokasi-store.edit', compact('product', 'thumbnail_product'));

        return view('pages.admin.vokasi-store.edit',[
            'items' => $product,
            'thumbnail_product' => $thumbnail_product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VokasiStoreRequest $request, VokasiStore $products)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        // update to service
        $products->update($data);

        // update to thumbnail service
        if($request->hasfile('photos')){
            foreach ($request->file('photos') as $key => $file)
            {
                // get old photo thumbnail
                $get_photo = VokasiStoreGallery::where('id', $key)->first();

                // store photo
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                // update thumbail
                $thumbnail_product = VokasiStoreGallery::find($key);
                $thumbnail_product->photos = $path;
                $thumbnail_product->save();

                // delete old photo thumbnail
                $data = 'storage/'.$get_photo['photo'];
                if(File::exists($data)){
                    File::delete($data);
                }else{
                    File::delete('storage/app/public/'.$get_photo['photo']);
                }
            }
        }

        // add to thumbnail service
        if($request->hasfile('photo')){
            foreach($request->file('photo') as $file)
            {
                $path = $file->store(
                    'assets/thumbnail/product', 'public'
                );

                $thumbnail_product = new VokasiStoreGallery();
                $thumbnail_product->vokasi_stores_id = $products['id'];
                $thumbnail_product->photos = $path;
                $thumbnail_product->save();
            }
        }
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
        return redirect()->route('dashboard.vokasi-store.index');
    }
}
