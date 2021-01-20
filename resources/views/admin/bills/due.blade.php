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
            <h5>Bills table</h5>
          </div>
          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Year</th>
                  <th>Month</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allbills as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->email }}</td>
                  <td style="text-align: center;">{{ $row->pay_year }}</td>

                  @if($row->pay_month == 1)
                  <td style="text-align: center;">January</td>
                  @elseif($row->pay_month == 2)
                  <td style="text-align: center;">February</td>
                  @elseif($row->pay_month == 3)
                  <td style="text-align: center;">March</td>
                  @elseif($row->pay_month == 4)
                  <td style="text-align: center;">April</td>
                  @elseif($row->pay_month == 5)
                  <td style="text-align: center;">May</td>
                  @elseif($row->pay_month == 6)
                  <td style="text-align: center;">June</td>
                  @elseif($row->pay_month == 7)
                  <td style="text-align: center;">July</td>
                  @elseif($row->pay_month == 8)
                  <td style="text-align: center;">August</td>
                  @elseif($row->pay_month == 9)
                  <td style="text-align: center;">September</td>
                  @elseif($row->pay_month == 10)
                  <td style="text-align: center;">October</td>
                  @elseif($row->pay_month == 11)
                  <td style="text-align: center;">November</td>
                  @elseif($row->pay_month == 12)
                  <td style="text-align: center;">December</td>
                  @else
                  <td style="text-align: center;"></td>
                  @endif

                  @if($row->amount == 0)
                  <td style="text-align: center;">{{$row->due_amount}}</td>
                  <td style="text-align: center;">Unpaid</td>
                  <td style="text-align: center;"><a href="{{ route('pay.bill',$row->id) }}" class="btn btn-sm btn-danger" ><i>Pay Now</i></a></td>
                   @else
                  <td style="text-align: center;"> {{$row->amount}}</td>
                  <td style="text-align: center;"> Paid</td>
                  <td style="text-align: center;"><a href="#" class="btn btn-sm btn-success disabled" ><i>Paid</i></a></td>
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
