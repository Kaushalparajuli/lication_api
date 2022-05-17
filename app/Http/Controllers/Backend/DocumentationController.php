<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = Documentation::get();
        return view('backend.documentation.index', [
            'doc' => $doc,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.documentation.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $create = new Documentation();
        $create->title = $request->title;
        $create->slug = Str::slug($request->title);
        $create->description = $request->description;
        $create->status = $request->status;
        $create->save();

        return redirect()->back()->with('success', 'Section created successfully');
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
        $doc = Documentation::find($id);
        return view('backend.documentation.edit', [
            'doc' => $doc,
        ]);

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
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $create = Documentation::find($id);
        $create->title = $request->title;
        $create->slug = Str::slug($request->title);
        $create->description = $request->description;
        $create->status = $request->status;
        $create->save();

        return redirect('/admin/documentation')->with('success', 'Section updated successfully');

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
        $data = Documentation::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Section deleted successfully');
    }
}