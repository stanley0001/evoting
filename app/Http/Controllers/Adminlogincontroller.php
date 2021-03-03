<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class adminlogincontroller extends Controller
{
    public function showloginform()
    {
        return view('auth.adminlogin');
    }
    public function username()
    {
        return 'email';
    }
    public function login(Request $request)
    {
        //validate form data
      $this->validate($request,[
            'email' => 'required|email' ,
            'password'=>'required|min:6'
        ]);
        //attempt to login
        if(Auth::guard('admin')->Attempt(['Email'=>$request->email,'password'=>$request->password], $request->remember))
        {
        //if succesiful then redirect user to intended location
        return redirect()->intended(route('admin.dashbord'));
        }
        //if unsuccesiful redirect back to login page
        return redirect()->back()->withinput($request->only($this->username(), 'password'));
       
    }
    
}
