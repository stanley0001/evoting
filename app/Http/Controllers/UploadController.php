<?php

namespace App\Http\Controllers;
use App\Admin;
use App\user;
use App\images;
use App\candidates;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class UploadController extends Controller
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
    //homepagepage customization
    public function index()
    {
        $data['data']=DB::table('images')->get();
        //$data['data']=DB::select('select *from images where id=1');
       // $data1['data1']=DB::select('select *from images where id=2');
        //$data2['data2']=DB::select('select *from images where id=3');
       // $data3['data3']=DB::select('select *from images where id=4');
        return view('upload.customize',$data);
    }
    public function addcandidate(Request $request){
        $fastname=$request->fastname;
        $lastname=$request->lastname;
        $nickname=$request->nickname;
        $county=$request->county;
        $constituency=$request->constituency;
        $ward=$request->ward;
        $party=$request->party;
        $image=$request->profile;
        $position=$request->position;
        if($image){
            $profile_image=$image->GetClientOriginalName();
            $image->move('uploads',$profile_image);
             $data=array('fastname'=>$fastname,'lastname'=>$lastname,'nickname'=>$nickname,'county'=>$county,'profile_image'=>$profile_image,
             'position'=>$position,'party'=>$party,'constituency'=>$constituency,'ward'=>$ward) ;     
       candidates::create(
        [
            'firstname' => $data['fastname'],
            'lastname' => $data['lastname'],
            'nickname' => $data['nickname'],
            'county' => $data['county'],
            'profile_image' => $data['profile_image'],
            'position' => $data['position'],
            'party' => $data['party'],
            'constituency' => $data['constituency'],
            'ward' => $data['ward'],

        ]
    );
            return back();
        }
    }
    public function update(Request $request,$id){
        $images = images::find($id);
        $description=$request->description;
        $image=$request->image;
        if($image){
            $imagename=$image->GetClientOriginalName();
            $image->move('uploads',$imagename);

            $images->image="/uploads/".$imagename;
            $images->description=$description;
            $images->save();
            return back();
        }else{
            return back();

        }
        
         
       
    }
}