<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\VokasiStoreGallery;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('pages.admin.index');
    }

//     public function deleteProductImage($id)
//     {
//         $product_galleries = VokasiStoreGallery::findorFail($id);
//         $product_galleries->delete();
//         return redirect()->route('dashboard.vokasi-store.edit');
//     }
}
