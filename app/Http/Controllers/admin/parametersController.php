<?php

namespace App\Http\Controllers\admin;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class parametersController extends Controller
{
    public function set_role(){
        $role=setting::find(1);
        return view('admin.parameters.role',compact('role'));
    }

    public function role(Request $request ){
        $parameter=setting::find(1);
        $parameter->update([
            "role" => $request->role
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "role est bien modifier , go check"
        ]);
    }

    public function set_links(){
        $links=setting::find(1);
        return view('admin.parameters.links',compact('links'));
    }

    public function links(Request $request ){
        $parameter=setting::find(1);
        $parameter->update([
            "github_link" => $request->github,
            "linkedIn_link" => $request->linkedin,
            "gmail" => $request->gmail
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "role est bien modifier , go check"
        ]);
    }

    public function set_about(){
        $about=setting::find(1);
        return view('admin.parameters.about',compact('about'));
    }

    public function about(Request $request ){
        $parameter=setting::find(1);
        $parameter->update([
            "about_1" => $request->about_1,
            "about_2" => $request->about_2,
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "about sections est bien modifier , go check"
        ]);
    }

    public function set_picture(){
        $about=setting::find(1);
        return view('admin.parameters.about',compact('about'));
    }

    public function picture(Request $request ){
        $parameter=setting::find(1);
        $parameter->update([
            "about_1" => $request->about_1,
            "about_2" => $request->about_2,
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "about sections est bien modifier , go check"
        ]);
    }
}
