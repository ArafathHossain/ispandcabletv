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
            <h5>Employee table</h5>
            <a href="{{route('create.employee')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New Employee</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Employee Name</th>
                  <th>Phone No.</th>
                  <th>Email Address</th>
                  <th>Salary</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($employees as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->phone }}</td>
                  <td style="text-align: center;">{{ $row->email }}</td>
                  <td style="text-align: center;">{{ $row->salary }}</td>
                  @if($row->status == 1)
                  <td class="taskStatus" style="text-align: center;"><span class="done">Active</span></td>
                  @elseif($row->status == 0)
                  <td class="taskStatus" style="text-align: center;"><span class="pending">Inactive</span></td>
                   @else
                  <td style="text-align: center;"></td>
                  @endif
                  @if($row->status == 0)
                  <td style="text-align: center;">
                     <a href="#" class="btn btn-sm btn-primary" disabled>Pay Salary</a>
                    <a href="#" class="btn btn-sm btn-warning" disabled>Due Salary</a>
                    <!-- <a href="#" class="btn btn-sm btn-success" disabled>Details</a> -->
                  </td>
                  @else
                  <td style="text-align: center;">
                    <a href="{{ route('create.salary',$row->id) }}" class="btn btn-sm btn-primary">Pay Salary</a>
                    <a href="{{ route('due.salary',$row->id) }}" class="btn btn-sm btn-warning">Due Salary</a>
                    <!-- <a href="{{ route('create.salary',$row->id) }}" class="btn btn-sm btn-success">Details</a> -->
                  </td>
                  @endif
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
