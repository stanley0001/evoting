<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Admin;
use App\candidates;
use DB;

class welcomecontroller extends Controller
{
    public function checkvoter(Request $request){
    	$id=$request->id;
    	
    	$data['data']=User::query()
          ->where('name', 'LIKE', "%{$id}%") 
          ->orWhere('email', 'LIKE', "%{$id}%") 
          ->get();
          $data2="no data found";
                 if(count($data)>0)
       {
           return view('welcome.checkresults',$data);
       }else
       {
           return back();
       }
    }
}
