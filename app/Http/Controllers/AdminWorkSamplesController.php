<?php

namespace App\Http\Controllers;

use App\Category;
use App\Skill;
use App\WorkSample;
use Illuminate\Http\Request;

class AdminWorkSamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workSamples = WorkSample::all();

        return view('dashboard.worksample.index',compact('workSamples'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name','id')->all();
        $skills = Skill::pluck('name','id')->all();
        return view('dashboard.worksample.create',compact('skills','categories'));
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
            $request->merge(['image' => $name]);
            $input['image']= $name;
//            dd($input);
//            $photo = WorkSample::create(['image'=>$name]);
        }
        $workSample = WorkSample::create($input);
        return redirect('dashboard/workSample');
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
        $workSample = WorkSample::findorfail($id);
        $categories = Category::pluck('name','id')->all();
        $skills = Skill::pluck('name','id')->all();
        return view('dashboard.worksample.edit',compact('workSample','skills','categories'));

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
            $file->move('image',$name);
            $input['image'] = $name;

        }
        $workSample = WorkSample::findorfail($id);
        $workSample->update($input);
        return redirect('dashboard/workSample');
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
        $workSample = WorkSample::findorfail($id);
        unlink(public_path('/images/').$workSample->image);
        $workSample->delete();

        return redirect('dashboard/workSample');

    }
}
