<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemainController extends Controller
{
    public function  index(){
        return view('home.index');
    }
    public function aboutus(){

        return view('home.about-us');
    }
    public function tags(){
        return view('home.tags');
    }
    public function contact(){

        return view('home.contact');
    }
    public function articles(){

        return view('home.articles');
    }
    public function singleArticle(){

        return view('home.single-article');
    }
    public function card(){
        return view('home.card');
    }
}
