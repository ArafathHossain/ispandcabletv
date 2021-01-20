@extends('admin.admin_layouts')

@section('admin_content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span3"> <a href=""> <i class="icon-user"></i>Total Client: {{$total_client}}</a></li>
        <li class="bg_lg span3"> <a href=""> <i class="icon-user-md"></i>Total Employee: {{$total_employee}}</a> </li>
        <li class="bg_ly "> <a href=""> <i class="icon-inbox"></i>ISP Packages: {{$isp_pack}}</a> </li>
        <li class="bg_lb "> <a href=""> <i class="icon-th"></i> Cable TV Packages: {{$ctv_pack}}</a> </li>

        <li class="bg_ls span3"> <a href=""> <i class="icon-money"></i>Total income: {{$itotal_income}}</a> </li>
        <li class="bg_ly span3"> <a href=""> <i class="icon-money"></i>This Month income: {{$mitotal_income}}</a> </li>
        <li class="bg_lg span3"> <a href=""> <i class="icon-money"></i> Today income: {{$titotal_income}}</a> </li>

        <li class="bg_lr span3"> <a href=""> <i class="icon-reply"></i>Total Expense: {{$total_expense}}</a> </li>
        <li class="bg_ly span3"> <a href=""> <i class="icon-reply"></i>This Month expensen: {{$metotal_expense}}</a> </li>
        <li class="bg_lb span3"> <a href=""> <i class="icon-reply"></i>Today expensen: {{$tetotal_income}}</a> </li>

        <li class="bg_ly span3"> <a href=""> <i class="icon-money"></i>Total Client Due Ammount {{$tdue_amount}}</a> </li>
        

      </ul>
    </div>
<!--End-Action boxes-->     
    <hr/>
  </div>
</div>

<!--end-main-container-part-->
@endsection
