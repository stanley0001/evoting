<?php

namespace App\Http\Controllers;
use App\Admin;
use App\user;
use App\candidates;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class maincontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function polls(){
        return view('main.poll');
    }
    public function results(){
        return view('main.results');
    }
    public function candidates(){
        $data['data']=DB::table('candidates')->get();
   
       if(count($data)>0)
       {
           return view('main.candidates',$data);
       }else{
           return view('admin.admin');
       }
        
    }
  
}
