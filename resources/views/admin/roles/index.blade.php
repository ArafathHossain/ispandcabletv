@extends('admin.admin_layouts')

@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />
<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Client table</h5>
            <a href="{{route('create.clients')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New Client</a>
          </div>

          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Client Name</th>
                  <th>Phone No.</th>
                  <th>Email Address</th>
                  <th>Roles Permisions</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sub_admin as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->phone }}</td>
                  <td style="text-align: center;">{{ $row->email }}</td>
                  <td>
                    @if($row->area == 1)
                   <span class="badge btn-danger">Area </span> 
                  @else
                  @endif  

                   @if($row->client == 1)
                   <span class="badge btn-info">Client </span> 
                  @else
                  @endif  

                   @if($row->employee == 1)
                   <span class="badge btn-warning">Employee </span> 
                  @else
                  @endif  

                   @if($row->salary == 1)
                   <span class="badge btn-primary">Salary </span> 
                  @else
                  @endif  

                   @if($row->packages == 1)
                   <span class="badge btn-success">Packages </span> 
                  @else
                  @endif  

                   @if($row->bill == 1)
                   <span class="badge btn-danger">Bill </span> 
                  @else
                  @endif  

                   @if($row->account == 1)
                   <span class="badge btn-info">Account </span> 
                  @else
                  @endif  

                   @if($row->roles == 1)
                   <span class="badge btn-warning">Roles </span> 
                  @else
                  @endif  


                   @if($row->report == 1)
                   <span class="badge btn-primary">Report </span> 
                  @else
                  @endif  

                    @if($row->settings == 1)
                   <span class="badge btn-success">Settings </span> 
                  @else
                  @endif

                  </td>
                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/subadmin/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
