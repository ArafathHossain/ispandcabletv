<?php

namespace App\Http\Controllers\Admin\employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Image;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$employees = DB::table('employees')->get();
    	return view('admin.employee.index',compact('employees'));
    }
    public function create(){
    	return view('admin.employee.create');
    }
    public function store(Request $request){
    $validateData = $request->validate([
    		'name' => 'required|max:120',
    		'email' => 'required|max:50',
    		'photo' => 'mimes:jpeg,jpg,png,PNG | max:1024',
    	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['gender'] = $request->gender;
    $data['address'] = $request->address;
    $data['nid_brth_no'] = $request->nid_brth_no;
    $data['position'] = $request->position;
    $data['salary'] = $request->salary;
    $data['facebook_link'] = $request->facebook_link;
    $data['linkedin_link'] = $request->linkedin_link;
    $data['status'] = 1;
    $photo = $request->photo;
     $photo_name = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
     Image::make($photo)->resize(480,580)->save('public/media/employee/'.$photo_name);
     $data['photo'] = 'public/media/employee/'.$photo_name;
			$product = DB::table('employees')->insert($data);
			$notification=array(
			'messege'=>'Employee Inserted Successfully',
			'alert-type'=>'success'
			);
			return Redirect()->route('employee')->with($notification);
  	}
	public function Edit($id){
	$employee = DB::table('employees')->where('id',$id)->first();
	return view('admin.employee.edit_employee',compact('employee'));
	}
    public function update(Request $request ,$id){
    $validateData = $request->validate([
		'name' => 'required|max:150',
		'email' => 'required|max:150',    	
	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['gender'] = $request->gender;
    $data['address'] = $request->address;
    $data['nid_brth_no'] = $request->nid_brth_no;
    $data['position'] = $request->position;
    $data['salary'] = $request->salary;
    $data['facebook_link'] = $request->facebook_link;
    $data['linkedin_link'] = $request->linkedin_link;
    $photo = $request->file('photo');
    $old_photo = $request->old_photo;
    if ($photo) {
      if ($old_photo) {
       unlink($old_photo);
      }
     $photo_name = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
     Image::make($photo)->resize(480,580)->save('public/media/employee/'.$photo_name);
     $data['photo'] = 'public/media/employee/'.$photo_name;
    }
	$updat = DB::table('employees')->where('id',$id)->update($data);
     if ($updat) {
      $notification=array(
            'messege'=>'Client Successfully Updated',
            'alert-type'=>'success'
             );
           return Redirect()->route('employee')->with($notification);
    }else{
      $notification=array(
            'messege'=>'Nothing To Update',
            'alert-type'=>'success'
             );
           return Redirect()->route('employee')->with($notification);
    }
	}
	public function inactive($id){
    DB::table('employees')->where('id',$id)->update(['status'=>0]);
	$notification=array(
		'messege'=>'Employee Successfully inactive',
		'alert-type'=>'success'
	);
	return Redirect()->back()->with($notification);
	}
	public function active($id){
	DB::table('employees')->where('id',$id)->update(['status'=>1]);
	$notification=array(
		'messege'=>'Employee Successfully Active',
		'alert-type'=>'success'
	);
	return Redirect()->back()->with($notification);
	}
}
