<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ormawa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Missions;
use App\Models\Vision;

class OrmawaController extends Controller
{
    public function index(Request $request, $slug){
        $ormawa = Ormawa::all();
        $ormawas = Ormawa::where('slug', $slug)->firstOrFail();
        // $vision = Vision::where('ormawas_id', $slug['id'])->get();
        // $mission = Missions::where('ormawas_id', $slug['id'])->get();

        return view('pages.frontend.ormawa', compact('ormawa', 'ormawas'));
    }
}
