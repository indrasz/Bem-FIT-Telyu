<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ormawa;
use App\Models\Vision;
use App\Models\Advokasi;
use App\Models\Missions;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
        $ormawa = Ormawa::orderBy('created_at', 'desc')->get();
        return view('pages.admin.ormawa.index', compact('pending', 'ormawa'));
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
    public function edit(Ormawa $ormawa)
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.ormawa.edit', compact('ormawa', 'pending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrmawaRequest $request, Ormawa $ormawa)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $get_photo = Ormawa::findOrFail($ormawa->id);

        if(isset($data['thumbnail'])){
            $path = 'storage/'.$get_photo['thumbnail'];

            if(File::exists($path)){
                File::delete($path);
            }else{
                File::delete('storage/app/public/'.$get_photo['thumbnail']);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/thumbnail/ormawa', 'public'
            );
        }

        $ormawa->update($data);

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.ormawa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ormawa = Ormawa::findorFail($id);
        $ormawa->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.ormawa.index');
    }
}
