<?php

namespace App\Http\Controllers\Admin\UpazilaThana;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UpazilaThanaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){


    	$upazila_thana = DB::table('upazila_thanas')
    	->join('districts','upazila_thanas.district_id','districts.id')
    	->select('upazila_thanas.*','districts.district_name')
    	->get();
    	return view('admin.upazila_thana.index',compact('upazila_thana'));

    }

    public function create(){
    	
    	$district = DB::table('districts')->get();
    	return view('admin.upazila_thana.create',compact('district'));
    }

    public function storeupazila_thana(Request $request){
    	$validateData = $request->validate([
    		'upazila_thana_name' => 'required|unique:upazila_thanas|max:120',
    	]);
    	$data = array();
		  $data['district_id'] = $request->district_id;
		  $data['upazila_thana_name'] = $request->upazila_thana_name;
		  DB::table('upazila_thanas')->insert($data);
		  $notification=array(
            'messege'=>'Upazila/Thana Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('upazila_thana')->with($notification); 
  }

    public function Editupazila_thana($id){
    	$upazila_thana = DB::table('upazila_thanas')->where('id',$id)->first();
    	$district = DB::table('districts')->get();
    	return view('admin.upazila_thana.edit_upazila_thana',compact('upazila_thana','district'));
    }



    public function Updateupazila_thana(Request $request,$id){
    	$validateData = $request->validate([
    		'upazila_thana_name' => 'required|max:120',
    	]);
  		$data['district_id'] = $request->district_id;
		$data['upazila_thana_name'] = $request->upazila_thana_name;
		$upazila_thana = DB::table('upazila_thanas')->where('id',$id)->update($data);
		if($upazila_thana){
			$notification=array(
            'messege'=>'Upazila/Thana Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('upazila_thana')->with($notification);
		}
		else{
			$notification=array(
            'messege'=>'Nothing to Update',
            'alert-type'=>'error'
             );
           return Redirect()->route('upazila_thana')->with($notification);
		}
			
		}




    public function Deleteupazila_thana($id){
    DB::table('upazila_thanas')->where('id',$id)->delete();
		$notification=array(
            'messege'=>'Upazila/Thana Deleted Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->back()->with($notification);
    }
}
