<?php

namespace App\Http\Controllers;

use App\owner;

use Illuminate\Http\Request;

class ownerController extends Controller
{
     public function add(){

		
		return view('owner.Registration');
    }

    public function create(Request $req){
    	        $this->validate($req, [

            "username"     => "required | unique:owner,username",
            "password"  => "required|min:3",
            "name"      => "required",
            "email"      => "required",
         
        ]);
    	$user = new owner();

    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->save();

  
        
           	return view('owner.Registration');
		//return redirect()->route('index');
    }
}
