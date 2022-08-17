<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advokasi;
use App\Models\Creation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CreationRequest;

class CreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creation = Creation::all();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.creation.index', compact('creation', 'pending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.creation.create', compact('pending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreationRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/creation', 'public');
        Creation::create($data);

        toast()->success('Save has been success');
        return redirect()->route('dashboard.creation.index');
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
    public function edit(Creation $creation)
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.creation.edit', compact('creation', 'pending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreationRequest $request, Creation $creation)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $get_photo = Creation::findOrFail($creation->id);

        if(isset($data['thumbnail'])){
            $path = 'storage/'.$get_photo['thumbnail'];

            if(File::exists($path)){
                File::delete($path);
            }else{
                File::delete('storage/app/public/'.$get_photo['thumbnail']);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/thumbnail/creation', 'public'
            );
        }

        $creation->update($data);

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.creation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creation = Creation::findorFail($id);
        $creation->delete();

        toast()->success('Delete has been success');
        return redirect()->route('dashboard.creation.index');
    }
}
