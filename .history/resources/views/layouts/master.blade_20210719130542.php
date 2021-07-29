
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

        <script src="{{ asset('assetss/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
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
                            <img src="{{asset('assetss/images/logo.png')}}" class="logo logo-display" alt="">
                            <img src="{{asset('assetss/images/footer-logo.png')}}" class="logo logo-scrolled" alt="">
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">FORMATION</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                            <li><a href="#download">Download</a></li>
                            <li><a href="#download">Connexion</a></li>
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
                                    <h1 class="text-white">Get the most fun weather app</h1>
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
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features p-top-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="head_title text-center">
                                    <h2>Rejoignez les meilleures formations
                                         en ligne
                                       </h2>
                                    {{-- <h5>Only necessary</h5> --}}
                                </div>
                            </div>


                            {{-- <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-diamond6"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Usability</h3>
                                        <p>Sometimes the simplest things are the hardest to find.
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-layers2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Parallax Effect</h3>
                                        <p>Sometimes the simplest things are the hardest to find.
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-business-32"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Unlimites Colors</h3>
                                        <p>Sometimes the simplest things are the hardest to find.
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                     <div class="row">
                          <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                              <div class="container">
                                  <div class="row">
                                     <div class=" shadow-md col-md-4">
                                            <!--Card 1-->
                                            <div class="rounded overflow-hidden shadow-lg">
                                              <img class="w-full" src="/mountain.jpg" alt="Mountain">
                                              <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2">Mountain</div>
                                                <p class="text-gray-700 text-base">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                                </p>
                                              </div>
                                              <div class="px-6 pt-4 pb-2">
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                              </div>
                                         </div>
                                        </div>
                                  </div>

                              </div>
                          </div>

                     </div>
                    <!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->



            <section>
                <div class="container">
                    <div class="row">
                        <div class="main_drag roomy-50">
                            <div class="col-md-12">
                                <div class="swiper-container">
                                        @php
                                            $Formations=App\Models\Formation::all();
                                        @endphp

                                    <div class="swiper-wrapper">

                                     {{-- <div class="swiper-slide">

                                        <div class="card" style="width: 18rem;">
                                          <img class="card-img-top" src="{{asset('assetss/images/screen01.png')}}" alt="Card image cap">
                                          <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                     </div>
                                     </div> --}}

                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--screen short section-->

            <section id="screen_area" class="screen_area">
                <div class="container">
                    <div class="row">
                        <div class="main_screen">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>Screenshots</h2>
                                    <h5>The brightest images</h5>
                                </div>
                            </div>

                            <!-- Screen01-->
                            <div class="screen01 roomy-50">
                                <div class="col-md-6">
                                    <div class="screen01_img text-center">
                                        <div class="attr_cloudy text-white">Cloudy</div>
                                        <div class="attr_deg2 text-white">15 &deg;</div>
                                        <img src="{{asset('assetss/images/screen01.png')}}" alt="" />
                                        <h1 class="cloudy">Cloudy</h1>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="screen01_content m-top-100">
                                        <div class="screen01_content_img ">
                                            <img src="{{asset('assetss/images/cloud1.png')}}" alt="" />
                                        </div>
                                        <h2 class="m-top-40">When the clouds</h2>
                                        <p class="m-top-20">Variable information on the air humidity, the feeling of the weather,
                                            and the ability to share this with your friends</p>

                                        <ul class="list-inline m-top-50">
                                            <li class="text-center">95%</li>
                                            <li class="text-center">9 &deg; </li>
                                            <li class="text-center">Rainy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--End off Screen01-->

                            <!-- Screen02-->
                            <div class="screen02 roomy-50 m-top-100">
                                <div class="col-md-6 col-md-push-6">
                                    <div class="screen02_img text-center">
                                        <div class="attr_sun2 text-white">Cloudy</div>
                                        <div class="attr_deg3 text-white">25 &deg;</div>
                                        <img src="{{asset('assetss/images/screen02.png')}}" alt="" />
                                        <h1 class="sunny">Sunny</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-pull-6">
                                    <div class="screen02_content m-top-100">
                                        <div class="screen02_content_img ">
                                            <img src="{{asset('assetss/images/sun1.png')}}" alt="" />
                                        </div>
                                        <h2 class="m-top-40">When the clouds</h2>
                                        <p class="m-top-20">Sometimes the simplest things are the hardest to find.
                                            So we created a new line for everyday life. Sometimes the simplest things</p>

                                        <ul class="list-inline m-top-50">
                                            <li class="text-center">95%</li>
                                            <li class="text-center">9 &deg; </li>
                                            <li class="text-center">Rainy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--End off Screen02-->

                            <!-- Screen03-->
                            <div class="screen03 roomy-50 m-top-100">
                                <div class="col-md-6">
                                    <div class="screen03_img text-center">
                                        <div class="attr_rainy2 text-white">Rainy</div>
                                        <div class="attr_deg4 text-white">9 &deg;</div>
                                        <img src="{{asset('assetss/images/screen03.png')}}" alt="" />
                                        <h1 class="rainy">Rainy</h1>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="screen03_content m-top-100">
                                        <div class="screen03_content_img ">
                                            <img src="{{asset('assetss/images/rainy1.png')}}" alt="" />
                                        </div>
                                        <h2 class="m-top-40">When the rain</h2>
                                        <p class="m-top-20">Sometimes the simplest things are the hardest to find.
                                            So we created a new line for everyday life.
                                            Sometimes the simplest things</p>

                                        <ul class="list-inline m-top-50">
                                            <li class="text-center">95%</li>
                                            <li class="text-center">9 &deg; </li>
                                            <li class="text-center">Rainy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--End off Screen02-->


                        </div>
                    </div><!--End off row-->
                </div><!--End off container-->
            </section><!--End off Screen01 Area Section -->



            <!--People Section-->
            <section id="reviews" class="reviews m-top-100">
                <div class="container">
                    <div class="row">
                        <div class="main_reviews">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>What reviews are saying</h2>
                                    <h5>Reviews</h5>
                                </div>
                            </div>

                            <div class="reviews_content">
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>What art offers is space - a certain breathing room for the spirit. </h3>
                                        <h5>John Updike</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>We do not see nature with our eyes,
                                            but with our understandings and our hearts.</h3>
                                        <h5>William Hazlitt</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>The only courage that matters is the kind
                                            that gets you from one moment to the next.</h3>
                                        <h5>Mignon McLaughlin</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>No man has a good enough memory to be a successful liar. </h3>
                                        <h5>Abraham Lincoln</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                            </div>
                        </div><!-- End off Main People -->
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off People Section-->


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



        <script src="assetss/js/plugins.js"></script>
        <script src="assetss/js/main.js"></script>

    </body>
</html>
