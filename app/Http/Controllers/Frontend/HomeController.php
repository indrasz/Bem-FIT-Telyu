<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function toPageAdvokasi()
    {
        return view('pages.frontend.advokasi');
    }

    public function toPageCreation()
    {
        return view('pages.frontend.creation');
    }

    public function toPageMedpart()
    {
        return view('pages.frontend.medpart');
    }

    public function toPageNews()
    {
        return view('pages.frontend.news');
    }

    public function toPageVokasiStore()
    {
        return view('pages.frontend.vokasi-store');
    }
}
