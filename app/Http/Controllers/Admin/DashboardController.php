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

    public function countSidebarAdvokasi(){
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view ('includes.admin.sidebar', compact('pending'));
    }
}
