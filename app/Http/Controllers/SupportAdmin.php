<?php

namespace App\Http\Controllers;


use App\User;
use App\Account;
use App\idea;
use App\Donation;
use App\moneyseized;
use App\complain;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportAdmin extends Controller
{
   /* public function index(Request $req){
		return view('supportadmin.index');
	}*/

    public function index(Request $req){

        $request = $req->session()->get('username');
        $details = Account::where('username',$request)->get();

      

       

        $temp = idea::where('status','pending')->get();

            

       
  

        return view('supportadmin.index',['new'=> $details[0]],['t'=>$temp]);
    }

	 public function profile(Request $req){
		return view('supportadmin.profile');
	}

	public function show(Request $req){
		$request = $req->session()->get('username');
    	$details = User::where('username',$request)->get();

    	return view('supportadmin.profile', ['detail'=> $details]);
    }


    public function showinvestor(Request $req){
		$stdList = User::where('type','investor')->get();

		$investoraccount=Account::where('type','investor')->get();

    	return view('supportadmin.investorlist', ['iac' => $investoraccount],['std'=> $stdList]);
    }

     public function complain(Request $req){
		$mseized = moneyseized::where('status','seized')->get();

		//$complain=complain::where('type','investor')->get();

		$complain=complain::where('status','not checked')->get();

    	return view('supportadmin.complain', ['iac' => $complain],['std'=> $mseized]);
    }

      

    public function checkcomplain(Request $req,$id){

		 

	

		 $sd=DB::table('report')
            ->where('id',$id)
            ->update(['status' =>'checked']);

         


		  $mseized = moneyseized::where('status','seized')->get();

		//$complain=complain::where('type','investor')->get();

	$complain=complain::where('status','not checked')->get();

    	return view('supportadmin.complain', ['iac' => $complain],['std'=> $mseized]);
	
	}



      public function showrep(Request $req){
		$stdList = User::where('type','idea')->get();

    	return view('supportadmin.replist', ['std'=> $stdList]);
    }

    public function edit($id){

		$detail = User::find($id);

		return view('supportadmin.edit', ['details'=>$detail]);
    }

     public function editin($id){

		$detail = User::find($id);

		
		return view('supportadmin.editinvestor', ['details'=>$detail]);
    }

       public function activeinv(Request $req,$id){
       	   $request = $req->session()->get('username');

      	$activeinvestor = Account::find($id);
      $aaa=DB::table('mseized')->where('supportadmin', $request)
                                ->where('investor',$activeinvestor->username)
                                ->where('status','seized')
                                ->get();

             $taka=(int)$aaa[0]->balance;

             //------------------------------- 
                  DB::table('user')
            ->where('username',$activeinvestor->username )
            ->update(['status' => 'active']);

                    
   		 	//-----------------------------------------------	
			$activeinvestor->balance =(int)$taka;
			$activeinvestor->status ="active";
			$activeinvestor->save();

			DB::table('mseized')
            ->where('supportadmin', $request)
            ->where('investor',$activeinvestor->username)
            ->where('status','seized')
            ->update(['balance' => 0,'status'=> 'active']);

     

          $sabal = Account::where('username',$request)->get();

            $sabalance=$sabal[0]->balance;

            $sabalance=(int)$sabalance-(int)$taka;

            $sabal[0]->balance=(int)$sabalance;
            $sabal[0]->save();

           



		
	     $stdList = User::where('type','investor')->get();

		$investoraccount=Account::where('type','investor')->get();

    	return view('supportadmin.investorlist', ['iac' => $investoraccount],['std'=> $stdList]);
    }

     public function deactiveinv(Request $req,$id){

       	
               					
			$activeinvestor = Account::find($id);
			$activeinvestor->status ="deactive";

			//-------------------------


			 DB::table('user')
            ->where('username',$activeinvestor->username )
            ->update(['status' => 'deactive']);

			


			//---------------------------		

			$investorbalance= (int)$activeinvestor->balance;

             $request = $req->session()->get('username');
			$sabal = Account::where('username',$request)->get();

            $sabalance=$sabal[0]->balance;
//-----------------------------------------------------------
       

	    	DB::table('mseized')->insert(
    ['supportadmin' => $request , 'investor' => $activeinvestor->username ,'status' => 'seized' , 'balance' => $investorbalance ]
);


	    	//------------------------------------

            $sabalance=(int)$sabalance+ (int)$investorbalance;

            $sabal[0]->balance=(int)$sabalance;
            $sabal[0]->save();
            $activeinvestor->balance =0;
            $activeinvestor->save();
           


		
	     $stdList = User::where('type','investor')->get();
		$investoraccount=Account::where('type','investor')->get();
     return view('supportadmin.investorlist', ['iac' => $investoraccount],['std'=> $stdList]);
         

        
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

		return redirect()->route('supportadmin.profile');
    }


    public function updatein(Request $req, $id){
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

		return redirect()->route('supportadmin.profile');
    }

    public function delete($id){

		$std = User::find($id);
		return view('supportadmin.delete', ['std'=>$std]);
    }

    public function destroy($id){

		User::destroy($id);
		return redirect()->route('supportadmin.investorlist');
	}
	 

    public function add(){

		
		return view('supportadmin.Registration');
    }

    public function create(Request $req){
    	/*echo "hii";*/
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
        return redirect()->route('supportadmin.index');
		
    }
    public function credit(){

        
        return view('supportadmin.add_credit');
    }

    public function addcredit(Request $req){
        /*echo "hii";*/

        
        $request = $req->session()->get('username');

        
        $details = Account::where('username',$request)->get();

        global $temp;
        
        if(count($details)>0)
        {
            foreach ($details as $value) {
                 $temp =(int) $value['balance'];
            }
            $temp = $temp + (int)$req->amount;
             //$user = new Account();
            
            $details->username = $request;
            $details->card_number = $req->cnum;
            $details->balance = $temp; 

            
             $result= DB::table('accountinfo')
            ->where('username', $request)
            ->update(array('balance' => $temp));
            
        }

        else
        {
            $user = new Account();
            $user->username = $request;
            $user->card_number = $req->cnum;
            $user->balance = $req->amount; 
            $user->save();
        }

        

         return redirect()->route('investor.index');
    }

    //-----------------------------------------------updddd

      public function withdraw(Request $req){

        $request = $req->session()->get('username');
        $details = Account::where('username',$request)->get();
        
        return view('supportadmin.withdraw',['new'=> $details[0]]);
        
    }

    public function withdrawverify(Request $req){

        $request = $req->session()->get('username');
        $details = Account::where('username',$request)->get();
        global $temp;
        foreach ($details as $value) {
                 $temp =(int) $value['balance'];
            }
        $tr =$req->amount;
        if($tr >$temp)
        {
            echo "Insuficient Amount..";
        }

        else
        {
            $temp = $temp - (int)$req->amount;
            $result= DB::table('accountinfo')
            ->where('username', $request)
            ->update(array('balance' => $temp));
            $details = Account::where('username',$request)->get();

            $temp = idea::where('status','pending')->get();
            return view('supportadmin.index',['new'=> $details[0]],['t'=>$temp]);
        }   
        
    }

    public function donate(Request $req,$id){

        $request = $req->session()->get('username');
        $details = Account::where('username','investor')->get();

        $temp = idea::find($id);
        
        return view('supportadmin.donate', ['new'=>$details[0]],['t'=>$temp]);   
    }

    public function donateverify(Request $req,$id){

        $request = $req->session()->get('username');
        $details = Account::where('username','investor')->get();

        global $temp;
        foreach ($details as $value) {
                 $temp =(int) $value['balance'];
            }
        $tr = $req->amount;

        if($tr >$temp)
        {
            echo "Insuficient Amount..";
        }

        else
        {
            $temp = $temp - (int)$req->amount;
            $result= DB::table('accountinfo')
            ->where('username', 'investor')
            ->update(array('balance' => $temp));
            $details = Account::where('username','investor')->get();


            $sw = idea::where('id',$id)->get();             
            global $temp;
            foreach ($sw as $value) {
                     $temp =(int) $value['donated_amount'];
                }
            $tr=$tr+$temp;

            $sr= DB::table('idea')
            ->where('id', $id)
            ->update(array('donated_amount' => $tr));

            

            $sp =new Donation();
            $sp->investor_name = $request;

            $sk = idea::where('id',$id)->get();             
            global $temp;
            foreach ($sk as $value) {
                     $temp = $value['username'];
                }

            $sp->representor_name = $temp;
            $sp->ammount=$tr;
            $sp->date = date('Y-m-d');
            $sp->save();

            $temp = idea::where('status','pending')->get();


            return view('supportadmin.index',['new'=> $details[0]],['t'=>$temp]);
            
        } 
    }


     public function history(Request $req){

        $request = $req->session()->get('username');
        $details = Donation::where('investor_name',$request)->get();
        
        return view('supportadmin.history', ['new'=>$details]);   
    }



    public function approveverify(Request $req,$id){

     

             $request = $req->session()->get('username');
		    	$approvestatus = idea::find($id);

		    	$approvestatus->status = "accepted";
		    	
		    	$approvestatus->save();
		    $details = Account::where('username',$request)->get();

            $temp = idea::where('status','pending')->get();


            return view('supportadmin.index',['new'=> $details[0]],['t'=>$temp]);
            
        //} 
    }

    public function ideadelete(Request $req,$id){

 

            $request = $req->session()->get('username');
		   idea::destroy($id);

		    $details = Account::where('username',$request)->get();

            $temp = idea::where('status','pending')->get();


            return view('supportadmin.index',['new'=> $details[0]],['t'=>$temp]);
            
        //} 
    }




}
