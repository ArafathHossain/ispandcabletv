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
          <form action="{{ url('admin/district/update/'.$district->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">District Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="district_name" value="{{ $district->district_name }}" />
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
