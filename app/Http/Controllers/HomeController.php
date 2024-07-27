<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page(Request $request){
        return view('home');
    }

    public function aboutpage(Request $request){
        return view('about');
    }

    public function contactpage(Request $request){
        return view('contact');
    }
}
