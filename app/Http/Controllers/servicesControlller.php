<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class servicesControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=service::all();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            "description" => "required",
            "icon" => "required",
        ]);
        service::create([
            "name" => $request->name,
            "description" => $request->description,
            "icon" => $request->icon
        ]);
        return redirect()->route('services.index')->with([
            "message" => "service bien ajouter"
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
        $service=service::find($id);
        return view('admin.services.update',compact('service'));
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
        $service=service::find($id);
        $request->validate([
            "name" => "required",
            "description" => "required",
            "icon" => "required",
        ]);
        $service->update([
            "name" => $request->name,
            "description" => $request->description,
            "icon" => $request->icon
        ]);
        return redirect()->route('services.index')->with([
            "message" => "service bien modifier"
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
        $service=service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with([
            "message" => "service bien modifier"
        ]);
    }
}
