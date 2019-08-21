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
		
		

		$result = DB::table('owner')->where('username', $req->uname)
				->where('password', $req->password)
				->get();


		$cus = DB::table('customer')->where('username', $req->uname)
				->where('password', $req->password)
				->get();
		
		

		if(count($result) > 0)
		{

			$req->session()->put('username', $req->uname);
			$req->session()->put('type', $result[0]->type);
			if($result[0]->type=='admin')
			{
				return redirect()->route('owner.homepage');
			}

			
		}

		else if (count($cus) > 0)
		 {


			$req->session()->put('username', $req->uname);
			$req->session()->put('type', $cus[0]->type);
			if($cus[0]->type=='customer')
			{
				return redirect()->route('customer.homepage');
			}
				
				}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}


		
	}
}
