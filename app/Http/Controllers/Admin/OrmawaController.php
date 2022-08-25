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
        $ormawa = Ormawa::orderBy('created_at', 'desc')->with('vision', 'mission')->get();
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
    public function edit(Ormawa $ormawa)
    {
        $vision = Vision::where('ormawas_id', $ormawa['id'])->get();
        $mission = Missions::where('ormawas_id', $ormawa['id'])->get();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.ormawa.edit', compact('ormawa', 'vision', 'mission', 'pending'));
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

        // update to vision
        foreach($data['visions'] as $key => $value){
            $vision = Vision::find($key);
            $vision->vision = $value;
            $vision->save();
        }


        //add new vision
        if(isset($data['vision'])){
            foreach($data['vision'] as $key => $value){
                $vision = New Vision();
                $vision->ormawas_id = $ormawa['id'];
                $vision->vision = $value;
                $vision->save();
            }
        }


        // update to mission
        foreach($data['missions'] as $key => $value){
            $mission = Missions::find($key);
            $mission->mission = $value;
            $mission->save();
        }

        //add new mission
        if(isset($data['mission'])){
            foreach($data['mission'] as $key => $value){
                $mission = New Missions();
                $mission->ormawas_id = $ormawa['id'];
                $mission->mission = $value;
                $mission->save();
            }
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
