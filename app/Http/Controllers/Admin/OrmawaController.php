<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ormawa;
use App\Models\Vision;
use App\Models\Advokasi;
use App\Models\Missions;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrmawaRequest;

class OrmawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.ormawa.index', compact('pending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.ormawa.create', compact('pending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrmawaRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/ormawa', 'public');
        // dd($data);
        $ormawa = Ormawa::create($data);

        foreach ($data['vision'] as $key => $value) {
            $vision = new Vision;
            $vision->ormawas_id = $ormawa->id;
            $vision->vision = $value;
            $vision->save();
        }

        foreach ($data['mission'] as $key => $value) {
            $mission = new Missions;
            $mission->ormawas_id = $ormawa->id;
            $mission->mission = $value;
            $mission->save();
        }



        toast()->success('Save has been success');
        return redirect()->route('dashboard.ormawa.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
