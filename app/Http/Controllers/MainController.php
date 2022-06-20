<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request){
        $request->session()->put('username','Hello');
        $username = $request->session()->get('username');
        $bool = $request->session()->has('username');
        return view('home');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }
    public function legal(){
        return view('pages.legal');
    }
}
