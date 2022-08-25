<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ormawa;
use App\Models\Creation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreationController extends Controller
{
    public function index()
    {
        $creations = Creation::all();
        $ormawa = Ormawa::all();
        return view('pages.frontend.creation', compact('creations'));
    }

    public function detail(Request $request, $slug)
    {
        $ormawa = Ormawa::all();
        $creations = Creation::take(3)->get();
        $creation = Creation::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.creation-detail', compact('creation', 'creations','ormawa'));
    }
}
