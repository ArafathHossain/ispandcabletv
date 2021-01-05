@extends('layouts.app')
@section('content')
<div class="content_wrapper">
    <div class="middle_content_wrapper">
      <form action="{{ route('profile.update',$client->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Name: </label>
      <input type="text" class="form-control" id="inputEmail4" value="{{$client->name}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email: </label>
      <input type="text" class="form-control" id="inputPassword4" value="{{$client->email}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Phone: </label>
      <input type="text" class="form-control" id="inputPassword4" value="{{$client->phone}}" disabled>
    </div>


  <div class="form-group  col-md-4">
    <label for="inputAddress">NID/Birth Certificate No.</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$client->nid_brth_no}}" disabled>
  </div>

  <div class="form-group  col-md-4">
    <label for="inputAddress">Registration Form No.</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$client->reg_form_no}}" disabled>
  </div>

  <div class="form-group col-md-4">
      <label for="inputState">Client Type</label>
      <select id="inputState" class="form-control" disabled>
          <option value="1" <?php if ($client->Client_type == 1) { echo "selected"; } ?>>ISP Customer</option>
          <option value="2" <?php if ($client->Client_type == 2) { echo "selected"; } ?>>Cable TV Customer</option>
          <option value="3" <?php if ($client->Client_type == 3) { echo "selected"; } ?>>Both Service Customer</option>
      </select>
    </div>

   <!-- can update -->
  <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control" name="gender">
        <option selected>Choose...</option>
         <option value="Male" <?php if ($client->gender == 'Male') { echo "selected"; } ?>>Male</option>
         <option value="Female" <?php if ($client->gender == 'Female') { echo "selected"; } ?>>Female</option>
      </select>
    </div>

    <div class="form-group col-md-4">
    <div class="form-group">
     <label >Birth Of Date</label>
     <input type="date" name="date_of_birth" max="3000-12-31" min="1000-01-01" class="form-control"  value="{{$client->date_of_birth}}">
    </div>
  </div>

  <div class="form-group col-md-4">
      <label for="inputEmail4">Father's Name: </label>
      <input type="text" class="form-control" id="inputEmail4" name="father_name" value="{{$client->father_name}}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Mother's Name: </label>
      <input type="text" class="form-control" id="inputEmail4" name="Mother_name" value="{{$client->Mother_name}}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Occupation: </label>
      <input type="text" class="form-control" id="inputEmail4" name="occupation"  value="{{$client->occupation}}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">District</label>
      <select id="inputState" class="form-control" name="district_id">
        @foreach($district as $row)
        <option value="{{ $row->id }}"<?php if ($row->id == $client->district_id) { echo "selected"; } ?>>{{ $row->district_name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Thana/Upazila</label>
      <select id="inputState" class="form-control" name="upazila_thana_id">
        @foreach($upazila_thana as $row)
        <option value="{{ $row->id }}"<?php if ($row->id == $client->upazila_thana_id) { echo "selected"; } ?>>{{ $row->upazila_thana_name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Road No.: </label>
      <input type="text" class="form-control" id="inputEmail4" name="road_no" value="{{$client->road_no}}">
    </div>

     <div class="form-group col-md-4">
      <label for="inputEmail4">House No.: </label>
      <input type="text" class="form-control" id="inputEmail4"  name="house_no" value="{{$client->house_no}}">
    </div>

      <div class="form-group col-md-6">
      <label for="inputEmail4">Present Address : </label>
      <input type="text" class="form-control" id="inputEmail4" name="present_add" value="{{$client->present_add}}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Permanent Address: </label>
      <input type="text" class="form-control" id="inputEmail4" name="permanent_add" value="{{$client->permanent_add}}">
    </div> 

    <div class="form-group col-md-6">
      <label for="inputEmail4">Facebook Link :</label>
      <input type="text" class="form-control" id="inputEmail4" name="facebook_link" value="{{$client->facebook_link}}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Linkedin Link :</label>
      <input type="text" class="form-control" id="inputEmail4" name="linkedin_link" value="{{$client->linkedin_link}}">
    </div>

 <div class="control-group">
              <label class="control-label">Profile Photo</label>
              <div class="controls">
                <input type="file" id="file" name="pro_picture" onchange="readURL(this);">
                <input type="hidden" name="old_pro_picture" value="{{ $client->pro_picture }}">
                <img src="{{ URL::to($client->pro_picture) }}" id="one" style="height: 60px; width: 60px;">
            @error('pro_picture')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>


  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>

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


