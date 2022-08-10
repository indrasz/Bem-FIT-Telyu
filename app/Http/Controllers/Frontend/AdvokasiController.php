<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AdvokasiRequest;
use App\Models\Advokasi;
use Illuminate\Http\Request;

class AdvokasiController extends Controller
{
    public function index()
    {
        return view('pages.frontend.advokasi');
    }

    public function store(AdvokasiRequest $request)
    {
        $data = $request->all();
        // $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/news', 'public');
        Advokasi::create($data);

        toast()->success('Send has been success');
        return redirect()->route('advokasi');
    }
}
