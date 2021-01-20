<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PaymentController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth');
    }


    public function paynow(){

    $id = Auth::id();
	$user =  DB::table('users')->where('id',$id)->first();

	$allbills = DB::table('client_bills')->where('user_id',$id)->orderBy("id", "desc")->get();
    return view('frontend.payindex',compact('user','allbills'));
    }

    public function paydue($id){
		$duesalary = DB::table('client_bills')->where('id',$id)->orderBy("id", "desc")->first();
		return view('frontend.paynow',compact('duesalary'));
    }

    public function pay(Request $request, $id){
    	$userid = Auth::id();
    	$data = array();
    	$data['amount'] = $request->amount;
    	$data['due_amount'] = 0;
    	$data['pay_by'] = 'user';
		DB::table('client_bills')->where('id',$id)->where('user_id',$userid)->update($data);
		$notification = array(
		'messege'=>'Bill Paid Successfull',
		'alert-type'=>'success'
		);
	return Redirect()->route('paynow')->with($notification);
    }

    public function alldue(){
    	$id = Auth::id();
		$due = DB::table('client_bills')->where('user_id',$id)->where('due_amount','!=' ,0)->orderBy("id", "desc")->get();
		return view('frontend.alldue',compact('due'));
    }

    public function store(Request $request){
    	$id = Auth::id();
		$month =$request->pay_month;
		$year =date('Y');
		$total_salary = $request->total_salary;
		$pamount = $request->amount;
		$du_amount = ($total_salary - $pamount);

		$check = DB::table('bill_transections')->where('user_id',$id)->where('pay_month',$month)->where('pay_year',$year)->first();
		$check2 = DB::table('client_bills')->where('user_id',$id)->where('pay_month',$month)->where('pay_year',$year)->first();

		if ($check || $check2) {
			$notification = array(
		'messege'=>'Bill Already Paid',
		'alert-type'=>'warning'
		);
	return Redirect()->back()->with($notification);
		}

	else{
	$data = array();
	$data['amount'] = $request->amount;
	$data['due_amount'] = $du_amount;
	$data['user_id'] = $request->user_id;
	$data['pay_date'] = date('d/m/Y');
	$data['pay_month'] = $month;
	$data['pay_year'] = date('Y');

	DB::table('bill_transections')->insert($data);
	DB::table('client_bills')->insert($data);
		$notification = array(
		'messege'=>'Bill Paid Successfull',
		'alert-type'=>'success'
		);
	return Redirect()->back()->with($notification);
		}
	}
}
