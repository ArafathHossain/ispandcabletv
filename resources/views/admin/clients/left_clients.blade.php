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
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Client Name</th>
                  <th>Phone No.</th>
                  <th>Email Address</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($client as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->phone }}</td>
                  <td style="text-align: center;">{{ $row->email }}</td>
                  
                  @if($row->Client_type == 1)
                  <td style="text-align: center;">ISP</td>
                  @elseif($row->Client_type == 2)
                  <td style="text-align: center;">Cable TV</td>
                  @elseif($row->Client_type == 3)
                  <td style="text-align: center;">Both Service</td>
                  @else
                  <td style="text-align: center;"></td>
                  @endif

                  @if($row->status == 1)
                  <td style="text-align: center;">Active</td>
                  @elseif($row->status == 0)
                  <td style="text-align: center;">Inactive</td>
                   @else
                  <td style="text-align: center;"></td>
                  @endif

                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/client/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    @if($row->status == 1)
                    <a href="{{ URL::to('admin/client/inactive/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive" ><i>Inactive</i></a>
                    @else
                    <a href="{{ URL::to('admin/client/active/'.$row->id) }}" class="btn btn-sm btn-primary" title="Active" ><i>Active</i></a>
                    @endif
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
