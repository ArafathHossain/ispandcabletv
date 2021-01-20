<?php

namespace App\Http\Controllers\Admin\Bills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class BillController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {

        $ispprice = DB::table('client_bills')->where('pay_month',date('m'))->where('pay_year',date('Y'))->first();
    	return view('admin.bills.index', compact('ispprice'));

    }

    public function generate()
    {

    	$users = DB::table('users')->where('status',1)->get();

    	foreach($users as $row)
    	{
    		$ispprice = DB::table('isppackages')->where('id',$row->isp_pack_id)->first();
    		$coprice = DB::table('copackages')->where('id',$row->co_pack_id)->first();

			$data = array();
		    $data['user_id'] = $row->id;
		    $data['amount'] = 0;
		    if ($row->Client_type == 1) 
		    {
		    	$data['due_amount'] = $ispprice->package_price;
		    }
		    else if($row->Client_type == 2)
		    {
		    	$data['due_amount'] = $coprice->package_price;
		    }
		    else if($row->Client_type == 3)
		    {
		    	$data['due_amount'] = $ispprice->package_price + $coprice->package_price ;
		    }
		    else
		    {
		    	$data['due_amount'] = 0;
		    }
		    $data['pay_date'] =date('d/m/Y');
		    $data['pay_month'] = date('m');
		    $data['pay_year'] = date('Y');
		    //return response()->json($data);
		    $product = DB::table('client_bills')->insert($data);
	}
    	$notification = array(
		'messege'=>'Bills Generate Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function BillPay($id)
    {

        $paybills = DB::table('client_bills')->where('id',$id)->first();
    	return view('admin.bills.paybill', compact('paybills'));

    }

	public function all()
    {

        $allbills = DB::table('client_bills')
        ->join('users','client_bills.user_id','users.id')
    	->select('client_bills.*','users.name','users.email')
    	->orderBy("id", "desc")
        ->get();
    	return view('admin.bills.all', compact('allbills'));

    }
    public function received()
    {

        $allbills = DB::table('client_bills')
        ->join('users','client_bills.user_id','users.id')
    	->select('client_bills.*','users.name','users.email')
    	->where('due_amount',0)
    	->orderBy("id", "desc")
        ->get();
    	return view('admin.bills.received', compact('allbills'));

    }
    public function due()
    {
        $allbills = DB::table('client_bills')
        ->join('users','client_bills.user_id','users.id')
    	->select('client_bills.*','users.name','users.email')
    	->where('amount',0)
    	->orderBy("id", "desc")
        ->get();
    	return view('admin.bills.due', compact('allbills'));

    }

     public function pay(Request $request, $id)
     {
    	$data = array();
    	$data['amount'] = $request->amount;
        $data['account'] = $request->account;
        $data['reference'] = $request->reference;
        $data['pay_date'] =date('d/m/Y');
        $data['pay_month'] = date('m');
        $data['pay_year'] = date('Y');
    	$data['due_amount'] = 0;
    	$data['pay_by'] = 'admin';
		DB::table('client_bills')->where('id',$id)->update($data);
		$notification = array(
		'messege'=>'Bill Paid Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('all.bill')->with($notification);
    }
    public function invoicebill($id)
    {
		$data['billinvoice'] = DB::table('client_bills')
		->join('users','client_bills.user_id','users.id')
		->select('client_bills.*','users.name','users.email','users.present_add','users.phone')
		->where('client_bills.id',$id)
		->first();
		$pdf = PDF::loadView('admin.bills.printinvoice', $data);
		return $pdf->stream('Bill_Invoice.pdf');
	}

}
