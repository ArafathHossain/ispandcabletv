<?php

namespace App\Http\Controllers\Admin\salary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$employees = DB::table('employees')->get();
    	return view('admin.salary.index',compact('employees'));
    }
    public function create($id){
    	$salary = DB::table('employees')->where('id',$id)->first();
    	return view('admin.salary.create',compact('salary'));
    }
	public function store(Request $request){

		$month =$request->salary_month;
		$year =date('Y');
		$id = $request->employee_id;
		$total_salary = $request->total_salary;
		$pamount = $request->amount;
		$du_amount = ($total_salary - $pamount);

		$check = DB::table('salary_transactions')->where('employee_id',$id)->where('salary_month',$month)->where('salary_year',$year)->first();
		$check2 = DB::table('salaries')->where('employee_id',$id)->where('salary_month',$month)->where('salary_year',$year)->first();

		if ($check || $check2) {
			$notification = array(
		'messege'=>'Salary Already Paid',
		'alert-type'=>'warning'
		);
	return Redirect()->route('salary')->with($notification);
		}
	else{
	$data = array();
	$data['amount'] = $request->amount;
	$data['due_amount'] = $du_amount;
	$data['employee_id'] = $request->employee_id;
	$data['salary_date'] = date('d/m/Y');
	$data['salary_month'] = $month;
	$data['salary_year'] = date('Y');

	DB::table('salary_transactions')->insert($data);
	DB::table('salaries')->insert($data);
		$notification = array(
		'messege'=>'Salary Paid Successfull',
		'alert-type'=>'success'
		);
	return Redirect()->route('salary')->with($notification);
	}
	}
	public function due($id){
    	$due = DB::table('salaries')->where('employee_id',$id)->where('due_amount','!=' ,0)->get();
    	return view('admin.salary.due_salary',compact('due'));
    }
    public function paydue($id){
    	$duesalary = DB::table('salaries')->where('id',$id)->first();
    	return view('admin.salary.pay_due',compact('duesalary'));
    }

    public function duestore(Request $request,$id){

    	$paynow = $request->amount;
    	$oldamunt = $request->old_amount;
    	$total = $paynow + $oldamunt;
    	$pamount = $request->due;
    	$nowamount = $request->amount;
		$dueamm = ($pamount - $nowamount);

		$data = array();
		$data['amount'] = $request->amount;
		$data['due_amount'] = $dueamm;
		$data['employee_id'] = $request->employee_id;
		$data['salary_date'] = $request->salary_date;
		$data['salary_month'] = $request->salary_month;
		$data['salary_year'] = $request->salary_year;


		DB::table('salary_transactions')->insert($data);

		$dat = array();
		$dat['amount'] = $total;
		$dat['due_amount'] = $dueamm;
		DB::table('salaries')->where('id',$id)->update($dat);


		$notification = array(
		'messege'=>'Due Salary Paid Successfull',
		'alert-type'=>'success'
		);


	return Redirect()->route('salary')->with($notification);
	}

	 public function AllTransactions(){
    	$transection = DB::table('salary_transactions')
    	->join('employees','salary_transactions.employee_id','employees.id')
    	->select('salary_transactions.*','employees.name')
    	->orderBy('id', 'DESC')->get();

    	return view('admin.salary.transactions',compact('transection'));
    }

    public function invoice($id){
    	$transection = DB::table('salary_transactions')
    	->join('employees','salary_transactions.employee_id','employees.id')
    	->select('salary_transactions.*','employees.name','employees.email','employees.address')
    	->where('salary_transactions.id',$id)
    	->first();

    	return view('admin.salary.invoice',compact('transection'));
    }
    public function alldue($id){
    	$alldue = DB::table('salaries')->where('due_amount','!=' ,0)->get();
    	return view('admin.salary.alldue',compact('alldue'));
    }
}
