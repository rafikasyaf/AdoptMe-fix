<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfirmDonate;

class ConfirmDonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ConfirmDonate::all();
        return view('adminpusat.pusat-donate',compact(['data']));
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
        $donate = new ConfirmDonate;
        $donate->id_user=\Auth::user()->id;
        $donate->bank_number=$request->bank_number;
        $donate->bank_name=$request->bank_name;
        $donate->amount=$request->amount;
        if ($request->hasFile('image')) {
             $imageExtension = $request->file('image')->getClientOriginalExtension();
             $imageName = 'image_'.time().'.'.$imageExtension;
             $imageDestination = base_path().'/public/images';
             $request->file('image')->move($imageDestination, $imageName);
             $request->image = '/images/'.$imageName;
             $donate->image=$request->image;
         }
        $donate->save();
        return redirect('profil');

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
        $data=ConfirmDonate::find($id);
        $data->status=$request->status;
        $data->save();
        return back();
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
    }
}
