<?php

namespace App\Http\Controllers;

use App\Category;


use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('dashboard.category.index',compact('categories'));

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
        Category::create($input);
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
        $category = Category::findorfail($id);
        $workSamples = $category->worksamples;
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
        $category = Category::findorfail($id);
        $categories = Category::all();
        return view('dashboard.category.edit',compact('category','categories'));
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
        $category = Category::findorfail($id);
        $category->update($input);
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
        $category = Category::findorfail($id);
        unlink(public_path('/images/').$category->image);
        $category->delete();
        return redirect('dashboard/categories');
    }


}
