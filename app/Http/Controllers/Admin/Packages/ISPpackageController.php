<?php

namespace App\Http\Controllers\Admin\Packages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ISPpackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
    	$isppac = DB::table('isppackages')->get();
    	return view('admin.isppackage.index',compact('isppac'));

    }

    public function create(){
    	
    	return view('admin.isppackage.create');
    }

    public function storeISPpackage(Request $request){
    	$validateData = $request->validate([
    		'package_name' => 'required|unique:isppackages|max:120',
    		'package_code' => 'required|unique:isppackages|max:50',
    		'internet_speed' => 'required|max:50',
    		'package_price' => 'required|max:50',
    	]);

    	$data = array();
		  $data['package_name'] = $request->package_name;
		  $data['package_code'] = $request->package_code;
		  $data['internet_speed'] = $request->internet_speed;
		  $data['package_price'] = $request->package_price;
		  DB::table('isppackages')->insert($data);
		  $notification=array(
            'messege'=>'ISP Package Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('isppackage')->with($notification); 
  }

    public function EditISPpackage($id){
    	$isppack = DB::table('isppackages')->where('id',$id)->first();
    	return view('admin.isppackage.edit_package',compact('isppack'));
    }

    public function UpdateISPpackage(Request $request,$id){
    	$validateData = $request->validate([
    		'package_name' => 'required|max:120',
    		'package_code' => 'required|max:50',
    		'internet_speed' => 'required|max:50',
    		'package_price' => 'required|max:50',
    	]);
  		 $data = array();
		  $data['package_name'] = $request->package_name;
		  $data['package_code'] = $request->package_code;
		  $data['internet_speed'] = $request->internet_speed;
		  $data['package_price'] = $request->package_price;
		$isppack = DB::table('isppackages')->where('id',$id)->update($data);
		if($isppack){
		$notification=array(
	        'messege'=>'ISP Package Updated Successfully',
	        'alert-type'=>'success'
	         );
	       return Redirect()->route('isppackage')->with($notification);
		}
		else{
			$notification=array(
                'messege'=>'Nothing to Update',
                'alert-type'=>'error'
                 );
               return Redirect()->route('isppackage')->with($notification);
		}
	}
	public function DeleteISPpackage($id){
    DB::table('isppackages')->where('id',$id)->delete();
		$notification=array(
            'messege'=>'ISP Package Deleted Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->back()->with($notification);
    }
}
