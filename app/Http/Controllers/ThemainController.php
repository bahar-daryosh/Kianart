<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Skill;
use App\WorkSample;
use Illuminate\Http\Request;

class ThemainController extends Controller
{
    public function  index(){
        $posts = Post::all();
        $workSamples = WorkSample::all();
        $categories = Category::all();
        $skills = Skill::all();
        return view('home.index',compact('workSamples','categories','skills','posts'));
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
    public function workSample($id){
        $workSample = WorkSample::findorfail($id);
        return view('home.worksample.work-sample',compact('workSample'));
    }
    public function workSamples(){
        $workSamples = WorkSample::all();
        return view('home.worksample.work-samples',compact('workSamples'));
    }
    public function workSkill($id){
        $skill = Skill::findorfail($id);
        $workSamples = $skill->workSamples;
//        dd($workSamples);
        return view('home.worksample.skill.workSample-skill',compact('workSamples'));

    }
    public function workCategory($id){
        $category = Category::findorfail($id);
        $workSamples = $category->workSamples;
        return view('home.worksample.category.workSample-category',compact('workSamples'));

    }
}
