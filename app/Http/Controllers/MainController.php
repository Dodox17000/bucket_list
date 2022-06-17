<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
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
