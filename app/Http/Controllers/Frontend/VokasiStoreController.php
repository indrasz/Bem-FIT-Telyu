<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ormawa;
use App\Models\VokasiStore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VokasiStoreController extends Controller
{
    public function index()
    {
        $products = VokasiStore::all();
        $ormawa = Ormawa::all();
        return view('pages.frontend.vokasi-store', compact('products', 'ormawa'));
    }

    public function detail(Request $request, $slug)
    {
        $products = VokasiStore::all();
        $ormawa = Ormawa::all();
        $product = VokasiStore::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.vokasi-store-detail', compact('product','products','ormawa'));
    }
}
