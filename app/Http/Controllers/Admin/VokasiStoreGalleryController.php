<?php

namespace App\Http\Controllers\Admin;

use App\Models\VokasiStore;
use Illuminate\Http\Request;
use App\Models\VokasiStoreGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\VokasiStoreRequest;

class VokasiStoreGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VokasiStore $vokasiStore)
    {
        $product_galleries = VokasiStoreGallery::findorFail($vokasiStore->id);

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
        return redirect()->route('dashboard.vokasi-store.edit', $product_galleries->vokasi_stores_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product_galleries = VokasiStoreGallery::findorFail($id);

        if($request->hasfile('thumbnails')){
            foreach ($request->file('thumbnails') as $key => $file)
            {
                $get_photo = VokasiStoreGallery::where('id', $key)->first();

                $data = 'storage/'.$get_photo['thumbnails'];
                if(File::exists($data)){
                    File::delete($data);
                }else{
                    File::delete('storage/app/public/'.$get_photo['thumbnails']);
                }
            }
        }

        $product_galleries->delete();
        toast()->success('Delete has been success');

        return redirect()->route('dashboard.vokasi-store.edit', $product_galleries->vokasi_stores_id);
    }
}
