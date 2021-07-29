
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
                        <a class="navbar-brand" href="#brand">
                            <img   width="70px" height="70px" src="{{asset('assetss/images/logo.png')}}" class="logo logo-display" alt="">
                            <img  style="margin-bottom: 30px" width="80px" height="80px" src="{{asset('assetss/images/footer-logo.png')}}" class="logo logo-scrolled" alt="">
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="#home">ACCUEIL</a></li>
                            <li><a href="#features">FORMATION</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                            <li><a href="#recherche">RECHERCHER</a></li>
                            <li><a href="#download">CONNEXION</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

            <!--Home Sections-->

            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">BIENVENUE SUR DAROLLO TRAGING SCHOOL</h1>
                                </div>

                                <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-danger m-top-20">Download</a>
                                    <a href="" class="btn btn-primary m-top-20">Features</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-50">
                                    <div class="attr_deg">9&deg;</div>
                                    <div class="attr_rio text-uppercase">Rio</div>
                                    <div class="attr_sun text-uppercase text-white">Sunny</div>
                                    <div class="attr_lon text-uppercase text-white">London</div>
                                    <img src="{{asset('assetss/images/phone01.png')}}" alt="" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#features"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->

            <!-- End off Featured Section-->



            {{-- <section>
                <div class="container">
                    <div class="row">
                        <div class="main_drag roomy-50">
                            <div class="col-md-12">
                                <div class="swiper-container">

                                    <div class="swiper-wrapper">

                                      <div class="swiper-slide">

                                        <div class="card" style="width: 18rem;">
                                          <img class="card-img-top" src="{{asset('assetss/images/screen01.png')}}" alt="Card image cap">
                                          <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                     </div>
                                     </div>

                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            @yield('content')


            <!--screen short section-->




            <!--App Download Section-->
            <section id="download" class="download m-top-100">
                <div class="download_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_download ">
                            <div class="col-md-6">
                                <div class="download_item roomy-100">
                                  <x-guest-layout>

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

</x-guest-layout>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="download_item m-top-70">
                                    <img class="app_right" src="{{asset('assetss/images/appdownload1.png')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->


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
