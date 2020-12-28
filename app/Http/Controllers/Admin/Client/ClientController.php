<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Image;

class ClientController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
    	$client = DB::table('users')->get();
    	return view('admin.clients.index',compact('client'));

    }

    public function create(){
    	
    	$district = DB::table('districts')->get();
    	$isppackage = DB::table('isppackages')->get();
    	$copackage = DB::table('copackages')->get();
    	return view('admin.clients.create',compact('district','isppackage','copackage'));
    }

    public function GetUpazilaThana($district_id){
   	$cat = DB::table('upazila_thanas')->where('district_id',$district_id)->get();
   	return json_encode($cat);
   }

    public function store(Request $request){
    $validateData = $request->validate([
    		'name' => 'required|max:120',
    		'email' => 'required|max:50',
    		'password' => 'required|min:6|max:50',
    		'pro_picture' => 'mimes:jpeg,jpg,png,PNG | max:1024',
    		'reg_form_pic' => 'mimes:jpeg,jpg,png,PNG | max:1024',
    		'nid_brth_pic' => 'mimes:jpeg,jpg,png,PNG | max:1024',
    	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);
    $data['phone'] = $request->phone;
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
    $data['nid_brth_no'] = $request->nid_brth_no;
    $data['reg_form_no'] = $request->reg_form_no;
    $data['facebook_link'] = $request->facebook_link;
    $data['linkedin_link'] = $request->linkedin_link;
    $data['Client_type'] = $request->Client_type;
    $data['isp_pack_id'] = $request->isp_pack_id;
    $data['co_pack_id'] = $request->co_pack_id;
    $data['status'] = 1;
    $pro_picture = $request->pro_picture;
    $reg_form_pic = $request->reg_form_pic;
    $nid_brth_pic = $request->nid_brth_pic;


    // return response()->json($data);  

     $pro_picture_name = hexdec(uniqid()).'.'.$pro_picture->getClientOriginalExtension();
     Image::make($pro_picture)->resize(480,580)->save('public/media/clients/'.$pro_picture_name);
     $data['pro_picture'] = 'public/media/clients/'.$pro_picture_name;

     $nid_brth_pic_name = hexdec(uniqid()).'.'.$nid_brth_pic->getClientOriginalExtension();
     Image::make($nid_brth_pic)->resize(480,580)->save('public/media/registrationForm/'.$nid_brth_pic_name);
     $data['nid_brth_pic'] = 'public/media/registrationForm/'.$nid_brth_pic_name;

     $reg_form_pic_name = hexdec(uniqid()).'.'.$reg_form_pic->getClientOriginalExtension();
     Image::make($reg_form_pic)->resize(480,580)->save('public/media/nidBirthCertificate/'.$reg_form_pic_name);
     $data['reg_form_pic'] = 'public/media/nidBirthCertificate/'.$reg_form_pic_name;


    $product = DB::table('users')->insert($data);
      $notification=array(
            'messege'=>'user Inserted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('clients')->with($notification);
 
  
  }
	public function Edit($id){
  		$district = DB::table('districts')->get();
  		$upazila_thana = DB::table('upazila_thanas')->get();
    	$isppackage = DB::table('isppackages')->get();
    	$copackage = DB::table('copackages')->get();
    	$client = DB::table('users')->where('id',$id)->first();
    	return view('admin.clients.edit_client',compact('client','district','isppackage','copackage','upazila_thana'));
    }


    public function update(Request $request ,$id){
    $validateData = $request->validate([
    		'name' => 'required|max:120',
    		'email' => 'required|max:50',    	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
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
    $data['nid_brth_no'] = $request->nid_brth_no;
    $data['reg_form_no'] = $request->reg_form_no;
    $data['facebook_link'] = $request->facebook_link;
    $data['linkedin_link'] = $request->linkedin_link;
    $data['Client_type'] = $request->Client_type;
    $data['isp_pack_id'] = $request->isp_pack_id;
    $data['co_pack_id'] = $request->co_pack_id;
    $data['status'] = 1;



    // return response()->json($data);  

     

    $product = DB::table('users')->where('id',$id)->update($data);
      $notification=array(
            'messege'=>'User Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('clients')->with($notification);
 
  
  }


}
