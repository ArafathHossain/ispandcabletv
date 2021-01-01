<!DOCTYPE html>
<html lang="en">
<head>
<title>ISP & CO</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/matrix-media.css')}}" />
<link href="{{asset('public/backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('public/backend/css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/datepicker.css')}}" />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!-- chart -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
<style type="text/css">
   .respons-table {
   overflow-x: scroll; width: 100%;
  }
</style>
</head>
<body>

  @php

  $prefix = Request::route()->getPrefix();
  $route = route::current()->getName();
  @endphp

@guest


@else

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">ISP & CO</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{route('admin.password.change')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{route('admin.logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li ><a href="{{url('admin/home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li> -->
    <li class="submenu"> <a href="#"><i class=" icon-globe"></i> <span>Aria</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('create.area')}}">Add New</a></li>
        <li><a href="{{route('areas')}}">Area List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Client</span><span class="label label-important">6</span></a>
      <ul>
        <li><a href="{{route('create.clients')}}">Add New</a></li>
        <li><a href="{{route('clients')}}">Client List</a></li>
        <li><a href="{{route('inactive.clients')}}">Left Clients</a></li>
        <li><a href="">Complain List</a></li>
        <li><a href="{{route('district')}}">DISTRICT</a></li>
        <li><a href="{{route('upazila_thana')}}">UPAZILA/THANA</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-user"></i> <span>Employees</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('create.employee')}}">Add Employee</a></li>
        <li><a href="{{route('employee')}}">Employee List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-credit-card"></i> <span>Salary</span><span class="label label-important">1</span></a>
      <ul>
        <li><a href="{{route('salary')}}">Pay Salary</a></li>
        <li><a href="{{route('alldue.salary')}}">Due Salary</a></li>
        <li><a href="{{route('transactions.salary')}}">Transactions</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Packages</span><span class="label label-important">4</span></a>
      <ul>
        <li><a href="{{route('create.isppackage')}}">Add ISP Package</a></li>
        <li><a href="{{route('isppackage')}}">ISP Package List</a></li>
        <li><a href="{{route('create.copackage')}}">Add CO Package</a></li>
        <li><a href="{{route('copackage')}}">CO Package List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-inbox"></i> <span>Products</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="">Add New</a></li>
        <li><a href="">All Products</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-rss"></i> <span>ISP Service</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="">Creat Package</a></li>
        <li><a href="">All Package</a></li>
        <li><a href="">Server</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-sitemap"></i> <span>Cable Oparetor</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="">Pending Bills</a></li>
        <li><a href="">Received Bills</a></li>
        <li><a href="">Pending Bills</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-bar-chart"></i> <span>Reports</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="">Daily</a></li>
        <li><a href="">Monthly</a></li>
        <li><a href="">All Report</a></li>
      </ul>
    </li>


  </ul>
</div>

<!--sidebar-menu-->

@endguest

@yield('admin_content')



<script src="{{asset('public/backend/js/excanvas.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('public/backend/js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.interface.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.chat.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.validate.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.wizard.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.popover.js')}}"></script> 

<script src="{{asset('public/backend/js/jquery.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('public/backend/js/select2.min.js')}}"></script>  
<script src="{{asset('public/backend/js/matrix.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.tables.js')}}"></script>
<script src="{{asset('public/backend/js/matrix.form_common.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.toggle.buttons.js')}}"></script>
<script src="{{asset('public/backend/js/masked.js')}}"></script>
<script src="{{asset('public/backend/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-wysihtml5.js')}}"></script>




<script src="{{asset('public/backend/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

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
