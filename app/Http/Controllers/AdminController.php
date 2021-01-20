<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use DB;
class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $total_client = DB::table('users')->count();
      $total_employee = DB::table('employees')->count();
      $isp_pack = DB::table('isppackages')->count();
      $ctv_pack = DB::table('copackages')->count();

      $itotal = DB::table('banks')->sum('in_amount');
      $itotal2 = DB::table('bkash')->sum('in_amount');
      $itotal3 = DB::table('rocket')->sum('in_amount');
      $itotal4 = DB::table('client_bills')->sum('amount');
      $itotal_income = $itotal + $itotal2+ $itotal3 + $itotal4;

      $ctotal = DB::table('banks')->sum('out_amount');
      $ctotal2 = DB::table('bkash')->sum('out_amount');
      $ctotal3 = DB::table('rocket')->sum('out_amount');
      $ctotal4 = DB::table('salaries')->sum('amount');

      $total_expense = $ctotal + $ctotal2+ $ctotal3 + $ctotal4;

      $date= date('d/m/Y');
      $titotal = DB::table('banks')->where('date', $date)->sum('in_amount');
      $titotal2 = DB::table('bkash')->where('date', $date)->sum('in_amount');
      $titotal3 = DB::table('rocket')->where('date', $date)->sum('in_amount');
      $titotal4 = DB::table('client_bills')->where('pay_date', $date)->sum('amount');
      $titotal_income = $titotal + $titotal2+ $titotal3 + $titotal4;

      $tetotal = DB::table('banks')->where('date', $date)->sum('out_amount');
      $tetotal2 = DB::table('bkash')->where('date', $date)->sum('out_amount');
      $tetotal3 = DB::table('rocket')->where('date', $date)->sum('out_amount');
      $tetotal4 = DB::table('client_bills')->where('pay_date', $date)->sum('amount');
      $tetotal5 = DB::table('salary_transactions')->where('salary_date', $date)->sum('amount');
      $tetotal_income = $tetotal + $tetotal2+ $tetotal3 + $tetotal4 + $tetotal5;

      $tdue_amount = DB::table('client_bills')->sum('due_amount');

      $tmonth= date('m');
      $metotal = DB::table('banks')->where('month', $tmonth)->sum('out_amount');
      $metotal2 = DB::table('bkash')->where('month', $tmonth)->sum('out_amount');
      $metotal3 = DB::table('rocket')->where('month', $tmonth)->sum('out_amount');
      $metotal4 = DB::table('client_bills')->where('pay_month', $tmonth)->sum('amount');
      $metotal5 = DB::table('salary_transactions')->where('salary_month', $tmonth)->sum('amount');
      $metotal_expense = $metotal + $metotal2+ $metotal3 + $metotal4 + $metotal5;

      $mitotal = DB::table('banks')->where('month', $tmonth)->sum('in_amount');
      $mitotal2 = DB::table('bkash')->where('month', $tmonth)->sum('in_amount');
      $mitotal3 = DB::table('rocket')->where('month', $tmonth)->sum('in_amount');
      $mitotal4 = DB::table('client_bills')->where('pay_month', $tmonth)->sum('amount');
      $mitotal_income = $mitotal + $mitotal2+ $mitotal3 + $mitotal4;




      return view('admin.home',compact('total_client','total_employee','isp_pack','ctv_pack','itotal_income','total_expense','titotal_income','tetotal_income','tdue_amount','metotal_expense','mitotal_income'));
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }



    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.login')->with($notification);
    }

}
