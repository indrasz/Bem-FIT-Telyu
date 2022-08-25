<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ormawa;
use App\Models\Creation;
use App\Models\BreakingNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $ormawa = Ormawa::all();
        $creations = Creation::all();
        $news = BreakingNew::all();
        return view('pages.frontend.index', compact('creations', 'news', 'ormawa'));
    }

}
