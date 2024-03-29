<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use App\Models\Advokasi;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::orderBy('created_at', 'desc')->get();
        $departments = Department::all();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.profile.index', compact('profile', 'departments', 'pending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.profile.create', compact('departments', 'pending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/profile', 'public');
        Profile::create($data);

        toast()->success('Save has been success');
        return redirect()->route('dashboard.profile.index');

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
    public function edit(Profile $profile)
    {
        $departments = Department::all();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.profile.edit', compact('profile', 'departments', 'pending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profile)
    {

        $data = $request->all();

        $get_photo = Profile::findOrFail($profile->id);

        if(isset($data['thumbnail'])){
            $path = 'storage/'.$get_photo['thumbnail'];

            if(File::exists($path)){
                File::delete($path);
            }else{
                File::delete('storage/app/public/'.$get_photo['thumbnail']);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/thumbnail/department', 'public'
            );
        }

        $profile->update($data);

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findorFail($id);
        $profile->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.profile.index');
    }
}
