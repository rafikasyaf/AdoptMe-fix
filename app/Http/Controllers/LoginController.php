<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function postlogin(Request $request){
    	$user=User::where('username',$request->username)->first();
    	if(count($user)==0){
    		return back();
    	}
    	else{
    		if(\Hash::check($request->password,$user->password)){
    			\Auth::login($user);
    			if($user->level=='admin pusat'){
    				return redirect('dashboard');
    			}
    			elseif($user->level=='admin'){
    				return redirect('index');
    			}
    			elseif($user->level=='member'){
    				return redirect('home');
    			}
    			else{
    				return abort(404);
    			}
    		}
    	}
    	return back();
    }

    public function postregister(Request $request){
    	$user = new User;
    	$user->username=$request->username;
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->phonenumb=$request->phonenumb;
    	$user->level='member';
    	$user->password=bcrypt($request->password);
    	$user->save();
    	return back();
    }

    public function logout(){
    	\Auth::logout();
    	return redirect('/');
    }

}
