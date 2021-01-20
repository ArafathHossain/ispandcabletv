<?php

namespace App\Http\Controllers\Admin\roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$sub_admin = DB::table('admins')->get();
    	return view('admin.roles.index',compact('sub_admin'));

    }
    public function create()
    {
    	return view('admin.roles.create');

    }
    public function store(Request $request)
    {
    	$data = array();
		$data['name'] = $request->name;
		$data['email'] = $request->email;
		$data['phone'] = $request->phone;
		$data['password'] = Hash::make($request->password);
		$data['area'] = $request->area;
		$data['client'] = $request->client;
		$data['employee'] = $request->employee;
		$data['salary'] = $request->salary;
		$data['packages'] = $request->packages;
		$data['bill'] = $request->bill;
		$data['account'] = $request->account;
		$data['roles'] = $request->roles;
		$data['report'] = $request->report;
		$data['settings'] = $request->settings;
		$data['type'] = 2;

		DB::table('admins')->insert($data);
		$notification = array(
		'messege'=>'Admin User create Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('all.admins')->with($notification);
    }
    public function edit($id)
    {
    	$user = DB::table('admins')->where('id',$id)->first();
    	return view('admin.roles.edit',compact('user'));

    }

}
