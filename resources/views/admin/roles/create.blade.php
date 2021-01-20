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
          <form action="{{ route('store.admin')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Enter here..." />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="text" class="span11" name="password" placeholder="Enter here..." />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">User Permissions</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="area" value="1" />
                  Aria</label>
                <label>
                  <input type="checkbox" name="client" value="1" />
                  Client</label>
                <label>
                  <input type="checkbox" name="employee" value="1" />
                  Employees</label>
                <label>
                  <input type="checkbox" name="salary" value="1" />
                  Salary</label>
                <label>
                  <input type="checkbox" name="packages" value="1" />
                  Packages</label>
                <label>
                  <input type="checkbox" name="bill" value="1" />
                  Bills</label>
                <label>
                  <input type="checkbox" name="account" value="1" />
                  Accounts</label>
                <label>
                  <input type="checkbox" name="roles" value="1" />
                  Reports</label>
                <label>
                  <input type="checkbox" name="report" value="1" />
                  User Role</label>
                <label>
                  <input type="checkbox" name="settings" value="1" />
                  Settings</label>
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
@endsection
