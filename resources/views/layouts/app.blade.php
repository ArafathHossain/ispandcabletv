@php
$id = Auth::id();
$user =  DB::table('users')->where('id',$id)->first();
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/images/favicon.png" >
        <!--Page title-->
        <title>ISP and Cable TV Oparetor Servie</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('public/panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('public/panel/assets/css/all.min.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{asset('public/panel/assets/css/style.css')}}">

        


        <style type="text/css">
            .textd{text-align: center; font-weight: bold;}
            
        </style>
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('public/panel/assets/images/preloader.gif')}}" alt="">
        </div>
        <!-- wrapper -->
        <div class="wrapper">
           @guest
           @else
            <!-- header area -->
            <header class="header_area" style="background-color: #343a40;">
                <!-- logo -->
                <div class="sidebar_logo" style="background-color: #343a40">
                    <a href="index.html">
                        <img src="{{ asset('public/panel/assets/images/logo.png')}}" alt="" class="img-fluid logo1" style="padding: 10px;">
                        <img src="{{ asset('public/panel/assets/images/logo_small.png')}}" alt="" class="img-fluid logo2">
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>

                <ul class="header_menu">
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                
                            <ul>
                                <li><a href="{{route('profile')}}"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                                <li><a href="{{route('password.change')}}"><span><i class="fas fa-cogs"></i></span>  Password Change</a></li>
                                <li>

                                    <a href="{{route('user.logout')}}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>


                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header><!-- / header area -->
            <!-- sidebar area -->
            <aside class="sidebar-wrapper " style="background-color: #343a40;">
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{route('home')}}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">home</span>
                        </a>
                      </li>
                    <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('profile')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Profile</span>
                          </a>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-copy"></i></span>
                            <span class="menu-text">Payments</span>
                          </a>
                          <ul class="dashboard-menu">
                            <li><a href="{{route('paynow')}}">All Payments</a></li>
                            <li><a href="{{route('alldue')}}">Due Payments</a></li>
                          </ul>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('profile')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-contact"></i></span>
                              <span class="menu-text">Contact us</span>
                          </a>
                      </li>
                    </ul>
              </nav>
            </aside><!-- /sidebar Area-->


           @endguest

           @yield('content')
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="{{asset('public/panel/assets/js/jquery.min.js')}}"></script>
        <!-- popper Min Js -->
        <script src="{{asset('public/panel/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{asset('public/panel/assets/js/bootstrap.min.js')}}"></script>
        <!-- Fontawesome-->
        <script src="{{asset('public/panel/assets/js/all.min.js')}}"></script>
        <!-- metis menu -->
        <script src="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
        <!-- nice scroll bar -->
        <script src='{{asset('public/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}'></script>
        <script src="{{asset('public/panel/assets/plugins/scrollbar/scroll.active.js')}}"></script>
        <!-- counter -->
        <script src="{{asset('public/panel/assets/plugins/counter/js/counter.js')}}"></script>
        <!-- chart -->
        <script src='{{asset('public/panel/assets/plugins/chartjs-bar-chart/Chart.min.js')}}'></script>
        <script src="{{asset('public/panel/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
        <!-- pie chart -->
        <script src="{{asset('public/panel/assets/plugins/pie_chart/chart.loader.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/pie_chart/pie.active.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
        <!-- Main js -->
        <script src="{{asset('public/panel/assets/js/main.js')}}"></script>

         <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>


    </body>
</html>