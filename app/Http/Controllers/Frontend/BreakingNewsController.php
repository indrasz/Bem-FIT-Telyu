<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BreakingNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BreakingNewsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.news');
    }

    public function detail(Request $request, $slug)
    {
        $new = BreakingNew::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.news-detail', compact('new'));
    }

}
