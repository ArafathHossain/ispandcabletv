<?php

namespace App\Http\Controllers\Admin\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class AccountController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index_bank()
    {
		$bank = DB::table('banks')->get();
		$totalin = DB::table('banks')->sum('in_amount');
		$totalout = DB::table('banks')->sum('out_amount');
		return view('admin.accounts.bank.bank_index',compact('bank','totalin','totalout'));
    }

    public function addBankBalance()
    {
		return view('admin.accounts.bank.add');
    } 

    public function withdrawBankBalance()
    {

    	$total = DB::table('banks')->sum('in_amount');
    	$totalout = DB::table('banks')->sum('out_amount');
		return view('admin.accounts.bank.withdraw',compact('total','totalout'));
    }
    public function storeBankBalance(Request $request)
    {
		$data = array();
    	$data['in_amount'] = $request->in_amount;
    	$data['out_amount'] = 0;
    	$data['type'] = $request->type;
    	$data['head'] = 'Income';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('banks')->insert($data);
		$notification = array(
		'messege'=>'Bank Balance Insert Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.bank')->with($notification);
    }

    public function storeWithdraw(Request $request)
    {
		$data = array();
    	$data['in_amount'] = 0;
    	$data['out_amount'] = $request->out_amount;
    	$data['type'] = $request->type;
    	$data['head'] = 'Expense';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('banks')->insert($data);
		$notification = array(
		'messege'=>'Bank Balance Withdraw Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.bank')->with($notification);
    }
    public function invoicebank($id)
    {
		$data['bank'] = DB::table('banks')
		->where('id',$id)
		->first();
		$pdf = PDF::loadView('admin.accounts.bank.printinvoice', $data);
		return $pdf->stream('Bank_Invoice.pdf');
	}





    public function index_bkash()
    {
		$bkash = DB::table('bkash')->get();
		$totalin = DB::table('bkash')->sum('in_amount');
		$totalout = DB::table('bkash')->sum('out_amount');
		return view('admin.accounts.bkash.bkash_index',compact('bkash','totalin','totalout'));
    }

    public function addBkashBalance()
    {
		return view('admin.accounts.bkash.add');
    }

    public function withdrawBkashBalance()
    {

    	$total = DB::table('bkash')->sum('in_amount');
    	$totalout = DB::table('bkash')->sum('out_amount');
		return view('admin.accounts.bkash.withdraw',compact('total','totalout'));
    }

    public function storeBkashBalance(Request $request)
    {
		$data = array();
    	$data['in_amount'] = $request->in_amount;
    	$data['out_amount'] = 0;
    	$data['type'] = $request->type;
    	$data['head'] = 'Income';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('bkash')->insert($data);
		$notification = array(
		'messege'=>'Bkash Balance Insert Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.bkash')->with($notification);
    }

    public function storeBkashWithdraw(Request $request)
    {
		$data = array();
    	$data['in_amount'] = 0;
    	$data['out_amount'] = $request->out_amount;
    	$data['type'] = $request->type;
    	$data['head'] = 'Expense';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('bkash')->insert($data);
		$notification = array(
		'messege'=>'Bkash Balance Withdraw Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.bkash')->with($notification);
    }
    public function invoicebkash($id)
    {
		$data['bkash'] = DB::table('bkash')
		->where('id',$id)
		->first();
		$pdf = PDF::loadView('admin.accounts.bkash.printinvoice', $data);
		return $pdf->stream('Bkash_Invoice.pdf');
	}



    public function index_rocket()
    {
		$rocket = DB::table('rocket')->get();
		$totalin = DB::table('rocket')->sum('in_amount');
		$totalout = DB::table('rocket')->sum('out_amount');
		return view('admin.accounts.rocket.rocket_index',compact('rocket','totalin','totalout'));
    }

    public function addRocketBalance()
    {
		return view('admin.accounts.rocket.add');
    }

    public function withdrawRockethBalance()
    {

    	$total = DB::table('rocket')->sum('in_amount');
    	$totalout = DB::table('rocket')->sum('out_amount');
		return view('admin.accounts.rocket.withdraw',compact('total','totalout'));
    }

    public function storeRocketBalance(Request $request)
    {
		$data = array();
    	$data['in_amount'] = $request->in_amount;
    	$data['out_amount'] = 0;
    	$data['type'] = $request->type;
    	$data['head'] = 'Income';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('rocket')->insert($data);
		$notification = array(
		'messege'=>'Rocket Balance Insert Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.rocket')->with($notification);
    }

    public function storeRocketWithdraw(Request $request)
    {
		$data = array();
    	$data['in_amount'] = 0;
    	$data['out_amount'] = $request->out_amount;
    	$data['type'] = $request->type;
    	$data['head'] = 'Expense';
    	$data['description'] = $request->description;
    	$data['date'] = date('d/m/Y');
    	$data['year'] = date('Y');
    	$data['month'] = date('m');
		DB::table('rocket')->insert($data);
		$notification = array(
		'messege'=>'Rocket Balance Withdraw Successfull',
		'alert-type'=>'success'
		);
		return Redirect()->route('index.rocket')->with($notification);
    }
    public function invoicerocket($id)
    {
		$data['rocket'] = DB::table('rocket')
		->where('id',$id)
		->first();
		$pdf = PDF::loadView('admin.accounts.rocket.printinvoice', $data);
		return $pdf->stream('Rocket_Invoice.pdf');
	}




    public function index_epay()
    {
		$epay = DB::table('epay')->get();
		return view('admin.accounts.epay.epay_index',compact('epay'));
    }

    public function index_handcash()
    {
		$handcash = DB::table('handcash')->get();
		return view('admin.accounts.handcash.handcash_index',compact('handcash'));
    }
    public function info()
    {
		$incomes = DB::table('incomes')->get();
		return view('admin.accounts.info',compact('incomes'));
    }

    


}
