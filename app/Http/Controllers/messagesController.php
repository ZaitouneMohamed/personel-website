<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class messagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function readed(){
        $readed_messages=DB::table('messages')->where('statue',1)->orderBy("created_at","desc")->paginate(6);
        return view('admin.messages.readed',compact("readed_messages"));
    }

    public function unreaded(){
        $unreaded_messages=DB::table('messages')->where('statue',0)->orderBy("created_at","desc")->paginate(6);
        return view('admin.messages.unreaded',compact("unreaded_messages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        message::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "content" => $request->content,
            "statue" => 0
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message=message::find($id);
        $message->update([
            "statue" => 1
        ]);
        return view('admin.messages.message',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
