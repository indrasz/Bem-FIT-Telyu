<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvokasiController extends Controller
{
    public function index()
    {
        return view('pages.frontend.advokasi');
    }
}
