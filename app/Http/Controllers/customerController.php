<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer;
use App\product;
use App\owner;
use App\cart;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
      public function add(){

		
		return view('customer.Registration');
    }

     public function loadcustomer(){

        
          $product=product::all();

        return view('customer.index', ['iac' => $product]);
    }

     public function cartxx(Request $request,$id){

   // $req->session()->put('username', $req->uname);


       $p=product::find($id);



       
 /*       DB::table('cart')->insert(
    ['name' => $p[0]->name, 'model' => $p[0]->model,'price'=>$p[0]->price  , 'username'=>'fake']
);*/



        
        //  $product=product::find();

      //  return view('customer.index', ['iac' => $product]);
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
