@extends('layouts.app')
@section('content')

@php
$id = Auth::id();
$user =  DB::table('users')->where('id',$id)->first();
$userisp =  DB::table('users')
->join('isppackages','users.isp_pack_id','isppackages.id')
->select('users.*','isppackages.package_name','isppackages.internet_speed','isppackages.package_price')
->where('users.id',$id)->first();

$userctv =  DB::table('users')
->join('copackages','users.co_pack_id','copackages.id')
->select('users.*','copackages.package_name','copackages.Number_of_chanel','copackages.package_price')
->where('users.id',$id)->first();
@endphp
<!-- content wrpper -->
<div class="content_wrapper">
    <!--middle content wrapper-->
    <div class="middle_content_wrapper">
        <!-- counter_area -->
        <section class="counter_area">
            <div class="row">
              @if($user->Client_type == 1)
              <div class="col-lg-3 col-sm-6">
                <div class="card border-primary mb-4 textd" >
                  <div class="card-header">ISP PACKAGE</div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">{{$userisp->package_name}}</h5>
                    <p class="card-text">{{$userisp->internet_speed}}Mbps 24 hours</p>
                  </div>
                </div>
              </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-success mb-3 textd">
                    <div class="card-header">MONTHLY BILL</div>
                    <div class="card-body text-success">
                      <h5 class="card-title">{{$userisp->package_price}}</h5>
                      <p class="card-text">You have to pay this amount every month.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-danger mb-3 textd">
                      <div class="card-header">BALANCE DUE</div>
                      <div class="card-body text-danger">
                        <h5 class="card-title">{{$userisp->package_price}}</h5>
                        <p class="card-text">This due amount that you have to pay.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-warning mb-3 textd">
                      <div class="card-header">STATUS</div>
                      <div class="card-body text-warning">
                        @if($user->status == 0)
                        <h5 class="card-title">INAVTIVE</h5>
                        <p class="card-text">Your are currently Inactive</p>
                        @else
                        <h5 class="card-title">ACTIVE</h5>
                        <p class="card-text">Your are now Active</p>
                        @endif
                      </div>
                    </div>
                </div>
                @elseif($user->Client_type == 2)
              <div class="col-lg-3 col-sm-6">
                <div class="card border-primary mb-4 textd" >
                  <div class="card-header">Cable TV PACKAGE</div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">{{$userctv->package_name}}</h5>
                    <p class="card-text">{{$userctv->Number_of_chanel}} Channels 24 hours</p>
                  </div>
                </div>
              </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-success mb-3 textd">
                    <div class="card-header">MONTHLY BILL</div>
                    <div class="card-body text-success">
                      <h5 class="card-title">{{$userctv->package_price}}</h5>
                      <p class="card-text">You have to pay this amount every month.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-danger mb-3 textd">
                      <div class="card-header">BALANCE DUE</div>
                      <div class="card-body text-danger">
                        <h5 class="card-title">{{$userctv->package_price}}</h5>
                        <p class="card-text">This due amount that you have to pay.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-warning mb-3 textd">
                      <div class="card-header">STATUS</div>
                      <div class="card-body text-warning">
                        @if($user->status == 0)
                        <h5 class="card-title">INAVTIVE</h5>
                        <p class="card-text">Your are currently Inactive</p>
                        @else
                        <h5 class="card-title">ACTIVE</h5>
                        <p class="card-text">Your are now Active</p>
                        @endif
                      </div>
                    </div>
                </div>
                @else
                 <div class="col-lg-3 col-sm-6">
                <div class="card border-primary mb-4 textd" >
                  <div class="card-header">ISP PACKAGE</div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">{{$userisp->package_name}}</h5>
                    <p class="card-text">{{$userisp->internet_speed}}Mbps 24 hours</p>
                  </div>
                </div>
              </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-success mb-3 textd">
                    <div class="card-header">MONTHLY BILL</div>
                    <div class="card-body text-success">
                      <h5 class="card-title">{{$userisp->package_price}}</h5>
                      <p class="card-text">You have to pay this amount every month.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-danger mb-3 textd">
                      <div class="card-header">BALANCE DUE</div>
                      <div class="card-body text-danger">
                        <h5 class="card-title">{{$userisp->package_price}}</h5>
                        <p class="card-text">This due amount that you have to pay.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-warning mb-3 textd">
                      <div class="card-header">STATUS</div>
                      <div class="card-body text-warning">
                        @if($user->status == 0)
                        <h5 class="card-title">INAVTIVE</h5>
                        <p class="card-text">Your are currently Inactive</p>
                        @else
                        <h5 class="card-title">ACTIVE</h5>
                        <p class="card-text">Your are now Active</p>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="card border-primary mb-4 textd" >
                  <div class="card-header">Cable TV PACKAGE</div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">{{$userctv->package_name}}</h5>
                    <p class="card-text">{{$userctv->Number_of_chanel}} Channels 24 hours</p>
                  </div>
                </div>
              </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-success mb-3 textd">
                    <div class="card-header">MONTHLY BILL</div>
                    <div class="card-body text-success">
                      <h5 class="card-title">{{$userctv->package_price}}</h5>
                      <p class="card-text">You have to pay this amount every month.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-danger mb-3 textd">
                      <div class="card-header">BALANCE DUE</div>
                      <div class="card-body text-danger">
                        <h5 class="card-title">{{$userctv->package_price}}</h5>
                        <p class="card-text">This due amount that you have to pay.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-warning mb-3 textd">
                      <div class="card-header">STATUS</div>
                      <div class="card-body text-warning">
                        @if($user->status == 0)
                        <h5 class="card-title">INAVTIVE</h5>
                        <p class="card-text">Your are currently Inactive</p>
                        @else
                        <h5 class="card-title">ACTIVE</h5>
                        <p class="card-text">Your are now Active</p>
                        @endif
                      </div>
                    </div>
                </div>
                @endif
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                             <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                          
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-bug"></i></span>
                             <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                        </div>
                         <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div> -->
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
                           
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection
