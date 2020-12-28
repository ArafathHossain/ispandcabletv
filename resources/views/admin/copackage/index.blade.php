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
            <h5>Cable TV Package table</h5>
            <a href="{{ route('create.copackage')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New Cable TV Package</a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Package Code</th>
                  <th>Package Name</th>
                  <th>Number Of Channels</th>
                  <th>Paackage Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($copac as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->package_name }}</td>
                  <td style="text-align: center;">{{ $row->package_code }}</td>
                  <td style="text-align: center;">{{ $row->Number_of_chanel }}</td>
                  <td style="text-align: center;">{{ $row->package_price }}/-</td>
                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/cable_oparetor/package/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('admin/cable_oparetor/package/delete/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
