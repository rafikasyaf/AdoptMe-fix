<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use Auth;

class AdminCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Animal::where('shelter',\Auth::user()->name)->where('category','cat')->get();
        return view('admin.admin-cat',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peteditor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cat = new Animal;
        if ($request->hasFile('image')) {
             $imageExtension = $request->file('image')->getClientOriginalExtension();
             $imageName = 'image_'.time().'.'.$imageExtension;
             $imageDestination = base_path().'/public/images';
             $request->file('image')->move($imageDestination, $imageName);
             $request->image = '/images/'.$imageName;
             $cat->image=$request->image;
         }
        $cat->name=$request->name;
        $cat->category=$request->category;
        $cat->age=$request->age;
        $cat->shelter=\Auth::user()->name;
        $cat->gender=$request->gender;
        $cat->vaccinated=$request->vaccinated;
        $cat->spayed=$request->spayed;
        $cat->health=$request->health;
        $cat->story=$request->story;
        $cat->save();
        if($request->category=='cat'){
        return redirect('admin-cat');
        }else{
        return redirect('admin-dog');
        }
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
        $data=Animal::find($id);
        return view('admin.peteditor',compact(['data']));
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
        $cat=Animal::find($id);
        if ($request->hasFile('image')) {
             $imageExtension = $request->file('image')->getClientOriginalExtension();
             $imageName = 'image_'.time().'.'.$imageExtension;
             $imageDestination = base_path().'/public/images';
             $request->file('image')->move($imageDestination, $imageName);
             $request->image = '/images/'.$imageName;
             $cat->image=$request->image;
         }
        $cat->name=$request->name;
        $cat->age=$request->age;
        $cat->shelter=\Auth::user()->name;
        $cat->gender=$request->gender;
        $cat->vaccinated=$request->vaccinated;
        $cat->spayed=$request->spayed;
        $cat->health=$request->health;
        $cat->story=$request->story;
        $cat->save();
        if($request->category=='cat'){
        return redirect('admin-cat');
        }else{
        return redirect('admin-dog');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return back();
    }
}
