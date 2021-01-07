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
            <h5>Generte bill For this month</h5>
            @if($ispprice)
            <a href="#" class="btn btn-danger disabled" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Bill Genarate</a>
            @else
            <a href="{{route('generate.bill')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px; display: ;">Bill Genarate</a>
            @endif
          </div>


        </div>
      </div>
    </div>
  </div>
</div>







@endsection
