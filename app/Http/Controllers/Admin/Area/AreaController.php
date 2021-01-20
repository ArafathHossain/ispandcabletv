<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Area;
use DB;

class AreaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
    	$area = Area::all();
    	return view('admin.area.index',compact('area'));

    }

    public function create(){
    	
    	return view('admin.area.create');
    }

    public function storearea(Request $request){
    	$validateData = $request->validate([
    		'area_code' => 'required|unique:areas|max:100',
    		'area_name' => 'required|unique:areas|max:100',
    	]);

    	$area = new Area();
    	$area->area_code = $request->area_code;
    	$area->area_name = $request->area_name;
    	$area->save();
			$notification=array(
                        'messege'=>'Area Added Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('areas')->with($notification);

    }

    public function Editarea($id){
    	$area = DB::table('areas')->where('id',$id)->first();
    	return view('admin.area.edit_area',compact('area'));
    }



    public function Updatearea(Request $request,$id){
    	$validateData = $request->validate([
    		'area_code' => 'required|max:100',
    		'area_name' => 'required|max:100',
    	]);

    	$data=array();
    	$data['area_code']=$request->area_code;
    	$data['area_name']=$request->area_name;

		$area = DB::table('areas')->where('id',$id)->update($data);
		if($area){
			$notification=array(
                        'messege'=>'Area Updated Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('areas')->with($notification);
		}
		else{
			$notification=array(
                        'messege'=>'Nothing to Update',
                        'alert-type'=>'error'
                         );
                       return Redirect()->route('areas')->with($notification);
		}
			
		}




    public function Deletearea($id){
    DB::table('areas')->where('id',$id)->delete();
		$notification=array(
            'messege'=>'Area Deleted Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->back()->with($notification);
    }


}
