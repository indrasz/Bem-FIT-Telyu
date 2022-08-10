<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdvokasiRequest;
use App\Models\Advokasi;
use Illuminate\Http\Request;

class AdvokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advokasi = Advokasi::all();
        return view('pages.admin.advokasi.index', compact('advokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advokasi $advokasi)
    {
        return view('pages.admin.advokasi.edit', compact('advokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdvokasiRequest $request, Advokasi $advokasi)
    {
        $data = $request->all();
        $advokasi->update($data);

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.advokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advokasi = Advokasi::findorFail($id);
        $advokasi->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.department.index');
    }
}
