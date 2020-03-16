<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(isset($title))
    <title>{{$title}}</title>
    @else
    <title>Idea For World</title>
    @endif
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="bootstrap-css" href="{{url('public/theme/frontend')}}/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="awesome-font-css" href="{{url('public/theme/frontend')}}/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="ionicon-font-css" href="{{url('public/theme/frontend')}}/css/ionicon.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-slider-css" href="{{url('public/theme/frontend')}}/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-theme-css" href="{{url('public/theme/frontend')}}/css/slick-theme.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="{{url('public/theme/frontend')}}/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" id="industris-style-css" href="{{url('public/theme/frontend')}}/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="industris-style-css" href="{{url('public/theme/frontend/custom')}}/style.css" type="text/css" media="all">

    <link rel="shortcut icon" href="{{url('public/theme/frontend')}}/favicon.png">
</head>

<body>
<div id="page" class="site">
    <div class="collapse searchbar" id="searchbar">
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
	            					<button class="btn btn-primary" type="button">Go!</button>
	            				</span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div>
    <header id="site-header" class="site-header mobile-header-blue header-style-1">
        <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Info on Topbar -->
                        <ul class="topbar-left">
                            <li><i class="icon ion-md-pin"></i>Forusbeen 50, 4035 Stavanger, Norway</li>
                            <li><i class="icon ion-md-call"></i>+84 0378 260 852</li>
                            <li><i class="icon ion-md-mail"></i>info.industris@gmail.com</li>
                        </ul>
                    </div>
                    <!-- Info on topbar close -->
                    <div class="col-md-4">
                        <ul class="topbar-right pull-right">
                            <li class="toggle_search topbar-search"><a href="#"><i class="icon ion-md-search"></i></a></li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="topbar-login"><a href="{{url('login')}}"> Dashboard </a></li>
                            @else
                            <li class="topbar-login"><a href="{{url('login')}}"> Login </a></li>
                            @endif
                            <li class="topbar-languages"><a href="#"> English <i class="icon ion-ios-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar close -->
        <div class="main-header md-hidden sm-hidden">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-brand">
                            <a href="javascript:void(0)"><img src="{{url('public/Logo_small.png')}}" alt="industris">
                            <br>IDEA FOR WORLD
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="main-navigation">
                            <ul id="primary-menu" class="menu">
                                <li class="menu-item @if(request()->segment('1')=='') current-menu-parent @endif"><a href="{{url('')}}">Home</a></li>
                                <li class="menu-item @if(request()->segment('1')=='services') current-menu-parent @endif"><a href="{{url('services')}}">Services</a></li>
                                <li class="menu-item @if(request()->segment('1')=='about') current-menu-parent @endif"><a href="{{url('about')}}">About</a></li>
                                <li class="menu-item @if(request()->segment('1')=='portfolio') current-menu-parent @endif"><a href="{{url('portfolio')}}">Portfolio</a></li>
                                <li class="menu-item @if(request()->segment('1')=='team') current-menu-parent @endif"><a href="{{url('team')}}">Team</a></li>
                            </ul>
                            <a href="{{url('contact')}}" class="btn btn-primary">Get a quote<i class="icon ion-md-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main header start -->

        <!-- Mobile header start -->
        <div class="mobile-header">
            <div class="container-custom">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="logo-brand-mobile">
                            <a href="javascript:void(0)"><img src="{{url('public/Logo_small.png')}}" alt="industris">
                                <br>IDEA FOR WORLD
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mobile-nav">
                            <ul id="primary-menu-mobile" class="mobile-menu">
                                <li class="menu-item @if(request()->segment('1')=='') current-menu-parent @endif"><a href="{{url('')}}">Home</a></li>
                                <li class="menu-item @if(request()->segment('1')=='services') current-menu-parent @endif"><a href="{{url('services')}}">Services</a></li>
                                <li class="menu-item @if(request()->segment('1')=='about') current-menu-parent @endif"><a href="{{url('about')}}">About</a></li>
                                <li class="menu-item @if(request()->segment('1')=='portfolio') current-menu-parent @endif"><a href="{{url('portfolio')}}">Portfolio</a></li>
                                <li class="menu-item @if(request()->segment('1')=='team') current-menu-parent @endif"><a href="{{url('team')}}">Team</a></li>
                            </ul>
                            <a href="{{url('contact')}}" class="btn btn-primary">Get a quote<i class="icon ion-md-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile header start -->

    @yield('content')

    <footer id="site-footer" class="site-footer bg-footer">
        <div class="main-footer">
            <div class="container-custom">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="widget-footer">
                            <div id="media_image-1" class="widget widget_media_image">
                                <a href="javascript:void(0)"><img src="{{url('public/theme/frontend')}}/images/logo-footer.png" alt=""></a>
                            </div>
                            <div id="custom_html-1" class="widget_text widget widget_custom_html">
                                <div class="textwidget custom-html-widget">
                                    <p>Privacy | Integrity ©2019 Industris Company. <br>All Rights Res</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget-footer">
                            <div id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
                                <div class="textwidget custom-html-widget">
                                    <ul>
                                        <li><a href="javascript:void(0)">Oil & Gas exploited</a></li>
                                        <li><a href="javascript:void(0)">Automotive Manufacturing</a></li>
                                        <li><a href="javascript:void(0)">Transportation & Distribution</a></li>
                                        <li><a href="javascript:void(0)">Manufacture</a></li>
                                        <li><a href="javascript:void(0)">Industrial Construction</a></li>
                                        <li><a href="javascript:void(0)">Green Energy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget-footer">
                            <div id="custom_html-3" class="widget_text widge widget-footer widget_custom_html padding-left">
                                <div class="textwidget custom-html-widget">
                                    <ul>
                                        <li><a href="{{url('services')}}">Services</a></li>
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{url('team')}}">Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget-footer">
                            <div id="mc4wp_form_widget-1" class="widget widget_mc4wp_form_widget">
                                <!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1696" method="post" data-id="1696" data-name="Industris Subscribe">
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" class="form-control" placeholder="Email Address" required="">
                                        <span class="input-group-btn">
	                                        	<button type="submit" class="btn btn-subcribe"><i class="icon ion-md-checkmark"></i></button>
	                                        </span>
                                    </div>
                                    <input type="hidden" name="_mc4wp_timestamp" value="1560227031">
                                    <input type="hidden" name="_mc4wp_form_id" value="1696">
                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                    <div class="mc4wp-response"></div>
                                </form>
                            </div>
                            <!-- / Mailchimp for WordPress Plugin -->

                            <div class="footer-social ot-socials bg-white">
                                follow us:
                                <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-facebook"></i></a>
                                <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-instagram"></i></a>
                                <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-skype"></i></a>
                                <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-twitter"></i></a>
                                <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                </div>
            </div>
        </div>
        <!-- .main-footer -->
        <div class="footer-bottom">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="topbar-left">
                            <li><i class="icon ion-md-pin"></i>Forusbeen 50, 4035 Stavanger, Norway</li>
                            <li><i class="icon ion-md-call"></i>+84 0378 260 852</li>
                            <li><i class="icon ion-md-mail"></i>info.industris@gmail.com</li>
                        </ul>
                        <a id="back-to-top" href="#" class="btn btn-back-to-top pull-right">Back to top<i class="icon ion-ios-arrow-dropup-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .copyright-footer -->
    </footer>
</div>

<script src='{{url('public/theme/frontend')}}/js/jquery.min.js'></script>
<script src='{{url('public/theme/frontend')}}/js/slick.min.js'></script>
<script src='{{url('public/theme/frontend')}}/js/jquery.sticky.js'></script>
<script src='{{url('public/theme/frontend')}}/js/countto.min.js'></script>
<script src='{{url('public/theme/frontend')}}/js/jquery.magnific-popup.min.js'></script>
<script src='{{url('public/theme/frontend')}}/js/jquery.isotope.min.js'></script>
<script src='{{url('public/theme/frontend')}}/js/scripts.js'></script>
</body>
</html>