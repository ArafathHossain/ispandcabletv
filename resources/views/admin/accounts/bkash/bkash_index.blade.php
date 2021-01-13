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
            <h5>Bkash Transactions table</h5>
            <a href="{{route('withdraw.bkash')}}" class="btn btn-danger" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Withdraw Balance</a>
            <a href="{{route('add.bkash')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add Balance</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
              <tr>
              <th>Year</th>
              <th>Month</th>
              <th>Date</th>
              <th>Type</th>
              <th>Description</th>
              <th>Head</th>
              <th>In Amount</th>
              <th>Out Amount</th>
              <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($bkash as $key=>$row)
              <tr class="gradeX">
              <td style="text-align: center;">{{ $row->year }}</td>
              <td style="text-align: center;">{{ $row->month }}</td>
              <td style="text-align: center;">{{ $row->date }}</td>
              <td style="text-align: center;">{{ $row->type }}</td>
              <td style="text-align: center;">{{ $row->description }}</td>
              <td style="text-align: center;">{{ $row->head }}</td>
              <td style="text-align: center;">{{ $row->in_amount }}</td>
              <td style="text-align: center;">{{ $row->out_amount }}</td>

              <td style="text-align: center;">
                <a href="{{ route('invoice.bkash',$row->id) }}" class="btn btn-sm btn-info" target="blank">Invoice</a>
              </td>
              </tr>
              @endforeach
              <tr class="gradeX">
                <td style="text-align: center; font-weight: bold;">Total: </td>
              <td style="text-align: center;">-------</td>
              <td style="text-align: center;">-------</td>
              <td style="text-align: center;">-------</td>
              <td style="text-align: center;">-------</td>
              <td style="text-align: center;">-------</td>
              <td style="text-align: center;">{{$totalin}}</td>
              <td style="text-align: center;">{{$totalout}}</td>
              <td style="text-align: center;">Total Income: {{$totalin - $totalout}}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection




