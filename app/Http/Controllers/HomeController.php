<?php

namespace App\Http\Controllers;

use App\Models\skill;
use App\Models\project;
use App\Models\service;
use App\Models\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $parametre=setting::find(1);
        $fr_skills=skill::all()->where('type','Front-End');
        $bc_skills=skill::all()->where('type','Back-End');
        $projects=project::all();
        $services=service::all();
        return view('index',compact('parametre','fr_skills','bc_skills','projects','services'));
    }
}
