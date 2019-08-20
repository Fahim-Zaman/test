<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class liveSearchController extends Controller
{

	//---------------------------------------  supportadmin--------------------------------------------------------------
    function index()
    {
     return view('supportadmin.search');
    }

    function action(Request $request)
    {

     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('user')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('username', 'like', '%'.$query.'%')
       
         ->orWhere('type', 'like', '%'.$query.'%')
         ->orWhere('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('status', 'like', '%'.$query.'%')
    
         ->get();
         
      }
      else
      {
       $data = DB::table('user')
     
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->username.'</td>
       
         <td>'.$row->type.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->status.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }

    //-------------------------------------------------------Super admin-----------------------------------------------


     function indexsuperadmin()
    {
     return view('superadmin.searchsuperadmin');

    }

    function actionsuperadmin(Request $request)
    {

     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('user')
         ->orwhere('id', 'like', '%'.$query.'%')
         ->orWhere('username', 'like', '%'.$query.'%')
       
         ->orWhere('type', 'like', '%'.$query.'%')
         ->orWhere('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('status', 'like', '%'.$query.'%')
          ->get();
    
     
         
      }
      else
      {
       $data = DB::table('user') ->where('type','supportadmin')
     
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->username.'</td>
       
         <td>'.$row->type.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->status.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }

    //------------------------------------------invest ---------------------------------------

     function indexinvest()
    {
     return view('investor.search');

    }

    function actioninvest(Request $request)
    {

     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
      		
       $data = DB::table('donation')


         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('representor_name', 'like', '%'.$query.'%')
         ->orWhere('date', 'like', '%'.$query.'%')
         
          ->get();


         
      }
      else
      {
      	$r = $req->session()->get('username');
       $data = DB::table('donation') ->where('investor_name',$r)
     
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
          <td>'.$row->investor_name.'</td>
          <td>'.$row->representor_name.'</td>
        
       
        
         <td>'.$row->ammount.'</td>
         <td>'.$row->date.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }

    //------------------------------------------------------------------------repsentor-------------------------


  function indexrep()
    {
     return view('idea.search');

    }
     function actionrep(Request $request)
    {

     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
      		
       $data = DB::table('donation')
         ->where('id', 'like', '%'.$query.'%')
   
       
         ->orWhere('invetorname', 'like', '%'.$query.'%')
         ->orWhere('date', 'like', '%'.$query.'%')
         
          ->get();





    
     
         
      }
      else
      {
      	$r = $req->session()->get('username');
       $data = DB::table('donation') ->where('representor_name',$r)
     
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
        
       
         <td>'.$row->representor_name.'</td>
          <td>'.$row->investor_name.'</td>
         <td>'.$row->ammount.'</td>
         <td>'.$row->date.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }
}
