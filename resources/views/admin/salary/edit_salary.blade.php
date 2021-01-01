@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />


<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <div class="row-fluid">
      <div class="span12">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>District</h5>
        </div>
        <div class="widget-content nopadding respons-table">
          <form action="{{ route('update.employee',$employee->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Enter here..." value="{{$employee->name}}" />
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
                <input type="email" class="span11" name="email" placeholder="Enter here..." required="" autocomplete="off" value="{{$employee->email}}"/>
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
                <input type="text" class="span11" name="phone" placeholder="Enter here..." value="{{$employee->phone}}"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <select name="gender">
                  <option value="Male" <?php if ($employee->gender == 'Male') { echo "selected"; } ?>>Male</option>
                  <option value="Female" <?php if ($employee->gender == 'Female') { echo "selected"; } ?>>Female</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Enter here..." value="{{$employee->address}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NID/Birth Certificate No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="nid_brth_no" placeholder="Enter here..." value="{{$employee->nid_brth_no}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Employee Position :</label>
              <div class="controls">
                <select data-placeholder="Choose Employee Position" name="position">
                  <option label="Choose Employee Position"></option>
                  <option value="1" <?php if ($employee->position == 1) { echo "selected"; } ?> >Manager</option>
                  <option value="2" <?php if ($employee->position == 2) { echo "selected"; } ?> >Engineer</option>
                  <option value="3" <?php if ($employee->position == 3) { echo "selected"; } ?> >Distributor</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Salary :</label>
              <div class="controls">
                <input type="text" class="span11" name="salary" placeholder="Enter here..."  value="{{$employee->salary}}"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Facebook Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook_link" placeholder="Enter here..." value="{{$employee->facebook_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Linkedin Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="linkedin_link" placeholder="Enter here..." value="{{$employee->linkedin_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Photo</label>
              <div class="controls">
                <input type="file" id="file" name="photo" onchange="readURL(this);">
                <input type="hidden" name="old_photo" value="{{ $employee->photo }}">
                <img src="{{ URL::to($employee->photo) }}" id="one" style="height: 60px; width: 60px;">
            @error('photo')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
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

<script type="text/javascript">
      $(document).ready(function(){
     $('select[name="district_id"]').on('change',function(){
          var district_id = $(this).val();
          if (district_id) {
            $.ajax({
              url: "{{ url('/get/upazila-thana/') }}/"+district_id,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              var d =$('select[name="upazila_thana_id"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="upazila_thana_id"]').append('<option value="'+ value.id + '">' + value.upazila_thana_name + '</option>');
              });
              },
            });
          }else{
            alert('danger');
          }

            });
      });

 </script>

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

 <script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>



 <script type="text/javascript">
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>



@endsection
