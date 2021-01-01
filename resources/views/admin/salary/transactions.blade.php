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
            <h5>Employee Salary Transactions table</h5>
            <a href="{{route('salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Paid Amount</th>
                  <th>Due Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transection as $key=>$row)
                <tr class="gradeX">
                  <td style="text-align: center;">{{ $row->salary_date }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->amount }}</td>
                  <td style="text-align: center;">{{ $row->due_amount }}</td>
                  <td style="text-align: center;">
                    <a href="{{ route('invoice.payment',$row->id) }}" class="btn btn-sm btn-primary">Invoice</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
