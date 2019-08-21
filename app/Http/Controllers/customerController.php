<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer;
use App\product;
use App\owner;
use App\cart;

class customerController extends Controller
{
      public function add(){

		
		return view('customer.Registration');
    }

     public function loadcustomer(){

        
          $product=product::all();

        return view('customer.index', ['iac' => $product]);
    }

     public function cart(Request $req,$id){

     $req->session()->put('username', $req->uname);



        $user = new customer();

         $user->id = $req->id;
        $user->name = $req->name;
        $user->model = $req->model;
        $user->price = $req->price;
        $user->username = "fake";
        $user->save();

        return redirect()->route('home.index');

        
          $product=product::find();

        return view('customer.index', ['iac' => $product]);
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
