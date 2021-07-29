
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

            <div class="container" id="app">
                <div class="row" id="courses">
                        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
        <a href="https://parlonscode.com/courses/devenez-swag-avec-swing"><img class="img-responsive" src="https://parlonscode.com/icons/courses/java-swing.svg" alt="Devenez Swag avec Swing" width="120" height="120"></a>
        <div class="caption">
            <h3><a href="https://parlonscode.com/courses/devenez-swag-avec-swing">Devenez Swag avec Swing</a></h3>
            <p class="text-muted">
                <i class="fa fa-tasks"></i> 100 Vidéos &middot; <i class="fa fa-book"></i> 65 Challenges
                        </p>
            <p>Écrire des programmes Java qui vont s’exécuter en console, c’est bien. Mais très souvent en tant que développeur (et surtout pour les utilisateurs finaux), on en veut un peu plus! Dans cette formation, je vous invite à découvrir comment créer des applications Java disposant d’interfaces graphiques fonctionnelles et professionnelles en utilisant Java Swing.</p>
            <p><a href="https://parlonscode.com/courses/devenez-swag-avec-swing" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
        </div>
    </div>

            </div>
                                <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
        <a href="https://parlonscode.com/courses/symfony-5-en-une-semaine"><img class="img-responsive" src="https://parlonscode.com/icons/courses/symfony-framework.svg" alt="Symfony 5 en une semaine!" width="120" height="120"></a>
        <div class="caption">
            <h3><a href="https://parlonscode.com/courses/symfony-5-en-une-semaine">Symfony 5 en une semaine!</a></h3>
            <p class="text-muted">
                <i class="fa fa-tasks"></i> 37 Vidéos &middot; <i class="fa fa-book"></i> 1 Challenge
                        </p>
            <p>Symfony a la mauvaise réputation d&#039;être un framework difficile d&#039;apprentissage mais il s&#039;agit en effet d&#039;une idée désuète. Symfony est en réalité un framework simple à appréhender, ultra performant et regroupant un ensemble de composants basés sur d&#039;excellentes pratiques de développement. Donnez-moi une semaine et je vous le prouverai :). Ready?</p>
            <p><a href="https://parlonscode.com/courses/symfony-5-en-une-semaine" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
        </div>
    </div>

            </div>
                                <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
        <a href="https://parlonscode.com/courses/devenez-un-pro-symfony-5"><img class="img-responsive" src="https://parlonscode.com/icons/courses/symfony-framework.svg" alt="Devenez un pro Symfony 5" width="120" height="120"></a>
        <div class="caption">
            <h3><a href="https://parlonscode.com/courses/devenez-un-pro-symfony-5">Devenez un pro Symfony 5</a></h3>
            <p class="text-muted">
                <i class="fa fa-tasks"></i> 126 Vidéos &middot; <i class="fa fa-book"></i> 46 Challenges
                        </p>
            <p>Symfony a la mauvaise réputation d&#039;être un framework difficile d&#039;apprentissage mais il s&#039;agit en effet d&#039;une idée désuète. Symfony est en réalité un framework simple à appréhender, ultra performant et regroupant un ensemble de composants basés sur d&#039;excellentes pratiques de développement. Au travers de cette formation, je ferai de vous un &quot;pro&quot; Symfony 5. Ready?</p>
            <p><a href="https://parlonscode.com/courses/devenez-un-pro-symfony-5" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
        </div>
    </div>

            </div>
                </div>
    <div class="row" id="courses">
                        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
        <a href="https://parlonscode.com/courses/programmer-avec-python"><img class="img-responsive" src="https://parlonscode.com/icons/courses/python.svg" alt="Programmer avec Python" width="120" height="120"></a>
        <div class="caption">
            <h3><a href="https://parlonscode.com/courses/programmer-avec-python">Programmer avec Python</a></h3>
            <p class="text-muted">
                <i class="fa fa-tasks"></i> 49 Vidéos &middot; <i class="fa fa-book"></i> 4 Challenges
                        </p>
            <p>Python est un langage très simple d’apprentissage et vous pouvez l’utiliser pour créer par exemple des applications Web, des jeux vidéos, des applications mobiles, voir même un moteur de recherche! Dans cette formation, je ferai de vous un excellent développeur Python. Nous découvrirons ce fabuleux langage en nous amusant à créer une série d&#039;applications ludiques.</p>
            <p><a href="https://parlonscode.com/courses/programmer-avec-python" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
        </div>
    </div>

            </div>
                                <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
        <a href="https://parlonscode.com/courses/devenez-un-pro-symfony-3-et-4"><img class="img-responsive" src="https://parlonscode.com/icons/courses/symfony-framework.svg" alt="Devenez un pro Symfony 3/4" width="120" height="120"></a>
        <div class="caption">
            <h3><a href="https://parlonscode.com/courses/devenez-un-pro-symfony-3-et-4">Devenez un pro Symfony 3/4</a></h3>
            <p class="text-muted">
                <i class="fa fa-tasks"></i> 161 Vidéos &middot; <i class="fa fa-book"></i> 37 Challenges
                        </p>
            <p>Symfony a une mauvaise réputation selon laquelle il serait difficile d&#039;apprentissage mais croyez-moi il s&#039;agit en effet d&#039;une idée désuète. Symfony est en réalité un framework simple à appréhender, ultra performant et regroupant un ensemble de composants basés sur d&#039;excellentes pratiques de développement. Je ferai de vous un &quot;pro&quot; Symfony 3 et 4. Ready?</p>
            <p><a href="https://parlonscode.com/courses/devenez-un-pro-symfony-3-et-4" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
        </div>
    </div>

            </div>
                </div>
        <br>
        <div class="testimonials">
        <h2 class="text-center">Voici ce que disent vos confrères...</h2>
        <br>
        <div class="row text-center">
            <div class="col-lg-4">
                <img class="img-circle" src="https://parlonscode.com/images/avatars/avatar1.png" alt="Avatar Acrimonia" width="140" height="140">
                <h2>Acrimonia</h2>
                <p>
                    Franchement merci pour vos formations! En plus de très bien expliquer les choses, vous êtes marrant avec toutes vos expressions comme <i>Check-et-bang</i>, <i>Mushibishi</i> :). J'ai bien rigolé. Merci pour tout.
                </p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="https://parlonscode.com/images/avatars/avatar2.jpg" alt="Avatar Antonella De Chiara" width="140" height="140">
                <h2>Antonella De Chiara</h2>
                <p>
                    Je vous remercie vraiment pour tout. En peu de temps, j’ai compris plus de choses avec vos vidéos qu’avec n’importe quel livre/cours.
                </p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="https://parlonscode.com/images/avatars/avatar3.png" alt="Avatar Yahya Gueddouri" width="140" height="140">
                <h2>Yahya Gueddouri</h2>
                <p>
                    Vous êtes le meilleur! J'avais failli abandonner la programmation et grâce à un ami qui m'a fait connaitre votre site, je m'en sors maintenant. Merci à vous. Que Dieu vous bénisse.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <a href="https://parlonscode.com/testimonials" class="btn btn-primary btn-outline btn-lg">Pas encore sûr? Découvrez plus de témoignages &raquo;</a>
            </div>
        </div>
    </div>
        </div>


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
