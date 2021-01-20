@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />



<div id="content">
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Company Name</h5>
            <a href="{{route('transactions.salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4>MMIT SOFT LTD.</h4></td>
                    </tr>
                    <tr>
                      <td>Haque Mansion ( 5th Floor ), 21/1 Zigatola, Dhanmondi,</td>
                    </tr>
                    <tr>
                      <td>Dhaka-1209</td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: +88 01860424344</td>
                    </tr>
                    <tr>
                      <td >Email: hmarketing.mmit@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">Invoice ID:</td>
                      <td class="width70"><strong>TD-{{$transection->id}}</strong></td>
                    </tr>
                    <tr>
                      <td>Issue Date:</td>
                      <td><strong>{{$transection->salary_date}}</strong></td>
                    </tr>
                    <tr>
                      <td>Name:</td>
                      <td><strong>{{$transection->name}}</strong></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><strong>{{$transection->email}}</strong></td>
                    </tr>
                  <td class="width30">Client Address:</td>
                    <td class="width70">{{$transection->address}}</td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Type</th>
                      <th class="head1 right">Paid Amount</th>
                      <th class="head0 right">Due Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Salary</td>
                      <td class="right">{{$transection->amount}}</td>
                      <td class="right"><strong>{{$transection->due_amount}}</strong></td>
                    </tr>
                  </tbody>
                </table>
                <div class="pull-right">
                  <br>
                  <a class="btn btn-primary btn-large pull-right" href="{{ route('invoice.pdf',$transection->id) }}" target="blank">Genarate PDF</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
