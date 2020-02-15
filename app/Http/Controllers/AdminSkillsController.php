<?php

namespace App\Http\Controllers;

use App\Skill;
use App\WorkSample;
use Illuminate\Http\Request;

class AdminSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills = Skill::all();
        return view('dashboard.skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $input['image'] = $name;

        }
        Skill::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $skill = Skill::findorfail($id);
        $workSamples = $skill->workSamples;
        return view('dashboard.worksample.show',compact('workSamples'));
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
        $skill = Skill::findorfail($id);
        $skills = Skill::all();
        return view('dashboard.skill.edit',compact('skill','skills'));
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
        $input = $request->all();
        if ($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $input['image'] = $name;

        }
        $skill =Skill::findorfail($id);
        $skill->update($input);
        return redirect()->back();
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
        $skill = Skill::findorfail($id);
        unlink(public_path('/images/').$skill->image);
        $skill->delete();
        return redirect('dashboard/skills');
    }
}
