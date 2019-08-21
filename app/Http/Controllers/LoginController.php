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
		
		

		if(count($result) > 0)
		{

			$req->session()->put('username', $req->uname);
			$req->session()->put('type', $result[0]->type);
			if($result[0]->type=='admin')
			{
				return redirect()->route('owner.homepage');
			}
			elseif ($result[0]->type=='investor') 
			{
				return redirect()->route('investor.index');
			}
			elseif ($result[0]->type=='superadmin') 
			{
				return redirect()->route('superadmin.index');
			}
			elseif ($result[0]->type=='idea') 
			{
				return redirect()->route('idea.index');
			}
			elseif ($result[0]->type=='supportadmin') 
			{
				return redirect()->route('supportadmin.index');
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
