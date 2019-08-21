<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer;

class customerController extends Controller
{
      public function add(){

		
		return view('customer.Registration');
    }

    public function create(Request $req){
    	        $this->validate($req, [

            "username"     => "required | unique:customer,username",
            "password"  => "required|min:3",
            "name"      => "required",
            "email"      => "required",
         
        ]);
    	$user = new customer();

    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->save();

  
        
           	return view('customer.Registration');
		//return redirect()->route('index');
    }
}
