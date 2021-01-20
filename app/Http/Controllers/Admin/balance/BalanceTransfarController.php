<?php

namespace App\Http\Controllers\Admin\balance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BalanceTransfarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
		return view('admin.balance.index');
    }
    public function all()
    {
    	$balance_transfar = DB::table('balance_transfar')->get();
		return view('admin.balance.all',compact('balance_transfar'));
    }
    public function store(Request $request)
    {
    	if($request->from_account == 'Bank' && $request->to_account == 'Bkash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('banks')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('bkash')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}

		elseif($request->from_account == 'Bank' && $request->to_account == 'Rocket')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('banks')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('rocket')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Bank' && $request->to_account == 'Hand-Cash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('banks')->insert($data2);
			$data3 = array();
			$data3['out_amount'] = $request->amount;
			DB::table('client_bills')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Bank' && $request->to_account == 'Hand-Cash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('banks')->insert($data2);
			$data3 = array();
			$data3['out_amount'] = $request->amount;
			DB::table('client_bills')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}

		elseif($request->from_account == 'Bkash' && $request->to_account == 'Bank')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('bkash')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('banks')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Bkash' && $request->to_account == 'Rocket')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('bkash')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('rocket')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Bkash' && $request->to_account == 'Hand-Cash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('bkash')->insert($data2);
			$data3 = array();
			$data3['out_amount'] = $request->amount;
			DB::table('client_bills')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}

		elseif($request->from_account == 'Rocket' && $request->to_account == 'Bank')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('rocket')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('banks')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Rocket' && $request->to_account == 'Bkash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('rocket')->insert($data2);
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('bkash')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Rocket' && $request->to_account == 'Hand-Cash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			DB::table('rocket')->insert($data2);
			$data3 = array();
			$data3['out_amount'] = $request->amount;
			DB::table('client_bills')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Hand-Cash' || $request->from_account == 'E-pay' && $request->to_account == 'Bank')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			if($request->from_account == 'Hand-Cash')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'handcash';
				DB::table('client_bills')->insert($data2);
			}
			if($request->from_account == 'E-pay')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'epay';
				DB::table('client_bills')->insert($data2);
			}
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('banks')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Hand-Cash' || $request->from_account == 'E-pay' && $request->to_account == 'Bkash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			if($request->from_account == 'Hand-Cash')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'handcash';
				DB::table('client_bills')->insert($data2);
			}
			if($request->from_account == 'E-pay')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'epay';
				DB::table('client_bills')->insert($data2);
			}
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('bkash')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'Hand-Cash' || $request->from_account == 'E-pay' && $request->to_account == 'Rocket')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			if($request->from_account == 'Hand-Cash')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'handcash';
				DB::table('client_bills')->insert($data2);
			}
			if($request->from_account == 'E-pay')
			{
				$data2 = array();
				$data2['out_amount'] = $request->amount;
				$data2['out_account'] = 'epay';
				DB::table('client_bills')->insert($data2);
			}
			$data3 = array();
			$data3['in_amount'] = $request->amount;
			DB::table('rocket')->insert($data3);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		elseif($request->from_account == 'E-pay' && $request->to_account == 'Hand-Cash')
    	{
	    	$data = array();
	    	$data['from_account'] = $request->from_account;
	    	$data['to_account'] = $request->to_account;
	    	$data['amount'] = $request->amount;
	    	$data['date'] = date('d/m/Y');
	    	$data['year'] = date('Y');
	    	$data['month'] = date('m');
			DB::table('balance_transfar')->insert($data);
			$data2 = array();
			$data2['out_amount'] = $request->amount;
			$data2['amount'] = $request->amount;
			$data2['out_account'] = 'epay';
			DB::table('client_bills')->insert($data2);
			$notification = array(
			'messege'=>'Balance transfar Successfull',
			'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		else
		{
			$notification = array(
			'messege'=>'Something went wrong',
			'alert-type'=>'error'
			);
			return Redirect()->back()->with($notification);
		}

	}

}
