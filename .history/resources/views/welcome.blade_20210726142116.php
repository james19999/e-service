@extends('layouts.master')

@section('content')
<style>
    .btn {
display: inline-block;
margin-bottom: 0;
font-weight: 400;
text-align: center;
vertical-align: middle;
touch-action: manipulation;
cursor: pointer;
border: 1px solid transparent;
padding: 6px 12px;
padding-top: 6px;
padding-right: 12px;
padding-bottom: 6px;
padding-left: 12px;
font-size: 14px;
line-height: 1.6;
border-radius: 4px;

}
.form{
    margin-top: 30px
}


</style>
<section id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="main_features p-top-100">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="head_title text-center">
                        <h2>Rejoignez les meilleures formations
                             en ligne
                           </h2>
                           <div  class="form" >

                               <h5>RECHERCHER VOTRE FORAMTION</h5>

                <x-jet-input   style="border: solid #4466c9" id="password" class="block mt-1 w-full" type="search" name="search"   />

                           </div>
                        </div>
                </div>



            </div>
        </div>
        @php
        $Formations=App\Models\Formation::with('videos')->withCount('videos')->get();
       @endphp


         <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                  <div class="container">
                      <div class="row">

                          <div class="row" id="courses">

                              @foreach ($Formations as $Formation )
                            <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                                <a href="{{ route('formationdetails',$Formation) }}"><img class=" img-responsive" src="{{ url('storage/image/'.$Formation->image) }}" alt="Programmer avec Python" width="120" height="120"></a>
                                                <div class="caption">
                                                    <h2 style="font-weight: blod; color:#4466c9;" ><a href="">Formation en : {{ $Formation->nom }}</a></h2>
                                                    <p   style="color: red" class="text-muted">
                                                        <i class="fa fa-tasks"></i> {{ $Formation->videos_count }} Vidéos &middot;  {{ $Formation->statut==1 ? "$Formation->prix $ " :"GRATUIT" }}
                                                       </p>
                                                    <p>  {{ $Formation->description }}   &#039;.</p>

                                                    <p><a href="{{ route('formationdetails',$Formation) }}"  class="btn btn-primary btn-block" role="button">  <i class="fa fa-play"></i> Démarrer la formation</a></p>
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
