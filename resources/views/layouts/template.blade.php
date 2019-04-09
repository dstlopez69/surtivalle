<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <title>{{trans('template.title')}}</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css" /><!-- REVOLUTION LAYERS STYLES -->
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="../public/css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet" />
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two-->
        <header class="main-header header-style-two">

            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href=" {{url('/')}} "><img src="images/imagen-surti.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">

                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="text"><a href="{{url('/')}}">{{trans('template.home')}}</a>
                                        </li>
                                        <li class="text"><a href=" {{url('/we')}} ">{{trans('template.we')}}</a>
                                        </li>
                                        <li class="text"><a href="#">Services </a>
                                        </li>
                                        <li class="text"><a href="#">Blog </a>
                                        </li>
                                        <li class="text"><a href="#">Shop </a>
                                        </li>
                                        <li><a href="{{url('/contact')}}"> {{trans('template.contact')}} </a></li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Main Menu End-->
                            <div class="options-box">

                                <!--Quote Btn-->
                                <div class="quote-btn">
                                    <a href=" {{url('/login')}} "
                                        class="theme-btn btn-style-one">{{trans('template.login')}}</a>
                                </div>
                            </div>
                        </div>
                        <!--Nav Outer End-->
                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="sticky-inner-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href=" {{url('/')}} " class="img-responsive"><img src="images/imagen-surti.png" alt=""
                                    title="" /></a>
                        </div>

                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="text"><a href="{{url('/')}}">{{trans('template.home')}}</a>
                                        </li>
                                        <li class="dropdown"><a href="{{url('/we')}}">{{trans('template.we')}}</a>
                                        </li>
                                        <li class="dropdown"><a href="#">Services </a>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog </a>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop </a>
                                        </li>
                                        <li><a href="{{url('/contact')}}"> {{trans('template.contact')}} </a></li>
                                        <li><a href="{{url('/login')}}"> {{trans('template.login')}} </a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->
        @yield('content')
        <!-- Main Footer / Style Two-->
        <footer class="main-footer style-two" style="background-image: url(images/background/4.jpg);">
            <div class="auto-container">

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <!--Logo Widget-->
                            <div class="footer-widget logo-widget">
                                <br>
                                <h2>{{trans('template.comunicate')}}</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-map-marker"></span>{{trans('template.address')}}</li>
                                    <li><span class="icon fa fa-phone"></span> {{trans('template.phone')}} </li>
                                    <li><span class="icon fa fa-envelope"></span> {{trans('template.email')}} </li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <!--Hours Widget-->
                            <div class="footer-widget hours-widget">
                                <h2>Working Hours </h2>
                                <div class="widget-content">
                                    <div class="text">We work all days _ week. <br /> Please Contactus for ___ inquiry
                                    </div>
                                    <ul>
                                        <li class="clearfix">Monday to Friday <span>08:00 to 16:00 </span></li>
                                        <li class="clearfix">Saturday <span>10:00 to 14:00 </span></li>
                                        <li class="clearfix">Sunday <span>09:00 to 12:00 </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div style="text-align:center" class="copyright">{{trans('template.copyright')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
    <script src="js/jquery.js"></script>
    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>

    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

</body>

</html>