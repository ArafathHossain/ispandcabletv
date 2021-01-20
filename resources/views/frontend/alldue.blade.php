@extends('layouts.app')
@section('content')

@php
$month = date('m');
$year= date('Y');
@endphp
<div class="content_wrapper">
    <div class="middle_content_wrapper">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Year</th>
      <th scope="col">Month</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($due as $key=>$row)
    <tr>
      <td>{{ $row->pay_year }}</td> 

      @if($row->pay_month == 1)
      <td>January</td>
      @elseif($row->pay_month == 2)
      <td>February</td>
      @elseif($row->pay_month == 3)
      <td>March</td>
      @elseif($row->pay_month == 4)
      <td>April</td>
      @elseif($row->pay_month == 5)
      <td>May</td>
      @elseif($row->pay_month == 6)
      <td>June</td>
      @elseif($row->pay_month == 7)
      <td>July</td>
      @elseif($row->pay_month == 8)
      <td>August</td>
      @elseif($row->pay_month == 9)
      <td>September</td>
      @elseif($row->pay_month == 10)
      <td>October</td>
      @elseif($row->pay_month == 11)
      <td>November</td>
      @elseif($row->pay_month == 12)
      <td>December</td>
      @endif

      @if($row->due_amount == 0)
      <td><span class="badge badge-success">Paid</span></td>
      <td><a href="#" class="btn btn-sm btn-success disabled" style="display: ">Pay Now</a></td>
      @else
      <td><span class="badge badge-danger">Unpaid</span></td>
      <td><a href="{{ route('paydue.bill',$row->id) }} " class="btn btn-sm btn-info">Pay Now</a></td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>

@endsection


