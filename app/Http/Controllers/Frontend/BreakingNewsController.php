<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BreakingNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BreakingNewsController extends Controller
{

    public function index()
    {
        $news = BreakingNew::all();
        return view('pages.frontend.news', compact('news'));
    }

    public function detail(Request $request, $slug)
    {
        $news = BreakingNew::take(3)->get();
        $new = BreakingNew::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.news-detail', compact('new', 'news'));
    }

}
