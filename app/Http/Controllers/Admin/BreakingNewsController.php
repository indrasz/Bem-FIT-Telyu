<?php

namespace App\Http\Controllers\Admin;

use App\Models\BreakingNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BreakingNewsRequest;

class BreakingNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breakingNews = BreakingNew::all();
        return view('pages.admin.news.index', compact('breakingNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BreakingNewsRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail/news', 'public');
        BreakingNew::create($data);

        toast()->success('Save has been success');
        return redirect()->route('dashboard.breaking-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BreakingNew $breakingNews)
    {
        return view('pages.admin.news.edit', compact('breakingNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BreakingNewsRequest $request, BreakingNew $breakingNews)
    {
        $data = $request->all();

        $get_photo = BreakingNew::findOrFail($breakingNews->id);

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

        $breakingNews->update($data);
        toast()->success('Update data has been success');
        return redirect()->route('dashboard.breaking-news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creation = BreakingNew::findorFail($id);
        $creation->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.breaking-news.index');
    }
}
