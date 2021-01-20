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
            <h5>Balance-Transfar History</h5>
          </div>

          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>From Account</th>
                  <th>To Account</th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($balance_transfar as $key=>$row)
              <tr class="gradeX">
              <td>{{ $key +1 }}</td>
              <td style="text-align: center;">{{ $row->from_account }}</td>
              <td style="text-align: center;">{{ $row->to_account }}</td>
              <td style="text-align: center;">{{ $row->amount }}</td>
              <td style="text-align: center;">{{ $row->date }}</td>
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