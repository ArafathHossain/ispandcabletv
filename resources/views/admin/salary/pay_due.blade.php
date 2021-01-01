@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

@php
$month = date('m');
@endphp

<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Salary-Payment</h5>
          <a href="{{route('salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
        </div>
        <div class="widget-content nopadding respons-table">
          <form action="{{ route('duestore.salary',$duesalary->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf

            <div class="control-group">
              <label class="control-label">Pay Due Amount :</label>
              <div class="controls">
                <input type="text" class="span11" name="amount" placeholder="{{$duesalary->due_amount}}" />
              </div>
            </div>
            <input type="text" style="display: none;" value="{{$duesalary->employee_id}}" name="employee_id">
            <input type="text" style="display: none;" value="{{$duesalary->salary_date}}" name="salary_date">
            <input type="text" style="display: none;" value="{{$duesalary->salary_month}}" name="salary_month">
            <input type="text" style="display: none;" value="{{$duesalary->salary_year}}" name="salary_year">
            <input type="text" style="display: none;" value="{{$duesalary->amount}}" name="old_amount">
            <input type="text" style="display: none;" value="{{$duesalary->due_amount}}" name="due">

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

@endsection
