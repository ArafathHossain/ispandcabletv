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
            <h5>District table</h5>
            <a href="{{ route('create.district')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New District</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>District Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($district as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->district_name }}</td>
                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/district/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('admin/district/delete/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
