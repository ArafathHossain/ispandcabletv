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
          <h5>Client-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('update.settings')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_name" value="{{$settings->company_name}}" />
              </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Company Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="company_email" value="{{$settings->company_email}}"/>
              </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Company Phone 1 :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_phone1" value="{{$settings->company_phone1}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Company Phone 2 :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_phone2" value="{{$settings->company_phone2}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Company Mobile :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_mobile" value="{{$settings->company_mobile}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_address" value="{{$settings->company_address}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Facebook Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook_link" value="{{$settings->facebook_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Twitter Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="twitter_link" value="{{$settings->twitter_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pinterest Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="pinterest_link" value="{{$settings->pinterest_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Linkedin Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="linkedin_link" value="{{$settings->linkedin_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Instagram Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="instagram_link" value="{{$settings->instagram_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Youtube Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="youtube_link" value="{{$settings->youtube_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Logo</label>
              <div class="controls">
                <input type="file" id="file" name="logo" onchange="readURL(this);">
                <img src="{{ URL::to($settings->logo) }}" id="one" style="height: 60px; width: 60px;">
            @error('logo')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Fav-Icon</label>
              <div class="controls">
                <input type="file" id="file" name="fav_icon" onchange="readURL2(this);">
                <img src="{{ URL::to($settings->fav_icon) }}" id="two" style="height: 60px; width: 60px;">
              </div>
              @error('nid_brth_pic')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 1</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image1" onchange="readURL3(this);">
                <img src="{{ URL::to($settings->slide_image1) }}" id="three" style="height: 60px; width: 60px;">
            @error('slide_image1')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 2</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image2" onchange="readURL4(this);">
                <img src="{{ URL::to($settings->slide_image2) }}" id="four" style="height: 60px; width: 60px;">
            @error('slide_image2')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 3</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image3" onchange="readURL5(this);">
                <img src="{{ URL::to($settings->slide_image3) }}" id="five" style="height: 60px; width: 60px;">
            @error('slide_image3')
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

<script type="text/javascript">
  function readURL4(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#four')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL5(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#five')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>




@endsection
