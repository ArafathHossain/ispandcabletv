@extends('layouts.app')
@section('content')

@php
$month = date('m');
$year= date('Y');
@endphp
<div class="content_wrapper">
    <div class="middle_content_wrapper">
      <form action="{{route('shurjopay.response')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
    <div class="form-group col-md-12">
      <label for="inputEmail4">Paid Amount: </label>
      <input type="text" class="form-control" id="inputEmail4"  value="{{$duesalary->due_amount}}" name="amount" disabled>
      <input type="text" class="form-control" id="inputEmail4"  value="{{$duesalary->due_amount}}" name="amount" style="display: none;">
    </div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">Pay Now</button>
</form>

    </div>
</div>

@endsection