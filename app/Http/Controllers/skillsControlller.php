<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;

class skillsControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=skill::all();
        return view('admin.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
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
            "name" => "required",
            "prct" => "required",
        ]);
        skill::create([
            "name" => $request->name,
            "type" => $request->type,
            "prct" => $request->prct
        ]);
        return redirect()->route('skills.index')->with([
            "success" => "skill bien ajouter"
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
        $skill=skill::find($id);
        return view('admin.skills.update',compact('skill'));
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
        $skill=skill::find($id);
        $request->validate([
            "name" => "required",
            "prct" => "required",
        ]);
        $skill->update([
            "name" => $request->name,
            "type" => $request->type,
            "prct" => $request->prct
        ]);
        return redirect()->route('skills.index')->with([
            "success" => "skill bien ajouter"
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
        $skill=skill::find($id);
        $skill->delete();
        return redirect()->route('skills.index')->with([
            "success" => "skill bien suprimer"
        ]);
    }
}
