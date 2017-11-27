<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendreport(Request $request){
         $input = $request->except(['_token']);
         $imageName = '';
         if ($request->hasFile('image')) {
             $imageExtension = $request->file('image')->getClientOriginalExtension();
             $imageName = 'image_'.time().'.'.$imageExtension;
             $imageDestination = base_path().'/public/images';
             $request->file('image')->move($imageDestination, $imageName);
             $input['image'] = '/images/'.$imageName;
         } 
         Report::create($input);
         return back();
    }
}
