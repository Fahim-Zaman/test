<?php

namespace App\Http\Controllers;
use App\User;
use App\admin;
use App\Account;
use App\idea;
use App\report;
use App\Donation;
use App\idea_review;
use App\ideaport;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public function index(Request $req){

        $request = $req->session()->get('username');
        $details = Account::where('username',$request)->get();

        $temp = idea::where('status','accepted')->get();

		return view('idea.index',['new'=> $details[0]],['t'=>$temp]);
	}

	public function postidea(Request $req){

        $request = $req->session()->get('username');
        $user = new idea();
        $user->username = $request;
    	$user->title = $req->title;
    	$user->details = $req->details;
    	$user->projected_amount = $req->pamount;
    	$user->save();

		return redirect()->route('idea.index');

		return view('idea.index',['new'=> $details[0]],['t'=>$temp]);
	}

	public function showcomment(Request $req,$id){

        $temp=idea_review::where('idea_id',$id)->get();
		$details= idea::find($id);  

		return view('idea.comment',['t'=> $details],['tr'=>$temp[0]]);
	}
	public function show(Request $req){
		$request = $req->session()->get('username');
    	$details = User::where('username',$request)->get();

    	return view('idea.profile', ['detail'=> $details]);
    }

    public function edit($id){

		$detail = User::find($id);
		return view('idea.edit', ['details'=>$detail]);
    }
    public function update(Request $req, $id){

    	$user = User::find($id);

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->save();

		return redirect()->route('idea.profile');
    }

    public function portfolio(){

		
		return view('idea.portfolio');
    }
    public function create(Request $req){
    

    	$user = new ideaport();

    	$user->id = $req->id;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->School = $req->School;
    	$user->college = $req->college;
    	$user->University = $req->University;
    	$user->Address = $req->Address;
    	$user->age = $req->age;

    	
    	$user->save();

		return redirect()->route('idea.show');
    }
    public function showp(Request $req){
		$stdList = ideaport::where('type','idearepresentor')->get();

	

    	return view('idea.replist',['std'=> $stdList]);
    }
    public function editrep($id){

		$detail = ideaport::find($id);

		
		return view('idea.editrep', ['details'=>$detail]);
    }
    public function updaterep(Request $req, $id){

    	$user = ideaport::find($id);

    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->School = $req->School;
    	$user->college = $req->college;
    	$user->University = $req->University;
    	$user->Address = $req->Address;
    	$user->age = $req->age;
    	$user->save();

		return redirect()->route('idea.show');
    }
    public function withdraw(Request $req){

        $request = $req->session()->get('username');
        $details = Account::where('username',$request)->get();

        $temp = idea::where('username',$request)->get();
        
        return view('idea.withdraw', ['new'=>$details[0]],['t'=>$temp]);   
    }

    public function verify(Request $req){

        $request = $req->session()->get('username');
        $detail = Account::where('username',$request)->get();

        $details = idea::where('username',$request)->get();
        global $temp;
        foreach ($details as $value) {
                 $temp =(int) $value['donated_amount'];
            }
            $tr=$req->amount;
            //echo $temp;
            if($temp==0||$tr>$temp)
            {
            	echo "Insufficient money";
            }
            else
            {
            	$temp = $temp - (int)$req->amount;
            	$result= DB::table('idea')
	            ->where('username', $request)
	            ->update(array('donated_amount' => $temp));


	            foreach ($detail as $value) {
                 $new =(int) $value['balance'];
            	}
	            
            	if($new==0)
            	{
            		$result= DB::table('accountinfo')
		            ->where('username', $request)
		            ->update(array('balance' => $tr));
		            return redirect()->route('idea.index');
            	}
	            
	            else
	            {
	            	$tr=$tr+$new;
	            	$result= DB::table('accountinfo')
		            ->where('username', $request)
		            ->update(array('balance' => $tr));
		            return redirect()->route('idea.index');
	            }

	            
            }
        
           
    }

    public function showinvestor(Request $req){

    	$request = $req->session()->get('username');
		$detail = Donation::where('representor_name',$request)->get();

		
		return view('idea.showinvestor', ['details'=>$detail]);
    }

    public function createre(Request $req){

		
		return view('idea.Registration');
    }

    public function insert(Request $req){

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
    	$user->type = 'investor';
    	$user->save();

        $request = $req->uname;
        
        $kr = new Account();
        $kr->username=$request;
        $kr->type='idea';
        $kr->save();

		return redirect()->route('index');
		
    }



}
