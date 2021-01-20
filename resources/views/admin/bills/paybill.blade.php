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
          <h5>Bill-Payment</h5>
          <a href="{{route('all.bill')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">All Bills</a>
        </div>
        <div class="widget-content nopadding">
          <form action="{{route('paysuccess',$paybills->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Payable Amount :</label>
              <div class="controls">
                <label style="font-weight: bold; padding-top: 5px;">{{$paybills->due_amount}}</label>
              </div>
            </div>
                <input type="text" class="span11" name="amount" value="{{$paybills->due_amount}}" style="display: none;" />

                <div class="control-group">
              <label class="control-label">Accounts :</label>
              <div class="controls">
                <select  name="account">
                  <option >Select Account</option>
                  <option value="Bank">Bank</option>
                  <option value="Bkash">Bkash</option>
                  <option value="Rocket">Rocket</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Reference :</label>
              <div class="controls">
                <input type="text" class="span11" name="reference" placeholder="Enter here..." />
              </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Pay Now</button>
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
