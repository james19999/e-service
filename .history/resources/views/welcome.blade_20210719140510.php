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

                           <div class="col-md-4">
                                  <!--Card 1-->
                                  <div class="rounded overflow-hidden shadow-md bg-gray-500 ">
                                    <img class="w-full "  src="{{ url('storage/image/'.$Formation->image) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                      <p class="text-gray-200 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>

                                    </div>
                                    <div class="px-6 pt-1 pb-2">
                                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a href="">En Savoir Plus</a> </span>
                                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a href="">Acheter</a> </span>

                                    </div>
                               </div>
                              </div>
                           @endforeach

                      </div>

                  </div>
              </div>

         </div>
        <!-- End off row -->
    </div><!-- End off container -->
</section>

@endsection
