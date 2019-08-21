<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\owner;
use App\product;
use App\Http\Requests\StudentRequest;


class ownerController extends Controller
{
     public function add(){

		
		return view('owner.Registration');
    }

     public function loadadmin(){

		
	      $product=product::all();

        return view('owner.index', ['iac' => $product]);
    }

    public function create(Request $req){
    	        /*$this->validate($req, [

            "username"     => "required | unique:owner,username",
            "password"  => "required|min:3",
            "name"      => "required",
            "email"      => "required",
         
        ]);*/
    	$user = new owner();

    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->save();

  
          $product=product::all();

        return view('owner.index', ['iac' => $product]);
		//return redirect()->route('index');
    }

     public function product(){

		
		return view('owner.Registrationproduct');
    }

    public function productpost(Request $req){
    	        /*$this->validate($req, [

            "username"     => "required | unique:owner,username",
            "password"  => "required|min:3",
            "name"      => "required",
            "email"      => "required",
         
        ]);*/
    	$user = new product();

    	$user->name = $req->name;
    	$user->model = $req->model;
    	$user->price  = $req->price;
    	$user->image  = $req->image;
    	$user->description  = $req->description;
    	$user->save();

  
  //	return view('owner.Registrationproduct');
		//return redirect()->route('index');
    }
}
