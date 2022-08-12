<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Advokasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AdvokasiRequest;

class AdvokasiController extends Controller
{
    public function index()
    {
        return view('pages.frontend.advokasi');
    }

    public function store(AdvokasiRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        // $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/news', 'public');
        Advokasi::create($data);

        toast()->success('Send has been success');
        return redirect()->route('advokasi');
    }
}
