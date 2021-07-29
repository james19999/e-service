@extends('layouts.master')

@section('content')

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
        @php
        $Formations=App\Models\Formation::all();
       @endphp


         <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                  <div class="container">
                      <div class="row">
                           @foreach ($Formations as $Formation )

                           <div class="row" id="courses">
                            <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
            <a href=""><img class="img-responsive" src="{{ url('storage/image/'.$Formation->image) }}" alt="Programmer avec Python" width="120" height="120"></a>
            <div class="caption">
                <h3><a href="">Formation en {{ $Formation->nom }}</a></h3>
                <p class="text-muted">
                    <i class="fa fa-tasks"></i> 49 Vidéos &middot; <i class="fa fa-book"></i> 4 Challenges
                            </p>
                <p>Python est un langage très simple d’apprentissage et vous pouvez l’utiliser pour créer par exemple des applications Web, des jeux vidéos, des applications mobiles, voir même un moteur de recherche! Dans cette formation, je ferai de vous un excellent développeur Python. Nous découvrirons ce fabuleux langage en nous amusant à créer une série d&#039;applications ludiques.</p>
                <p><a href="" class="btn btn-primary btn-block" role="button"><i class="fa fa-play"></i> Démarrer la formation</a></p>
            </div>
        </div>

                </div>
                           {{-- <div class="col-md-4">
                                  <!--Card 1-->
                                  <div class="rounded overflow-hidden shadow-md bg-gray-500 ">
                                    <img class="w-full "  src="{{ url('storage/image/'.$Formation->image) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                      <p class="text-gray-200 text-base">
                                        {{ $Formation->description }}
                                    </p>

                                    </div>
                                    <div class="px-6 pt-1 pb-2">
                                        @if ($Formation->statut==1)
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a href="">En Savoir Plus</a> </span>

                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a href="">Acheter</a> </span>
                                        @else
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a href="{{ route('formationdetails',$Formation) }}">GRATUIT | VOIR </a> </span>

                                        @endif

                                    </div>
                               </div>
                              </div> --}}
                           @endforeach

                      </div>

                  </div>
              </div>

         </div>
        <!-- End off row -->
    </div><!-- End off container -->
</section>

@endsection
