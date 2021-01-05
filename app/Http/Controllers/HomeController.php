<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use DB;
use Image;
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

    public function changePassword(){
        return view('auth.changepassword');
    }

    public function updatePassword(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass == $confirm) {
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }

    }

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('login')->with($notification);
       

    }

    public function profile(){
      $id = Auth::id();
      $district = DB::table('districts')->get();
      $upazila_thana = DB::table('upazila_thanas')->get();
      $client = DB::table('users')->where('id',$id)->first();
      return view('frontend.usersprofile',compact('client','district','upazila_thana'));
    }

     public function update(Request $request ,$id){
    $data = array();
    $data['gender'] = $request->gender;
    $data['date_of_birth'] = $request->date_of_birth;
    $data['father_name'] = $request->father_name;
    $data['Mother_name'] = $request->Mother_name;
    $data['occupation'] = $request->occupation;
    $data['district_id'] = $request->district_id;
    $data['upazila_thana_id'] = $request->upazila_thana_id;
    $data['road_no'] = $request->road_no;
    $data['house_no'] = $request->house_no;
    $data['present_add'] = $request->present_add;
    $data['permanent_add'] = $request->permanent_add;
    $data['facebook_link'] = $request->facebook_link;
    $data['linkedin_link'] = $request->linkedin_link;

    $pro_picture = $request->file('pro_picture');

    $old_pro_picture = $request->old_pro_picture;

    if ($pro_picture) {
      if ($old_pro_picture) {
       unlink($old_pro_picture);
      }
    $pro_picture_name = hexdec(uniqid()).'.'.$pro_picture->getClientOriginalExtension();
     Image::make($pro_picture)->resize(480,580)->save('public/media/clients/'.$pro_picture_name);
     $data['pro_picture'] = 'public/media/clients/'.$pro_picture_name;
    }
    // return response()->json($data);  
    $update = DB::table('users')->where('id',$id)->update($data);
     if ($update) {
      $notification=array(
            'messege'=>'Profile Successfully Updated',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }else{
      $notification=array(
            'messege'=>'Nothing To Update',
            'alert-type'=>'warning'
             );
           return Redirect()->back()->with($notification);
    }
  }
}
