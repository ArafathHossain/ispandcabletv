<?php

namespace App\Http\Controllers\Admin\reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index_income()
    {
		$total = DB::table('banks')->sum('in_amount');
		$total2 = DB::table('bkash')->sum('in_amount');
		$total3 = DB::table('rocket')->sum('in_amount');
		$total_admin = DB::table('client_bills')->where('pay_by','admin')->sum('amount');
		$total_user = DB::table('client_bills')->where('pay_by','user')->sum('amount');
		$total_bill_collection = $total_admin + $total_user;
		return view('admin.reports.income',compact('total','total2','total3','total_bill_collection','total_admin','total_user'));
    }

    public function index_expense()
    {
		$total = DB::table('banks')->sum('out_amount');
		$total2 = DB::table('bkash')->sum('out_amount');
		$total3 = DB::table('rocket')->sum('out_amount');
		$total4 = DB::table('salaries')->sum('amount');
		return view('admin.reports.expense',compact('total','total2','total3','total4'));
    }


}
