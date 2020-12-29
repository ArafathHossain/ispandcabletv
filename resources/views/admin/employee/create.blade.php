@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />



<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <hr>
    <div class="row-fluid" style="padding-left: 220px;">
      <div class="span8">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Employee-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.employee')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Enter here..." />
              </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder="Enter here..." required="" autocomplete="off"/>
              </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <select name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Enter here..." />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NID/Birth Certificate No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="nid_brth_no" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                <select data-placeholder="Choose Customer Type" name="position">
                  <option label="Choose Customer Type"></option>
                  <option value="1">Manager</option>
                  <option value="2">Engineer</option>
                  <option value="3">Distributor</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Salary :</label>
              <div class="controls">
                <input type="text" class="span11" name="salary" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Facebook Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook_link" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Linkedin Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="linkedin_link" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Photo</label>
              <div class="controls">
                <input type="file" id="file" name="photo" onchange="readURL(this);">
                <img src="#" id="one">
            @error('photo')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

  <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>


@endsection
