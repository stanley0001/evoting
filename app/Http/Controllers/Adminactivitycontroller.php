<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Adminactivitycontroller extends Controller
{
    
   public function addadmin(Request $request)
   {
    
       $name=$request->input('name');
       $email=$request->input('email');
       $job_title=$request->input('job_title');
       $password=$request->input('password');
      /* $password1=$request->input('password1');
       if($password==$password1)
       {
         $data=array('name'=>$name,'email'=>$email,'job_title'=>$job_title,'password'=>$password);
         DB::table('admin')->insert($data);
       }
       return back()->withinput()->only('name','email','job_title','password');*/
       $data=array('name'=>$name,'email'=>$email,'job_title'=>$job_title,'password'=>$password);
       DB::table('admins')->insert($data);
       echo "hello";
   }
}
