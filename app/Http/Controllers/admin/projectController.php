<?php

namespace App\Http\Controllers\admin;

use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=project::all();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('picture')) {
            $file = $request->picture;
            $picture_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('projects'),$picture_name);
        }
        project::create([
            "name" => $request->name,
            "picture" => $picture_name,
            "description" => $request->description,
            "technologies" => $request->technologies,
            "link" => $request->link
        ]);
        return redirect()->route('projects.index')->with([
            "success" => "project bien ajouter"
        ]);
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
        $project=project::find($id);
        return view('admin.projects.update',compact('project'));
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
        $project=project::find($id);
        if($request->has("picture")){
            $picture = $request->picture;
            $picture_name = time() . '_' . $picture->getClientOriginalName();
            $picture->move(public_path('projects'),$picture_name);
            unlink(public_path('/projects'). '/' . $project->picture);
        }
        $project->update([
            "name" => $request->name,
            "picture" => $picture_name,
            "description" => $request->description,
            "technologies" => $request->technologies,
            "link" => $request->link
        ]);
        return redirect()->route('projects.index')->with([
            "success" => "project est bien modifier"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=project::find($id);
        $project->delete();
        unlink(public_path('/projects'). '/' . $project->picture);
        return redirect()->route('projects.index')->with([
            "success" => "project est bien supprimer"
        ]);
    }
}
