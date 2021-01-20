@extends('admin.admin_layouts')

@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />



<div id="content">
  <div id="content-header">
  </div>

  <div class="container-fluid" >
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Payment Settings info</h5>
          </div>
        <div class="widget-content nopadding">
          <form action="{{ route('update.payment')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
              <div class="control-group">
                <label class="control-label">URL :</label>
                <div class="controls">
                  <input type="text" class="span11" name="url" value="{{$payment_settings->url}}" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Username :</label>
                <div class="controls">
                  <input type="text" class="span11" name="user_id" value="{{$payment_settings->user_id}}" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                  <input type="text" class="span11" name="password" value="{{$payment_settings->password}}" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Prefix :</label>
                <div class="controls">
                  <input type="text" class="span11" name="prefix" value="{{$payment_settings->prefix}}" />
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
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
