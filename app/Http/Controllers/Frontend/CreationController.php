<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Creation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreationController extends Controller
{
    public function index()
    {
        return view('pages.frontend.creation');
    }

    public function detail(Request $request, $slug)
    {
        $creation = Creation::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.creation-detail', compact('creation'));
    }
}
