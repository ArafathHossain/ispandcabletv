<?php

namespace App\Http\Controllers\Admin\Packages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class COpackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
    	$copac = DB::table('copackages')->get();
    	return view('admin.copackage.index',compact('copac'));

    }

    public function create(){
    	
    	return view('admin.copackage.create');
    }

    public function storeCOpackage(Request $request){
    	$validateData = $request->validate([
    		'package_name' => 'required|unique:copackages|max:120',
    		'package_code' => 'required|unique:copackages|max:50',
    		'Number_of_chanel' => 'required|max:50',
    		'package_price' => 'required|max:50',
    	]);

    	$data = array();
		  $data['package_name'] = $request->package_name;
		  $data['package_code'] = $request->package_code;
		  $data['Number_of_chanel'] = $request->Number_of_chanel;
		  $data['package_price'] = $request->package_price;
		  DB::table('copackages')->insert($data);
		  $notification=array(
            'messege'=>'Cable TV Package Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('copackage')->with($notification); 
  }

    public function EditCOpackage($id){
    	$copac = DB::table('copackages')->where('id',$id)->first();
    	return view('admin.copackage.edit_package',compact('copac'));
    }

    public function UpdateCOpackage(Request $request,$id){
    	$validateData = $request->validate([
    		'package_name' => 'required|max:120',
    		'package_code' => 'required|max:50',
    		'Number_of_chanel' => 'required|max:50',
    		'package_price' => 'required|max:50',
    	]);
  		 $data = array();
		  $data['package_name'] = $request->package_name;
		  $data['package_code'] = $request->package_code;
		  $data['Number_of_chanel'] = $request->Number_of_chanel;
		  $data['package_price'] = $request->package_price;
		$copac = DB::table('copackages')->where('id',$id)->update($data);
		if($copac){
		$notification=array(
	        'messege'=>'Cable TV Package Updated Successfully',
	        'alert-type'=>'success'
	         );
	       return Redirect()->route('copackage')->with($notification);
		}
		else{
			$notification=array(
                'messege'=>'Nothing to Update',
                'alert-type'=>'error'
                 );
               return Redirect()->route('copackage')->with($notification);
		}
	}
	public function DeleteCOpackage($id){
    DB::table('copackages')->where('id',$id)->delete();
		$notification=array(
            'messege'=>'Cable TV Package Deleted Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->back()->with($notification);
    }
}
