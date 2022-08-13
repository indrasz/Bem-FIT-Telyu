<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\VokasiStore;
use Illuminate\Http\Request;

class VokasiStoreController extends Controller
{
    public function index()
    {
        $products = VokasiStore::all();
        return view('pages.frontend.vokasi-store', compact('products'));
    }

    public function detail(Request $request, $slug)
    {
        $products = VokasiStore::all();
        $product = VokasiStore::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.vokasi-store-detail', compact('product','products'));
    }
}
