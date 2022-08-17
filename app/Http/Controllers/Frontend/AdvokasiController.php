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
        $pending = Advokasi::where('status', 'PENDING')->get();
        $accepted = Advokasi::where('status', 'DITERIMA')->get();
        $approved = Advokasi::where('status', 'DISETUJUI')->get();
        $rejected = Advokasi::where('status', 'DITOLAK')->get();

        return view('pages.frontend.advokasi',compact('pending','accepted', 'approved', 'rejected'));
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
