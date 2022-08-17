<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advokasi;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\DepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::orderBy('created_at', 'desc')->get();
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.department.index', compact('department', 'pending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.department.create', compact('pending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/department', 'public');
        Department::create($data);

        toast()->success('Save has been success');
        return redirect()->route('dashboard.department.index');
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
    public function edit(Department $department)
    {
        $pending = Advokasi::where('status', 'PENDING')->get();
        return view('pages.admin.department.edit', compact('department', 'pending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $get_photo = Department::findOrFail($department->id);

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

        $department->update($data);

        toast()->success('Update data has been success');

        return redirect()->route('dashboard.department.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::findorFail($id);
        $department->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.department.index');
    }
}
