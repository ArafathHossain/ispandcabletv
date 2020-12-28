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
          <form action="{{ url('admin/client/update/'.$client->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Enter here..." value="{{$client->name}}" />
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
                <input type="email" class="span11" name="email" placeholder="Enter here..." required="" autocomplete="off" value="{{$client->email}}"/>
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
                <input type="text" class="span11" name="phone" placeholder="Enter here..." value="{{$client->phone}}"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <select name="gender">
                  <option value="Male" <?php if ($client->gender == 'Male') { echo "selected"; } ?>>Male</option>
                  <option value="Female" <?php if ($client->gender == 'Female') { echo "selected"; } ?>>Female</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Date of Birth (mm-dd)</label>
              <div class="controls">
                <div  data-date="01-01-2021" class="input-append date datepicker">
                  <input type="text" data-date-format="mm-dd-yyyy" class="span11" name="date_of_birth" value="{{$client->date_of_birth}}">
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Father's Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="father_name" placeholder="Enter here..." value="{{$client->father_name}}"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Mother's Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="Mother_name" placeholder="Enter here..." value="{{$client->Mother_name}}"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Occupation :</label>
              <div class="controls">
                <input type="text" class="span11" name="occupation" placeholder="Enter here..." value="{{$client->occupation}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">District :</label>
              <div class="controls">
                <select data-placeholder="Choose District" name="district_id" >
                  <option label="Choose District"></option>
                  @foreach($district as $row)
                  <option value="{{ $row->id }}"<?php if ($row->id == $client->district_id) { echo "selected"; } ?>>{{ $row->district_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Thana/Upazila :</label>
              <div class="controls">
                <select data-placeholder="Choose Upazila/Thana" name="upazila_thana_id" >
                  @foreach($upazila_thana as $row)
                  <option value="{{ $row->id }}"<?php if ($row->id == $client->upazila_thana_id) { echo "selected"; } ?>>{{ $row->upazila_thana_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Road No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="road_no" placeholder="Enter here..." value="{{$client->road_no}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">House No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="house_no" placeholder="Enter here..." value="{{$client->house_no}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Present Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="present_add" placeholder="Enter here..." value="{{$client->present_add}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Permanent Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="permanent_add" placeholder="Enter here..." value="{{$client->permanent_add}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NID/Birth Certificate No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="nid_brth_no" placeholder="Enter here..." value="{{$client->nid_brth_no}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Registration Form No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="reg_form_no" placeholder="Enter here..." value="{{$client->reg_form_no}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Facebook Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook_link" placeholder="Enter here..." value="{{$client->facebook_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Linkedin Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="linkedin_link" placeholder="Enter here..." value="{{$client->linkedin_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Customer Type :</label>
              <div class="controls">
                <select data-placeholder="Choose Customer Type" name="Client_type">
                  <option label="Choose Customer Type"></option>
                  <option value="1" <?php if ($client->Client_type == 1) { echo "selected"; } ?>>ISP Customer</option>
                  <option value="2" <?php if ($client->Client_type == 2) { echo "selected"; } ?>>Cable TV Customer</option>
                  <option value="3" <?php if ($client->Client_type == 3) { echo "selected"; } ?>>Both Service Customer</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ISP Package :</label>
              <div class="controls">
                <select data-placeholder="Choose ISP Package" name="isp_pack_id">
                  <option label="Choose ISP Package"></option>
                  @foreach($isppackage as $row)
                  <option value="{{ $row->id }}" <?php if ($row->id == $client->isp_pack_id) { echo "selected"; } ?>>{{ $row->package_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Cable TV Package :</label>
              <div class="controls">
                <select data-placeholder="Choose Cable TV Package" name="co_pack_id">
                  <option label="Choose package Cable TV Package"></option>
                  @foreach($copackage as $row)
                  <option value="{{ $row->id }}" <?php if ($row->id == $client->co_pack_id) { echo "selected"; } ?>>{{ $row->package_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Profile Photo</label>
              <div class="controls">
                <input type="file" id="file" name="pro_picture" onchange="readURL(this);">
                <img src="{{ URL::to($client->pro_picture) }}" id="one" style="height: 60px; width: 60px;">
            @error('pro_picture')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">NID/Birth Certificate Photo</label>
              <div class="controls">
                <input type="file" id="file" name="nid_brth_pic" onchange="readURL2(this);">
                <img src="{{ URL::to($client->nid_brth_pic) }}" id="two" style="height: 60px; width: 60px;">
              </div>
              @error('nid_brth_pic')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Registration Form Photo</label>
              <div class="controls">
                <input type="file" id="file" name="reg_form_pic" onchange="readURL3(this);">
                <img src="{{ URL::to($client->reg_form_pic) }}" id="three" style="height: 60px; width: 60px;">
              </div>
              @error('reg_form_pic')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
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
