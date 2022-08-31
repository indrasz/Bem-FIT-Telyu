<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Advokasi;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AdvokasiRequest;
use App\Models\Ormawa;

class AdvokasiController extends Controller
{
    public function index()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        $accepted = Advokasi::where('status', 'DITERIMA')->get();
        $approved = Advokasi::where('status', 'DISETUJUI')->get();
        $rejected = Advokasi::where('status', 'DITOLAK')->get();
        $ormawa = Ormawa::all();

        return view('pages.frontend.advokasi',compact('pending','accepted', 'approved', 'rejected','ormawa'));
    }

    public function store(AdvokasiRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        // $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/news', 'public');
        Advokasi::create($data);

        toast()->success('Terimakasih atas laporan Anda, buka email secara berkala dalam kurun waktu maksimal 2x24 jam untuk informasi lebih lanjut.');
        return redirect()->route('advokasi');
    }
}
