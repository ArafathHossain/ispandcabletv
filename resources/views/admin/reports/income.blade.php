@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

<div id="content">
  <div id="content-header"></div>
    <div class="container-fluid" >
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Income Report</h5>
            </div>
              <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data" >    
                  @csrf
                  <div class="control-group">
                    <label class="control-label">Bank Income :</label>
                    <div class="controls">
                      <label style="font-weight: bold; padding-top: 5px;">{{$total}}</label>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Bkash Income :</label>
                    <div class="controls">
                      <label style="font-weight: bold; padding-top: 5px;">{{$total2}}</label>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Rocket Income :</label>
                    <div class="controls">
                      <label style="font-weight: bold; padding-top: 5px;">{{$total3}}</label>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Hand-Cash Income :</label>
                    <div class="controls">
                      <label style="font-weight: bold; padding-top: 5px;">{{$total_admin}}</label>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">E-pay Income :</label>
                    <div class="controls">
                      <label style="font-weight: bold; padding-top: 5px;">{{$total_user}}</label>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" style="font-weight: bold; font-size:20px;">Total Income :</label>
                    <div class="controls">
                      <label  style="font-weight: bold; font-size:20px; padding-top: 5px;">{{$total+$total2+$total3+$total_bill_collection}}</label>
                    </div>
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
