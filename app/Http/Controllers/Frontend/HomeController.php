<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BreakingNew;
use App\Models\Creation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $creations = Creation::all();
        $news = BreakingNew::all();
        return view('pages.frontend.index', compact('creations', 'news'));
    }

}
