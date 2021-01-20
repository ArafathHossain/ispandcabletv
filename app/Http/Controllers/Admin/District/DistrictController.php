<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DistrictController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
    	$district = DB::table('districts')->get();
    	return view('admin.district.index',compact('district'));

    }

    public function create(){
    	
    	return view('admin.district.create');
    }

    public function storedistrict(Request $request){
    	$validateData = $request->validate([
    		'district_name' => 'required|unique:districts|max:120',
    	]);

    	$data = array();
		  $data['district_name'] = $request->district_name;
		  DB::table('districts')->insert($data);
		  $notification=array(
            'messege'=>'Districts Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('district')->with($notification); 
  }

    public function Editdistrict($id){
    	$district = DB::table('districts')->where('id',$id)->first();
    	return view('admin.district.edit_district',compact('district'));
    }



    public function Updatedistrict(Request $request,$id){
    	$validateData = $request->validate([
    		'district_name' => 'required|max:120',
    	]);
  		$data['district_name'] = $request->district_name;
		$district = DB::table('districts')->where('id',$id)->update($data);
		if($district){
			$notification=array(
                        'messege'=>'District Updated Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('district')->with($notification);
		}
		else{
			$notification=array(
                        'messege'=>'Nothing to Update',
                        'alert-type'=>'error'
                         );
                       return Redirect()->route('district')->with($notification);
		}
			
		}




    public function Deletedistrict($id){
    DB::table('districts')->where('id',$id)->delete();
		$notification=array(
            'messege'=>'District Deleted Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->back()->with($notification);
    }
}
