@extends('admin.admin_layouts')

@section('admin_content')

  <link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

@php
$month = date('m');
@endphp

<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Salary-Payment</h5>
          <a href="{{route('salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.salary')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <label style="font-weight: bold; padding-top: 5px;">{{$salary->name}}</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <label style="font-weight: bold; padding-top: 5px;">{{$salary->email}}</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Salary :</label>
              <div class="controls">
                <label style="font-weight: bold; padding-top: 5px;">{{$salary->salary}}</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                @if($salary->position == 1)
                <label style="font-weight: bold; padding-top: 5px;">Manager</label>
                @elseif($salary->position == 2)
                <label style="font-weight: bold; padding-top: 5px;">Engineer</label>
                @else
                <label style="font-weight: bold; padding-top: 5px;">Engineer</label>
                @endif
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Month of Salary :</label>
              <div class="controls">
                <select data-placeholder="Choose Salary Month" name="salary_month">
                  <option label="Choose Salary Month"></option>
                  <option value="1" <?php if ($month == 1) { echo "selected"; } ?> >January</option>
                  <option value="2" <?php if ($month == 2) { echo "selected"; } ?> >February</option>
                  <option value="3" <?php if ($month == 3) { echo "selected"; } ?> >March</option>
                  <option value="4" <?php if ($month == 4) { echo "selected"; } ?> >April</option>
                  <option value="5" <?php if ($month == 5) { echo "selected"; } ?> >May</option>
                  <option value="6" <?php if ($month == 6) { echo "selected"; } ?> >June</option>
                  <option value="7" <?php if ($month == 7) { echo "selected"; } ?> >July</option>
                  <option value="8" <?php if ($month == 8) { echo "selected"; } ?> >August</option>
                  <option value="9" <?php if ($month == 9) { echo "selected"; } ?> >September</option>
                  <option value="10" <?php if ($month == 10) { echo "selected"; } ?> >October</option>
                  <option value="11" <?php if ($month == 11) { echo "selected"; } ?> >November</option>
                  <option value="12" <?php if ($month == 12) { echo "selected"; } ?> >December</option>
                </select>
              </div>
            </div>

            <input type="text"  name="employee_id" style="display: none;" value="{{$salary->id}}">
            <input type="text"  name="total_salary" style="display: none;" value="{{$salary->salary}}">

            <div class="control-group">
              <label class="control-label">Paid Amount :</label>
              <div class="controls">
                <input type="text" class="span11" name="amount" placeholder="Enter here..." />
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
