<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\VokasiStoreGallery;
use App\Http\Controllers\Controller;
use App\Models\Advokasi;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        $accepted = Advokasi::where('status', 'DITERIMA')->get();
        $approved = Advokasi::where('status', 'DISETUJUI')->get();
        $rejected = Advokasi::where('status', 'DITOLAK')->get();

        return view ('pages.admin.index', compact('pending','accepted', 'approved', 'rejected'));
    }

//     public function deleteProductImage($id)
//     {
//         $product_galleries = VokasiStoreGallery::findorFail($id);
//         $product_galleries->delete();
//         return redirect()->route('dashboard.vokasi-store.edit');
//     }
}
