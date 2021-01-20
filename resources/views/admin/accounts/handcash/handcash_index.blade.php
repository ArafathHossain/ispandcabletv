@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />



<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Hand Cash Transactions table</h5>
            <a href="{{route('salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add to Account</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
              <tr>
              <th>Serial No.</th>
              <th>User ID</th>
              <th>Year</th>
              <th>Month</th>
              <th>Date</th>
              <th>Reference</th>
              <th>Amount</th>>
              <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($handcash as $key=>$row)
              <tr class="gradeX">
              <td>{{ $key +1 }}</td>
              <td style="text-align: center;">{{ $row->user_id }}</td>
              <td style="text-align: center;">{{ $row->pay_year }}</td>
              <td style="text-align: center;">{{ $row->pay_month }}</td>
              <td style="text-align: center;">{{ $row->pay_date }}</td>
              <td style="text-align: center;">{{ $row->reference }}</td>
              <td style="text-align: center;">{{ $row->amount }}</td>

              <td style="text-align: center;">
                <a href="" class="btn btn-sm btn-info">Invoice</a>
              </td>
              </tr>
              @endforeach
              </tbody>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection




