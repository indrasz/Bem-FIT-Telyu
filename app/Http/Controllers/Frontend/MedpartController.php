<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ormawa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedpartController extends Controller
{
    public function index()
    {
        $ormawa = Ormawa::all();
        return view('pages.frontend.medpart', compact('ormawa'));
    }
}
