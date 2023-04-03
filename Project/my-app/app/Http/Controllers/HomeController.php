<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // public function index(){
    //     return view('modules.home.home');
    // }

    // Rendering Variable    
    // public function index(){
    //     // return view('modules.home.home', ["title" => "Hello World"]);
    //     return view('modules.home.home')->with("title","Hello world");
    // }

    // Directive
    public function index(){
        $data = array();
        $data['title'] = "Sample IF ELSE";
        $data['npm'] = 202310015;
        return view('modules.home.home')->with("data",$data);
    }
}
