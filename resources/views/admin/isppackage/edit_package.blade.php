@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />


<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <div class="row-fluid" style="padding-left: 220px;">
      <div class="span8">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>District</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ url('admin/isp/package/update/'.$isppack->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf

            <div class="control-group">
              <label class="control-label">Package Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_name" value="{{ $isppack->package_name }}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Package Code :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_code" value="{{ $isppack->package_code }}" />
              </div>
            </div>

            <div class="control-group col-md 5" >
              <label class="control-label">Internet Speed/Mbps :</label>
              <div class="controls">
                <input type="text" class="span11" name="internet_speed" value="{{ $isppack->internet_speed }}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Package Price :</label>
              <div class="controls">
                <input type="text" class="span11" name="package_price" value="{{ $isppack->package_price }}"/>
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







@endsection
