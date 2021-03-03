<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //show admin dashbord
    public function index()
    {
        return view('admin');
    }
    //admin homepage management
    public function home()
    {
        return view('admin.home');
    }
    //manage events
    public function events()
    {
        return view('admin.events');
    }
    //manage posts
    public function posts()
    {
        return view('admin.posts');
    }
    //manage users
    public function users()
    {
        return view('admin.users');
    }
    public function addadmin(Request $request)
   {
    
       $name=$request->input('name');
       $email=$request->input('email');
       $job_title=$request->input('job_title');
       $password=$request->input('password');
       $password1=$request->input('password1');
       $message='New user added successifully';
       if($password==$password1)
       {
         $verify=DB::select("select *from admins where email= '$email'");
         if(count($verify)>0){
            return redirect()->back()->withinput($request->only('email','password'));
         }else
         $data=array('name'=>$name,'email'=>$email,'job_title'=>$job_title,'password'=>$password);
       
       admin::create(
           [
            'name' => $data['name'],
            'email' =>$data['email'],
            'job_title'=> $data['job_title'],
            'password' => Hash::make($data['password']),

           ]
       );
       return redirect()->back();
       }else
      // redirect back with details if password do not match
       return redirect()->back()->withinput($request->only('name','email','job_title','password'));
       
   }
   //get admins from admin table
   public function getadmins(){
    $data['data']=DB::table('admins')->get();
   
       if(count($data)>0)
       {
           return view('admin.admin',$data);
       }else{
           return view('admin.admin');
       }
   }
  // get users from users table
   public function getusers(){
    $data['data']=DB::table('users')->get();
       if(count($data)>0)
       {
           return view('admin.user',$data);
       }else{
           return view('admin.user');
       }
   }
   //edit user information
   public function edituser($id)
   {
     $user = User::find($id);
     return view('admin.userupdate')->with('user',$user);
   }
   //update edited information to db
   public function updateuser(Request $request ,$id)
   {
     $user = user::find($id);
     $password=$request->input('password');
     $password1=$request->input('password1');
     $password3="";
     if($password=$password1){
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        return view('admin.userupdate')->with('user',$user);
     }elseif($password==$password3){
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        return view('admin.userupdate')->with('user',$user);
     }else{
        return redirect()->back();
     }

   }
   //uploading images to blade  welcome page 
   public function uploadimage(Request $request)
   { 
       if($request->hasfile('img'))
       {
       $id=$request->input('id');
       $image=$request->input('file');
       $imagename=$image->GetClientOriginalName();
       $description=$request->input('description');
       $request->file->move(public_path('/uploads'),$imagename);
    }else{
        return redirect()->back();
    }
   }
   public function imageupload()
   {
        echo "brainstech";
   }
}
