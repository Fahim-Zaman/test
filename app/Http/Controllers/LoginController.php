<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\customer;

use Validator;
use App\owner;
use App\product;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		
		

		$customer = DB::table('customer')->where('username', $req->uname)
				->where('password', $req->password)
				->get();


		$owner = DB::table('owner')->where('username', $req->uname)
				->where('password', $req->password)
				->get();
		
		

		if(count($owner) > 0)
		{

			$req->session()->put('username', $req->uname);
		
				return redirect()->route('owner.index');
			
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}


		if(count($customer) > 0)
		{

			$req->session()->put('username', $req->uname);
		
				return redirect()->route('customer.index');
			
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
