<!DOCTYPE html>
<html lang="en">
  
@php
$sitesettings = DB::table('sitesettings')->where('id',1)->first();
@endphp

<!-- Mirrored from demo.yolotheme.com/html/graphsign/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 06:37:37 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Graphsign - Home - Art Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,700,900" rel="stylesheet" type="text/css">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{asset('public/frontend/libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/superfish-menu/css/superfish.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/magnific-popup/dist/magnific-popup.css')}}">
    <link rel="shortcut icon" href="{{$sitesettings->fav_icon}}">

    <!-- Theme CSS-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/art-layout.css')}}">
    <link id="style-main-color" rel="stylesheet" href="{{asset('public/frontend/css/color/color1.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    
    -->
  </head>
  <body>
    <div id="site" class="site">
      <header class="header art-header art-header-home has-slide-nav gr-wrap"> 
        <div class="header-main-nav">
          <div class="container">
            <div class="container-inner">
              <div class="navbar-header">
                <div class="header-logo"><a href="index-2.html" title="Graphsign"><img src="{{ asset('public/frontend/images/logo/art_logo.png')}} " alt="art_logo" class="logo-img logo-default image-live-view"/><img src="{{$sitesettings->logo}}" alt="art_logo_dark" class="logo-img logo-scroll image-live-view"/></a></div>
                <!-- .header-logo-->
                <div class="header-toggle">
                  <button type="button" data-toggle="collapse" data-target="#main-collapse" class="navbar-toggle collapsed"><i class="fa fa-bars"></i></button>
                </div>
                <!-- .header-toggle-->
              </div>
              <!-- .navbar-header-->
              <div class="main-nav-wrapper">
                <nav id="main-collapse" class="main-nav collapse navbar-collapse">
                  <ul class="nav sf-menu">
                    <li class="active"><a href="#site">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pricing">Packages</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/home') }}">Profile</a></li>
                    @else
                         <li><a href="{{route('login')}}">Login</a><li>
                    @endauth
                
                    @endif
                  </ul>
                </nav>
              </div>
              <!-- .main-nav-wrapper-->
            </div>
          </div>
        </div>
      </header>
      <!-- .art-header-->

      <section class="art-slideshow-home gr-wrap">
        <div id="art-slideshow-home" class="gr-caroufredsel">
          <ul class="gr-slider-wrapper">
            <li class="gr-slider-item"><img src="{{ asset('public/frontend/images/slideshow/art_slider_home_1.jpg')}}" alt="art_slider_home_1" class="gr-slider-img"/>
              <div class="slider-caption-1 text-center">
                <div class="container">
                  <div class="caption-line-1"></div>
                  <div class="caption-text-1">We are Graphsign</div>
                  <div class="caption-text-2">We design for the <span class="gr-text-primary"> future - </span>We make your life <span class="gr-text-primary"> better </span></div>
                </div>
              </div>
            </li>
            <li class="gr-slider-item"><img src="{{ asset('public/frontend/images/slideshow/art_slider_home_2.jpg')}}" alt="art_slider_home_2" class="gr-slider-img"/></li>
            <li class="gr-slider-item"><img src="{{ asset('public/frontend/images/slideshow/art_slider_home_3.jpg')}}" alt="art_slider_home_3" class="gr-slider-img"/>
              <div class="slider-caption-2 text-left">
                <div class="container">
                  <div class="caption-text-3">We are graphics design</div>
                  <div class="caption-text-4">We design for the future - <span class="gr-text-primary"> We make your life better  </span></div>
                  <div class="caption-line-2"></div>
                  <div class="caption-text-5 hidden-xs hidden-sm">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex</p>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
                  </div>
                  <div class="caption-btn-group-1">
                    <div class="gr-btn-group-wrapper">
                      <div class="gr-btn-group pull-left"><a href="#contact" class="gr-btn gr-btn-style-4 btn-contact">Contact me</a><a href="#" class="gr-btn gr-btn-style-4 hidden-xs">view details</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- .art-slideshow-home-->

      <section id="about" class="art-who-we-are gr-wrap">
        <div class="container">
          <div class="art-who-we-are-inner">
            <div class="content-title">
              <div class="gr-title-style-1 gr-table align-middle">
                <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">About us</span></div>
                <div class="gr-table-cell sub">We are creative problem solvers. The most important thing to us is that we are helping build the brands people love. </div>
              </div>
            </div>
            <!-- .content-title-->
            <div class="content-image"><img src="{{ asset('public/frontend/images/other/who_we_are.png')}}" alt="who_we_are"/></div>
            <!-- .content-image-->
          </div>
        </div>
      </section>
      <!-- .art-who-we-are-->

      <section class="art-counter gr-wrap">
        <div class="gr-block-style-1">
          <div style="background-image: url(public/frontend/images/background/art_bg_counter.png);" class="bg-main">
            <div class="bg-gradient">
              <div class="container">
                <div class="row list-counter">
                  <div class="item col-xs-6 col-md-3">
                    <div class="gr-counter-style-2 gr-animated">
                      <div class="gr-text-circle-wrapper">
                        <div class="gr-text-circle">
                          <ul>
                            <li>C</li>
                            <li>l</li>
                            <li>i</li>
                            <li>e</li>
                            <li>n</li>
                            <li>t</li>
                            <li></li>
                            <li>R</li>
                            <li>e</li>
                            <li>v</li>
                            <li>i</li>
                            <li>e</li>
                            <li>w</li>
                            
                          </ul>
                        </div>
                      </div>
                      <div class="two-half-circles-wrapper">
                        <div class="two-half-circles"></div>
                      </div>
                      <div class="content-inner">
                        <div class="icon"><i class="fa fa-star-o"></i></div>
                        <div data-from="0" data-to="5008" class="gr-number-counter">5008</div>
                      </div>
                    </div>
                  </div>
                  <!-- .item-->
                  <div class="item col-xs-6 col-md-3">
                    <div class="gr-counter-style-2 gr-animated">
                      <div class="gr-text-circle-wrapper">
                        <div class="gr-text-circle">
                          <ul>
                            <li>T</li>
                            <li>o</li>
                            <li>t</li>
                            <li>a</li>
                            <li>l</li>
                            <li> </li>
                            <li>c</li>
                            <li>l</li>
                            <li>i</li>
                            <li>e</li>
                            <li>n</li>
                            <li>t</li>
                            <li>s</li>
                          </ul>
                        </div>
                      </div>
                      <div class="two-half-circles-wrapper">
                        <div class="two-half-circles"></div>
                      </div>
                      <div class="content-inner">
                        <div class="icon"><i class="fa fa-heart"></i></div>
                        <div data-from="0" data-to="4320" class="gr-number-counter">4320</div>
                      </div>
                    </div>
                  </div>
                  <!-- .item-->
                  <div class="item col-xs-6 col-md-3">
                    <div class="gr-counter-style-2 gr-animated">
                      <div class="gr-text-circle-wrapper">
                        <div class="gr-text-circle">
                          <ul>
                            <li>t</li>
                            <li>e</li>
                            <li>a</li>
                            <li>m</li>
                            <li> </li>
                            <li>m</li>
                            <li>e</li>
                            <li>m</li>
                            <li>b</li>
                            <li>e</li>
                            <li>r</li>
                            <li>s</li>
                          </ul>
                        </div>
                      </div>
                      <div class="two-half-circles-wrapper">
                        <div class="two-half-circles"></div>
                      </div>
                      <div class="content-inner">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div data-from="0" data-to="1256" class="gr-number-counter">1256</div>
                      </div>
                    </div>
                  </div>
                  <!-- .item-->
                  <div class="item col-xs-6 col-md-3">
                    <div class="gr-counter-style-2 gr-animated">
                      <div class="gr-text-circle-wrapper">
                        <div class="gr-text-circle">
                          <ul>
                            <li>h</li>
                            <li>o</li>
                            <li>u</li>
                            <li>r</li>
                            <li>s</li>
                            <li> </li>
                            <li>w</li>
                            <li>o</li>
                            <li>o</li>
                            <li>r</li>
                            <li>k</li>
                            <li>i</li>
                            <li>n</li>
                            <li>g</li>
                          </ul>
                        </div>
                      </div>
                      <div class="two-half-circles-wrapper">
                        <div class="two-half-circles"></div>
                      </div>
                      <div class="content-inner">
                        <div class="icon"><i class="fa fa-pencil"></i></div>
                        <div data-from="0" data-to="6458" class="gr-number-counter">6458</div>
                      </div>
                    </div>
                  </div>
                  <!-- .item-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .gr-block-style-1-->
      </section>
      <!-- .art-counter-->

      <section class="art-slider-about-us gr-wrap">
        <div id="art-slider-about-us" class="gr-caroufredsel">
          <ul class="gr-slider-wrapper">
            <li class="gr-slider-item slider-about-us">
              <div style="background-image: url(public/frontend/images/slideshow/art_slider_about_us_1.jpg);" class="slider-img"></div>
              <div class="bg-overlay"></div>
              <div class="slider-caption slider-caption-1">
                <div class="container">
                  <div class="slider-caption-title">
                    <div class="gr-title-style-2 gr-table align-middle">
                      <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">About us</span></div>
                      <div class="gr-table-cell sub">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</div>
                    </div>
                  </div>
                  <div class="slider-caption-content gr-block-style-2">
                    <div class="gr-table align-top">
                      <div class="gr-table-cell left">
                        <div class="content-title">We are creative</div>
                        <div class="content-sub-title gr-icon-bottom-text-style-1">Graphsign design</div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                        </div>
                        <div class="content-button"><a href="#" class="gr-btn gr-btn-style-4">read more</a></div>
                      </div>
                      <div class="gr-table-cell right text-right hidden-xs">
                        <div class="caption-img-1"><img src="{{ asset('public/frontend/images/other/creatve_imac_iphone.png')}}" alt="creatve_imac_iphone"/></div>
                      </div>
                    </div>
                  </div>
                  <!-- .gr-block-style-2-->
                </div>
              </div>
            </li>
            <!-- .gr-slider-item-->
            <li class="gr-slider-item slider-our-process">
              <div style="background-image: url(public/frontend/images/slideshow/art_slider_about_us_2.jpg);" class="slider-img"></div>
              <div class="bg-overlay"></div>
              <div class="slider-caption slider-caption-2">
                <div class="container">
                  <div class="slider-caption-title">
                    <div class="gr-title-style-2 gr-table align-middle">
                      <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">our process</span></div>
                      <div class="gr-table-cell sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</div>
                    </div>
                  </div>
                  <div class="slider-caption-content gr-block-style-3">
                    <ul>
                      <li class="item item-1 bg">
                        <div class="text">crawl</div>
                        <div class="circle">
                          <div class="icon fa fa-rocket"></div>
                        </div>
                      </li>
                      <li class="item item-2 bg">
                        <div class="text">ideal</div>
                        <div class="circle">
                          <div class="icon fa fa-lightbulb-o"></div>
                        </div>
                      </li>
                      <li class="item item-3 bg">
                        <div class="text">concert</div>
                        <div class="circle">
                          <div class="icon fa fa-clipboard"></div>
                        </div>
                      </li>
                      <li class="item item-4 bg">
                        <div class="text">design</div>
                        <div class="circle">
                          <div class="icon fa fa-paint-brush"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- .gr-block-style-3-->
                </div>
              </div>
            </li>
            <!-- .gr-slider-item-->
            <li class="gr-slider-item slider-experties-skills">
              <div style="background-image: url(public/frontend/images/slideshow/art_slider_about_us_3.jpg);" class="slider-img"></div>
              <div class="bg-overlay"></div>
              <div class="bg-experties-skills"></div>
              <div class="slider-caption slider-caption-3">
                <div class="container">
                  <div class="slider-caption-title">
                    <div class="gr-title-style-2 gr-table align-middle">
                      <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">experties skills</span></div>
                      <div class="gr-table-cell sub">Consectetuer adipiscing elit, sed diam nonummy nibh euismod</div>
                    </div>
                  </div>
                  <div class="slider-caption-content gr-block-style-4">
                    <div class="row">
                      <div class="item col-xs-12 col-sm-4">
                        <div class="content-progress-circle gr-progress-circle-style-2">
                          <div role="progressbar" data-goal="70" aria-valuemin="0" aria-valuemax="100" data-barcolor="#009cff" data-trackcolor="rgba(255, 255, 255, 0.05)" data-fillcolor="rgba(0, 0, 0, 0.0)" data-barsize="2" data-easing="ease" data-speed="40" class="gr-progress-circle">
                            <div class="gr-progress-circle-number">0%</div>
                            <div class="circle-inner bg-copy"></div>
                            <div class="gr-progress-circle-label gr-overflow-ellipsis">Photoshop</div>
                          </div>
                        </div>
                        <div class="content hidden-xs">
                          <p>Praesent turpis mauris, aliquet id dolor<br/>Gravida adipiscing lectus ut rutrum<br/>Aenean at posuere risus.</p>
                        </div>
                      </div>
                      <div class="item col-xs-12 col-sm-4">
                        <div class="content-progress-circle gr-progress-circle-style-2">
                          <div role="progressbar" data-goal="50" aria-valuemin="0" aria-valuemax="100" data-barcolor="#02cdb3" data-trackcolor="rgba(255, 255, 255, 0.05)" data-fillcolor="rgba(0, 0, 0, 0.0)" data-barsize="2" data-easing="ease" data-speed="40" class="gr-progress-circle">
                            <div class="gr-progress-circle-number">0%</div>
                            <div class="circle-inner bg-copy"></div>
                            <div class="gr-progress-circle-label gr-overflow-ellipsis">Corel</div>
                          </div>
                        </div>
                        <div class="content hidden-xs">
                          <p>Praesent turpis mauris, aliquet id dolor<br/>Gravida adipiscing lectus ut rutrum<br/>Aenean at posuere risus.</p>
                        </div>
                      </div>
                      <div class="item col-xs-12 col-sm-4">
                        <div class="content-progress-circle gr-progress-circle-style-2">
                          <div role="progressbar" data-goal="85" aria-valuemin="0" aria-valuemax="100" data-barcolor="#ff6600" data-trackcolor="rgba(255, 255, 255, 0.05)" data-fillcolor="rgba(0, 0, 0, 0.0)" data-barsize="2" data-easing="ease" data-speed="40" class="gr-progress-circle">
                            <div class="gr-progress-circle-number">0%</div>
                            <div class="circle-inner bg-copy"></div>
                            <div class="gr-progress-circle-label gr-overflow-ellipsis">Illustrator</div>
                          </div>
                        </div>
                        <div class="content hidden-xs">
                          <p>Praesent turpis mauris, aliquet id dolor<br/>Gravida adipiscing lectus ut rutrum<br/>Aenean at posuere risus.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- .gr-block-style-4-->
                </div>
              </div>
            </li>
            <!-- .gr-slider-item-->
          </ul>
          <!-- .gr-slider-wrapper-->
          <div class="slider-control-wrapper">
            <div class="container">
              <div class="pull-right">
                <button id="art-slider-about-us-prev" type="button" class="gr-slider-control-btn prev gr-btn gr-btn-style-12"><span class="icon fa fa-angle-left"></span></button>
                <button id="art-slider-about-us-next" type="button" class="gr-slider-control-btn next gr-btn gr-btn-style-12"><span class="icon fa fa-angle-right"></span></button>
              </div>
            </div>
          </div>
          <!-- .slider-control-wrapper-->
        </div>
      </section>
      <!-- .art-slider-about-us-->

      

      <section id="pricing" class="art-our-pricing gr-wrap">
        <div class="container">
          <div class="art-our-pricing-inner">
            <div class="content-title">
              <div class="gr-title-style-1 gr-table align-middle">
                <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">Our ISP pricing</span></div>
              </div>
            </div>

            @php
            $isppac = DB::table('isppackages')->get();
            @endphp
            <!-- .content-title-->
            <div class="content-main">
              <div class="gr-block-style-24">
                <div class="row list-pricing">
                  @foreach($isppac as $key=>$row)
                  <div class="item col-xs-12 col-md-4" style="padding: 3px;">
                    <div data-gr-href="#" class="item-inner gr-block-style-6">
                      <div class="content-header">
                        <div class="content-header-inner">
                          <div class="icon"><i class="fa fa-box-open"></i></div>
                          <div class="text">{{$row->package_name}}</div>
                        </div>
                        <div class="content-header-hover">
                          <div class="circle"></div>
                          <div class="icon"><i class="fa fa-box-open"></i></div>
                          <div class="text">{{$row->package_name}}</div>
                        </div>
                      </div>
                      <div class="content-main">
                        <div class="price">{{$row->package_price}} ৳</div>
                        <div class="decs">
                          <ul>
                            <li>{{$row->internet_speed}} Mbps speed  </li>
                            <li>Youtube & Facebook Unlimited (HD)</li>
                            <li>24/7 Support</li>
                            <li>Torrent 5</li>
                          </ul>
                        </div>
                      </div>
                      <div class="content-footer"><a href="#contact" class="gr-btn gr-btn-style-1">Contact</a></div>
                    </div>
                    <!-- .gr-block-style-6-->
                  </div>
                  <!-- .item-->

                  @endforeach

                  <!-- .list-pricing-->
                </div>
              </div>
              <!-- .gr-block-style-24-->
            </div>
            <!-- .content-main-->


          </div>
        </div>
      </section>
      <!-- .art-our-pricing-->

      <section id="pricing" class="art-our-pricing gr-wrap">
        <div class="container">
          <div class="art-our-pricing-inner">
            <div class="content-title">
              <div class="gr-title-style-1 gr-table align-middle">
                <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">Our Cable TV Channel pricing</span></div>
                
              </div>
            </div>

            @php
            $ctvpac = DB::table('copackages')->get();
            @endphp
            <!-- .content-title-->
            <div class="content-main">
              <div class="gr-block-style-24">
                <div class="row list-pricing">
                  @foreach($ctvpac as $key=>$row)
                  <div class="item col-xs-12 col-md-4" style="padding: 3px;">
                    <div data-gr-href="#" class="item-inner gr-block-style-6">
                      <div class="content-header">
                        <div class="content-header-inner">
                          <div class="icon"><i class="fa fa-box-open"></i></div>
                          <div class="text">{{$row->package_name}}</div>
                        </div>
                        <div class="content-header-hover">
                          <div class="circle"></div>
                          <div class="icon"><i class="fa fa-box-open"></i></div>
                          <div class="text">{{$row->package_name}}</div>
                        </div>
                      </div>
                      <div class="content-main">
                        <div class="price">{{$row->package_price}} ৳</div>
                        <div class="decs">
                          <ul>
                            <li>{{$row->Number_of_chanel}} Channel  </li>
                            <li>24/7 Support</li>
                          </ul>
                        </div>
                      </div>
                      <div class="content-footer"><a href="#contact" class="gr-btn gr-btn-style-1">Contact</a></div>
                    </div>
                    <!-- .gr-block-style-6-->
                  </div>
                  <!-- .item-->

                  @endforeach

                  <!-- .list-pricing-->
                </div>
              </div>
              <!-- .gr-block-style-24-->
            </div>
            <!-- .content-main-->

            
          </div>
        </div>
      </section>
      <!-- .art-our-pricing-->

      <section id="testimonial" class="art-testimonial gr-wrap">
        <div style="background-image: url(public/frontend/images/background/art_bg_testimonial.jpg);" class="bg-main">
          <div class="bg-overlay">
            <div class="container">
              <div id="art-slider-logo-brand" class="art-slider-logo-brand gr-caroufredsel">
                <div class="content-main">
                  <div class="content-main-inner">
                    <div class="row">
                      <ul class="gr-slider-wrapper">
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_1.png')}}" alt="logo_brand_1"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_2.png')}}" alt="logo_brand_2"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_3.png')}}" alt="logo_brand_3"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_4.png')}}" alt="logo_brand_4"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_5.png')}}" alt="logo_brand_5"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_1.png')}}" alt="logo_brand_1"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/mages/logo-brand/logo_brand_2.png')}}i" alt="logo_brand_2"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_3.png')}}" alt="logo_brand_3"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_4.png')}}" alt="logo_brand_4"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-6 col-sm-4 col-md-2">
                          <div class="slider-item-inner"><a href="#" target="_blank"><img src="{{ asset('public/frontend/images/logo-brand/logo_brand_5.png')}}" alt="logo_brand_5"/></a></div>
                        </li>
                        <!-- .gr-slider-item-->
                      </ul>
                    </div>
                  </div>
                  <!-- .content-main-inner-->
                  <button id="art-slider-logo-brand-prev" type="button" class="gr-slider-control-btn prev gr-btn gr-btn-style-13 hidden-lg"><span class="icon fa fa-angle-left"></span></button>
                  <!-- .gr-slider-control-btn.prev-->
                  <button id="art-slider-logo-brand-next" type="button" class="gr-slider-control-btn next gr-btn gr-btn-style-13 hidden-lg"><span class="icon fa fa-angle-right"></span></button>
                  <!-- .gr-slider-control-btn.next-->
                </div>
                <!-- .content-main-->
              </div>
              <!-- .art-slider-logo-brand-->
              <div id="art-slider-testimonial" class="art-slider-testimonial gr-caroufredsel">
                <div class="content-main">
                  <div class="content-bg">
                    <div class="content-bg-inner">
                      <div class="content-bg-solid">
                        <div class="content-bg-solid-inner"></div>
                      </div><img src="{{ asset('public/frontend/images/other/iphone5.png')}}" alt="iphone5" class="content-bg-img"/>
                    </div>
                  </div>
                  <!-- .content-bg-->
                  <div class="content-main-inner">
                    <div class="row">
                      <ul class="gr-slider-wrapper">
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_1.jpg')}}" alt="person_testimonial_1" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Peter landt</a></div>
                            <div class="content-category gr-title-style-5">Web designer</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_2.jpg')}}" alt="person_testimonial_2" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Thomas muler</a></div>
                            <div class="content-category gr-title-style-5">Director</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_3.jpg')}}" alt="person_testimonial_3" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">John doe</a></div>
                            <div class="content-category gr-title-style-5">Team leader</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_4.jpg')}}" alt="person_testimonial_4" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Johnny Sanders</a></div>
                            <div class="content-category gr-title-style-5">Web designer</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_5.jpg')}}" alt="person_testimonial_5" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Dennis Hopkins</a></div>
                            <div class="content-category gr-title-style-5">Web designer</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_6.jpg')}}" alt="person_testimonial_6" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Ross Wilkerson</a></div>
                            <div class="content-category gr-title-style-5">Web designer</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                        <li class="gr-slider-item col-xs-12 col-sm-6 col-md-4">
                          <div class="slider-item-inner">
                            <div class="content-thumb gr-circle-box-style-1">
                              <div class="thumb"><img src="{{ asset('public/frontend/images/testimonial/person_testimonial_7.jpg')}}" alt="person_testimonial_7" class="thumb-img"/></div>
                              <div class="quote">
                                <div class="icon gr-table align-middle">
                                  <div class="gr-table-cell"><i class="fa fa-quote-left"></i></div>
                                </div>
                              </div>
                            </div>
                            <div class="content-title gr-title-style-6"> <a href="#">Alan Hardy</a></div>
                            <div class="content-category gr-title-style-5">Web designer</div>
                            <div class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nullaet</div>
                          </div>
                        </li>
                        <!-- .gr-slider-item-->
                      </ul>
                    </div>
                  </div>
                  <!-- .content-main-inner-->
                </div>
                <!-- .content-main-->
                <div class="slider-indicator-wrapper gr-slider-indicators center-bottom">
                  <div id="art-slider-testimonial-indicators" class="gr-btn gr-btn-style-16"></div>
                </div>
                <!-- .slider-indicator-wrapper-->
                <button id="art-slider-testimonial-prev" type="button" class="gr-slider-control-btn prev gr-btn gr-btn-style-13"><span class="icon fa fa-angle-left"></span></button>
                <!-- .gr-slider-control-btn.prev-->
                <button id="art-slider-testimonial-next" type="button" class="gr-slider-control-btn next gr-btn gr-btn-style-13"><span class="icon fa fa-angle-right"></span></button>
                <!-- .gr-slider-control-btn.next-->
              </div>
              <!-- .art-slider-testimonial-->
            </div>
          </div>
        </div>
      </section>
      <!-- .art-testimonial-->

      <section id="contact" class="art-contact gr-wrap">
        <div class="container">
          <div class="art-contact-inner">
            <div class="content-title">
              <div class="gr-title-style-1 gr-table align-middle">
                <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">Keep In Touch With Us</span></div>
                <div class="gr-table-cell sub">Let be our friends and share your passion with us.</div>
              </div>
            </div>
            <!-- .content-title-->
            <div class="content-main">
              <div class="tab-content">
                <div id="tab-contact" role="tabpanel" class="tab-pane active">
                  <div class="contact-form">
                    <form method="GET" class="form-art-contact">
                      <div class="content-form-main">
                        <div class="row">
                          <div class="col-xs-12 col-sm-8">
                            <div class="contact-input-info">
                              <div class="form-group">
                                <input type="text" name="test789" data-gr-placeholder="Name" class="gr-inputbox gr-inputbox-block"/>
                              </div>
                              <div class="form-group">
                                <input type="email" name="test527" data-gr-placeholder="Email" class="gr-inputbox gr-inputbox-block"/>
                              </div>
                              <div class="form-group">
                                <textarea name="test178" data-gr-placeholder="Message" class="gr-inputbox gr-inputbox-block"></textarea>
                              </div>
                              <div class="form-group">
                                <button type="submit" class="gr-btn gr-btn-block gr-btn-style-7">Send Message</button>
                              </div>
                            </div>
                            <!-- .contact-input-info-->
                          </div>
                          <div class="col-xs-12 col-sm-4">
                            <div class="contact-detail">
                              <div class="form-group">
                                <div class="gr-icon-left-text-style-4">
                                  <div class="gr-table align-middle">
                                    <div class="gr-table-cell icon"><img src="{{ asset('public/frontend/images/icon/icon_phone.png')}}" alt="icon_phone" class="image-live-view"/></div>
                                    <div class="gr-table-cell text">{{$sitesettings->company_mobile}}</div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="gr-icon-left-text-style-4">
                                  <div class="gr-table align-middle">
                                    <div class="gr-table-cell icon"><img src="{{ asset('public/frontend/images/icon/icon_map_marker.png')}}" alt="icon_map_marker" class="image-live-view"/></div>
                                    <div class="gr-table-cell text">{{$sitesettings->company_address}}</div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="gr-icon-left-text-style-4">
                                  <div class="gr-table align-middle">
                                    <div class="gr-table-cell icon"><img src="{{ asset('public/frontend/images/icon/icon_mail.png')}}" alt="icon_mail" class="image-live-view"/></div>
                                    <div class="gr-table-cell text"><a href=""><span class="__cf_email__">{{$sitesettings->company_email}}</span></a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- .contact-detail-->
                          </div>
                        </div>
                      </div>
                      <!-- .content-form-main-->
                    </form>
                  </div>
                </div>
                <div id="tab-map" role="tabpanel" class="tab-pane">
                  <div class="contact-map">
                    <div class="contact-map-embed">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d913.0596383536832!2d90.37467077546144!3d23.73887113399576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1610533830032!5m2!1sen!2sbd" width="600" height="450"></iframe>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- .tab-content-->
              <ul role="tablist" class="tab-list">
                <li role="presentation" class="active"><a href="#tab-contact" aria-controls="tab-contact" role="tab" data-toggle="tab" class="gr-btn gr-btn-style-8 btn-contact">Contact</a></li>
                <li role="presentation"><a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab" class="gr-btn gr-btn-style-8 btn-map">Map</a></li>
              </ul>
              <!-- .tab-list-->
            </div>
            <!-- .content-main-->
          </div>
        </div>
      </section>
      <!-- .art-contact-->
            
<footer class="footer art-footer gr-wrap">
  <div style="background-image: url(public/frontend/images/background/art_bg_footer.png);" class="bg"><img src="{{ asset('public/frontend/images/other/img_footer_1.png')}}" alt="img_footer_1" class="img-1 hidden-xs hidden-sm hidden-md"/><img src="{{ asset('public/frontend/images/other/img_footer_2.png')}}" alt="img_footer_2" class="img-2 hidden-xs hidden-sm hidden-md"/>
    <div class="container">
      <div class="art-footer-inner">
        <div class="content-title">
          <div class="gr-title-style-2 gr-table align-middle">
            <div class="gr-table-cell main"> <span class="gr-icon-left-text-style-1">Get social</span></div>
            <div class="gr-table-cell sub">
              <div class="gr-social-list-style-1 art-footer-social">
                <ul class="pull-right">
                  <li><a href="{{$sitesettings->facebook_link}}" target="_blank"><span class="icon"><i class="fa fa-facebook"></i></span><span class="gr-btn gr-btn-style-5">facebook</span></a></li>
                  <li><a href="{{$sitesettings->twitter_link}}" target="_blank"><span class="icon"><i class="fa fa-twitter"></i></span><span class="gr-btn gr-btn-style-5">twitter</span></a></li>
                  <li><a href="{{$sitesettings->linkedin_link}}" target="_blank"><span class="icon"><i class="fa fa-linkedin"></i></span><span class="gr-btn gr-btn-style-5">Linkedin</span></a></li>
                  <li><a href="{{$sitesettings->youtube_link}}" target="_blank"><span class="icon"><i class="fa fa-youtube"></i></span><span class="gr-btn gr-btn-style-5">youtube</span></a></li>
                  <li><a href="{{$sitesettings->instagram_link}}" target="_blank"><span class="icon"><i class="fa fa-instagram"></i></span><span class="gr-btn gr-btn-style-5">Instagram</span></a></li>

                </ul>
              </div>
              <!-- .art-footer-social-->
            </div>
          </div>
        </div>
        <!-- .content-title-->
        <div class="content-main">
          <div class="art-footer-back-to-top text-center">
            <button type="button" class="gr-btn-back-to-top gr-btn-back-to-top-style-1"><span class="icon fa fa-angle-double-up"></span><span class="text">back to top</span></button>
          </div>
          <!-- .art-footer-back-to-top-->
          <div class="art-footer-copyright text-center">Graphsign &copy; All Rights Reserved. Design by<a href="http://www.mmitsoft.com/" target="_blank"> mmitsoft.com</a></div>
          <!-- .art-footer-copyright-->
        </div>
        <!-- .content-main-->
      </div>
    </div>
  </div>
</footer>
      <!-- .art-footer-->
    </div>
    <!-- .site-->

    <!-- Vendor jQuery-->
    <script type="text/javascript" src="{{asset('public/frontend/libs/jquery/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/smoothscroll/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/superfish-menu/js/superfish.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/jquery-countto/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/jquery-appear/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/as-pie-progress/jquery-asPieProgress.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/caroufredsel/helper-plugins/jquery.touchSwipe.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/caroufredsel/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/isotope/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/isotope/fit-columns.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/jplayer/dist/jplayer/jquery.jplayer.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/libs/jquery-cookie/jquery.cookie.js')}}"></script>

    <!-- Theme Script-->
    <script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
  </body>

<!-- Mirrored from demo.yolotheme.com/html/graphsign/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 06:39:25 GMT -->
</html>