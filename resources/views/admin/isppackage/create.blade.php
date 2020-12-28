@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Create ISP Package</h1>
  </div>
  <div class="container-fluid" >
    <hr>
    <div class="row-fluid" style="padding-left: 220px;">
      <div class="span8">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>ISP Package-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.isppackage')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Package Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_name" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Package Code :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_code" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group col-md 5" >
              <label class="control-label">Internet Speed/Mbps :</label>
              <div class="controls">
                <input type="text" class="span11" name="internet_speed" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Package Price :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_price" placeholder="Enter here..." />
              </div>
            </div>

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







@endsection
