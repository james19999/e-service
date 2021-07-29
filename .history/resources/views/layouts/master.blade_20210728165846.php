
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Weather App Landing page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('assetss/css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assetss/css/bootsnav.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->
        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('assetss/css/responsive.css') }}" />
       @livewireStyles


    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed white no-background">
                <div class="container">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->


                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img   width="70px" height="70px" src="{{asset('assetss/images/logo.png')}}" class="logo logo-display" alt="">
                            <img  style="margin-bottom: 30px" width="80px" height="80px" src="{{asset('assetss/images/footer-logo.png')}}" class="logo logo-scrolled" alt="">
                        </a>

                    </div>

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li  ><a href="#home">ACCUEIL</a></li>
                            <li><a href="#formation">FORMATION</a></li>
                            {{-- <li><a href="#reviews">Reviews</a></li> --}}
                            <li><a href="#recherche">RECHERCHER</a></li>
                            <li><a href="{{ route('login') }}">CONNEXION</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

            <!--Home Sections-->
               @yield('image')
             <!--End off Home Sections-->




            @yield('content')






            <footer id="footer" class="footer bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default bootsnav footer-menu no-background">
                                <div class="container">

                                    <!-- Start Atribute Navigation -->
                                    <div class="attr-nav">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- End Atribute Navigation -->


                                    <!-- Start Header Navigation -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-footer">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <a class="navbar-brand" href="#brand"><img src="{{asset('assetss/images/footer-logo.png')}}" class="logo" alt=""></a>
                                    </div>
                                    <!-- End Header Navigation -->

                                    <!-- navbar menu -->
                                    <div class="collapse navbar-collapse" id="navbar-footer">
                                        <ul class="nav navbar-nav navbar-center">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#features">Features</a></li>
                                            <li><a href="#reviews">Reviews</a></li>
                                            <li><a href="#download">Download</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div>
                            </nav>
                        </div>
                        <div class="divider"></div>
                        <div class="col-md-12">
                            <div class="main_footer text-center p-top-40 p-bottom-30">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with
                                    <i class="fa fa-heart"></i>
                                    by
                                    <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a>
                                    2016. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assetss/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assetss/js/vendor/bootstrap.min.js"></script>

        <script src="assetss/js/jquery.magnific-popup.js"></script>
        <script src="assetss/js/jquery.easing.1.3.js"></script>
        <script src="assetss/js/swiper.min.js"></script>
        <script src="assetss/js/jquery.collapse.js"></script>
        <script src="assetss/js/bootsnav.js"></script>
        <script src="{{ asset('assetss/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>



        <script src="assetss/js/plugins.js"></script>
        <script src="assetss/js/main.js"></script>
      @livewireScripts


    </body>
</html>
