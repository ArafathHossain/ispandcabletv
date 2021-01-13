<?php

namespace App\Http\Controllers\Admin\payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Sowren\ShurjoPay\ShurjoPayService;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }


    public function Edit()
    {
    	$payment_settings = DB::table('payment_info')->first();
    	return view('admin.payment.payment_settings',compact('payment_settings'));
    }

    public function update(Request $request)
    {
      $data = array();
      $data['url'] = $request->url;
      $data['user_id'] = $request->user_id;
      $data['password'] = $request->password;
      $data['prefix'] = $request->prefix;

      $update = DB::table('payment_info')->where('id',1)->update($data);
	     if ($update){
	      $notification=array(
	            'messege'=>'Payment Settings Successfully Updated',
	            'alert-type'=>'success'
	             );
	           return Redirect()->route('payment.settings')->with($notification);
	    }else{
	      $notification=array(
	            'messege'=>'Nothing To Update',
	            'alert-type'=>'warning'
	             );
	           return Redirect()->route('payment.settings')->with($notification);
	    }
	}
	

}
