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
          <h5>Widthdraw Balance</h5>
          <a href="{{route('index.rocket')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.rocketwithdraw')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf

            <div class="control-group">
              <label class="control-label">Select Type :</label>
              <div class="controls">
                <select data-placeholder="Choose type" name="type">
                  <option label="Choose Salary Month"></option>
                  <option value="Assets">Assets</option>
                  <option value="Loan & Liabilities">Loan & Liabilities</option>
                  <option value="Loan & Liabilities">Income</option>
                  <option value="Income">Cost</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Message</label>
              <div class="controls">
                <textarea class="span11" name="description"></textarea>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Total Ammount :</label>
              <div class="controls">
                <label style="font-weight: bold; padding-top: 5px;">{{$total - $totalout}}</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Widthdraw Amount :</label>
              <div class="controls">
                <input type="text" class="span11" name="out_amount" placeholder="Enter here..." />
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
