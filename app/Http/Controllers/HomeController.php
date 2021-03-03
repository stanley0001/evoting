<?php

namespace App\Http\Controllers;
use App\Admin;
use App\user;
use App\candidates;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function vote(){
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "president") 
        ->get();
               if(count($data)>0)
       {
           return view('main.vote',$data);
       }
        return view('main.vote');
        
    }
     public function status(){
        return view('main.status');
        
    }
    public function president(Request $request){
        $id=$request->checkbox;
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "governor") 
        ->get();
        $data2['data2']=candidates::query()
        ->where('id', 'LIKE', "$id") 
        ->get();
               if(count($data)>0)
       {
        
           return view('main.governor',$data);
       }
        return view('main.governor');
        
    }
        public function governor(Request $request){
        $id=$request->checkbox;
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "member of pariament") 
        ->get();
               if(count($data)>0)
       {
           return view('main.mp',$data);
       }
        return view('main.mp');
        
    }
            public function mp(Request $request){
        $id=$request->checkbox;
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "women rep") 
        ->get();
               if(count($data)>0)
       {
           return view('main.womenrep',$data);
       }
        return view('main.womenrep');
        
    }
          public function womenrep(Request $request){
        $id=$request->checkbox;
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "mca") 
        ->get();
               if(count($data)>0)
       {
           return view('main.mca',$data);
       }
        return view('main.mca');
        
    }
              public function final(Request $request){
        $id=$request->checkbox;
        $data['data']=candidates::query()
        ->where('position', 'LIKE', "mca") 
        ->get();
               if(count($data)>0)
       {
           return view('main.mca',$data);
       }
        return view('main.mca');
        
    }
    
}
