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
            <a href="{{route('salary')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Go Back</a>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Year</th>
                  <th>Month</th>
                  <th>Due Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($due as $key=>$row)
                <tr class="gradeX">
                  <td style="text-align: center;">{{ $row->salary_year }}</td>

                  @if($row->salary_month == 1)
                  <td style="text-align: center;">January</td>
                  @elseif($row->salary_month == 2)
                  <td style="text-align: center;">February</td>
                  @elseif($row->salary_month == 3)
                  <td style="text-align: center;">March</td>
                  @elseif($row->salary_month == 4)
                  <td style="text-align: center;">April</td>
                  @elseif($row->salary_month == 5)
                  <td style="text-align: center;">May</td>
                  @elseif($row->salary_month == 6)
                  <td style="text-align: center;">June</td>
                  @elseif($row->salary_month == 7)
                  <td style="text-align: center;">July</td>
                  @elseif($row->salary_month == 8)
                  <td style="text-align: center;">August</td>
                  @elseif($row->salary_month == 9)
                  <td style="text-align: center;">September</td>
                  @elseif($row->salary_month == 10)
                  <td style="text-align: center;">October</td>
                  @elseif($row->salary_month == 11)
                  <td style="text-align: center;">November</td>
                  @elseif($row->salary_month == 12)
                  <td style="text-align: center;">December</td>
                  @endif

                  <td style="text-align: center;">{{ $row->due_amount }}</td>
                  <td style="text-align: center;">
                    <a href="{{ route('paydue.salary',$row->id) }}" class="btn btn-sm btn-primary">Pay Due</a>
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
