<?php

namespace App\Http\Controllers;
use App\User;
use App\Account;
use App\idea;
use App\Donation;
use App\idea_review;
use App\event;
use App\report;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
     public function index(Request $req){
     	$user = DB::table('admin')->sum('amount');

		return view('superadmin.index',['new'=>$user]);
	}

	public function profile(Request $req){
		$request = $req->session()->get('username');
    	$details = User::where('username',$request)->get();

    	return view('superadmin.profile', ['detail'=> $details]);
    }

    public function edit($id){

		$detail = User::find($id);
		return view('superadmin.edit', ['details'=>$detail]);
    }

    public function update(Request $req, $id){
        $this->validate($req, [

            "uname"     => "required | unique:user,username",
            
            "name"      => "required",
            "email"      => "required",
            "phone"      => "required"
        ]);
    	$user = User::find($id);

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->save();

		return redirect()->route('superadmin.profile');
    }

    public function add(){

		
		return view('superadmin.Registration');
    }

    public function create(Request $req){
        $this->validate($req, [

            "uname"     => "required | unique:user,username",
            "password"  => "required|min:3",
            "name"      => "required",
            "email"      => "required",
            "phone"      => "required"
        ]);
    	$user = new User();

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->password = $req->password;
    	$user->type = 'supportadmin';
    	$user->save();
    	$kr = new Account();
        $kr->username=$req->uname;
        $kr->type='supportadmin';
        $kr->save();

        return redirect()->route('superadmin.index');
		
    }

    public function event(){

    	$user = event::all();
		
		return view('superadmin.event',['new'=>$user]);
    }

    public function eventcreate(Request $req){
        $this->validate($req, [

            "title"     => "required",
            "details"      => "required",
            "date"      => "required"
            
        ]);
    	$user = new event();

    	$user->title = $req->title;
    	$user->details = $req->details;
    	$user->date = $req->date;
    	
    	$user->save();

		
		return redirect()->route('superadmin.event');
    }

    public function report(){

    	$tr = 'supportadmin';
    	$td = 'not checked';

    	$user = report::where('type',$tr)->where('status',$td)->get();;
		
		return view('superadmin.report',['new'=>$user]);
    }

    public function check(Request $req, $id){

  		$tr='check';

    	$sr= DB::table('report')
            ->where('id', $id)
            ->update(array('status' => $tr));		
		return redirect()->route('superadmin.report');
    }

    public function active(){

    

    	$user = User::where('status','active')->get();;
		
		return view('superadmin.active',['new'=>$user]);
    }

    public function fund(){

    

    	$user = Donation::all();
    	$sum = DB::table('donation')->sum('ammount');
		
		return view('superadmin.fund',['new'=>$user], ['sum'=>$sum]);
    }
    public function tafund(){

    	$td = date('Y-m-d');

    	//echo $td;

    	$user = Donation::where('date','LIKE',$td.'%')->get();
    	$sum = DB::table('donation')->where('date','LIKE',$td.'%')->sum('ammount');
		//echo $sum;
		return view('superadmin.tfund',['new'=>$user], ['sum'=>$sum]);
    }

    


    public function tmfund(){

    	$td = date('Y-m');

    	//echo $td;

    	$user = Donation::where('date','LIKE',$td.'%')->get();
    	$sum = DB::table('donation')->where('date','LIKE',$td.'%')->sum('ammount');
		//echo $sum;
		return view('superadmin.tmfund',['new'=>$user], ['sum'=>$sum]);
    }

    public function showsadmin(){


        //echo $td;

        $user = User::where('type','supportadmin')->get();
        
        //echo $sum;
        return view('superadmin.sd',['new'=>$user]);
    }

    public function sedit($id){


        $us = User::find($id);

        
        
        //echo $sum;
        return view('superadmin.editadmin',['new'=>$us]);
    }

    public function saedit(Request $req,$id){
        $this->validate($req, [

            "uname"     => "required | unique:user,username",
            
            "name"      => "required",
            "email"      => "required",
            "phone"      => "required"
        ]);

       $user = User::find($id);

        $user->username = $req->uname;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->save();

        return redirect()->route('superadmin.supportadminshow');
    }

    public function delete($id){

        $std = User::find($id);
        return view('superadmin.delete', ['std'=>$std]);
    }


    public function deleteadmin($id){

        User::destroy($id);
        return redirect()->route('superadmin.supportadminshow');
    }



}
