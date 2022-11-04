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
        $picture=setting::find(1);
        return view('admin.parameters.picture',compact('picture'));
    }

    public function picture(Request $request){
        $parameter=setting::find(1);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('profile'),$image_name);
            unlink(public_path('/profile').'/'.$parameter->picture);
            $parameter->picture=$image_name;
        }
        $parameter->update([
            'picture'=>$image_name
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "picture est bien modifier "
        ]);
    }

    public function set_navlogo(){
        $picture=setting::find(1);
        return view('admin.parameters.navlogo',compact('picture'));
    }

    public function navlogo(Request $request){
        $parameter=setting::find(1);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('profile'),$image_name);
            unlink(public_path('/profile').'/'.$parameter->nav_logo);
        }
        $parameter->update([
            'nav_logo'=>$image_name
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "picture est bien modifier "
        ]);
    }
    public function set_cv(){
        $cv=setting::find(1);
        return view('admin.parameters.cv',compact('cv'));
    }

    public function cv(Request $request){
        $parameter=setting::find(1);
        if ($request->has('cv')) {
            $file = $request->cv;
            $cv_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('profile'),$cv_name);
            unlink(public_path('/profile').'/'.$parameter->cv);
        }
        $parameter->update([
            'cv'=>$cv_name
        ]);
        return redirect()->route('admin.home')->with([
            "success" => "picture est bien modifier "
        ]);
    }
}
