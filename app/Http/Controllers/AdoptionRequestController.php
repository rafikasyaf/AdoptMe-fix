<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdoptionRequest;
use App\Submit;
use App\Animal;

class AdoptionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data=AdoptionRequest::get();
        return view('adminpusat.pusat-adoptreq',compact(['data']));
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
         $submit = new Submit;
         $submit->id_user=\Auth::user()->id;
         $submit->username=\Auth::user()->username;
         $submit->name=\Auth::user()->name;
         $submit->phone=\Auth::user()->phonenumb;
         $submit->email=\Auth::user()->email;
        $submit->address=\Auth::user()->address;
        $submit->adoptfor=$request->adoptfor;
        $submit->originshelter=$request->originshelter;
        if ($request->hasFile('adoptionform')) {
             $fileExtension = $request->file('adoptionform')->getClientOriginalExtension();
             $fileName = 'file_'.time().'.'.$fileExtension;
             $fileDestination = base_path().'/public/images';
             $request->file('adoptionform')->move($fileDestination, $fileName);
             $request->adoptionform = '/images/'.$fileName;
             $submit->adoptionform=$request->adoptionform;
         }

        $submit->save();
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
        $data=AdoptionRequest::find($id);
        $data->status=$request->status;
        $data->save();
        return back;
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
