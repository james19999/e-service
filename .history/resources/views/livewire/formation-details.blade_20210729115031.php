<div>
    {{-- formation details --}}
                <div>
                    @isset($Formation)

                    <h1>{{ $Formation->nom}}  {{  $Formation->videos_count >0 ? " avec :$Formation->videos_count  episodes " :" avec : $Formation->videos_count  episode " }}  </h1>
                    {{-- <h1>{{ $Formation->description}}</h1> --}}
                    {{-- <img   src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img"> --}}
                    <div  class="row magnific-wrapper">
                        @foreach ($Formation->videos as  $vide )
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card card-statistics text-center">
                                        <div class="card-body p-0">
                                             <p>{{ $vide->id }}
                                       <video   width="200px" height="130px" src="{{ url('storage/video/'.$vide->video) }}" controls class="img-fluid" alt="Clients-01">
                                         </p>
                                    </div>
                       </div>
                    </div>
                        @endforeach
                @endisset
                </div>
                </div>
   <hr  style="text-align: center" size="1" >FORMATIONS DISPONIBLES : | <input   wire:model="search" style="padding: 5px; margin-left: 20px ; " type="search" name="" id="" placeholder="RECHERCHER " >
    <hr>
{{-- liste  des formations --}}
    {{-- @php
        $Formations=App\Models\Formation::with('videos')->withCount('videos')->get();
    @endphp --}}



 <div class="row magnific-wrapper">
       @if ($Formations->count()>0 )

       @foreach ($Formations as $format )
       <div class="col-xl-3 col-md-4 col-sm-6">
           <div class="card card-statistics text-center">
               <div class="card-body p-0">
                   <div class="portfolio-item">
                       <img src="{{ url('storage/image/'.$format->image) }}" alt="gallery-img">
                       <div class="portfolio-overlay">

                               @if ($format->statut==1)
                               <h4 class="text-white"><a href="{{ route('form',$format) }}">{{ $format->nom }} |  {{ $format->statut==1 ? " : $format->prix $" : "GRATUIT" }} </a>
                                  @foreach ($Orders as $order )
                                          @if ($order->user_id==$format->id)

                                          @endif
                                  @endforeach
                               @else

                               <h4 class="text-white"><a href="{{ route('formationdetails',$format) }}">{{ $format->nom }} |  {{ $format->statut==1 ? " : $format->prix $" : "GRATUIT" }} </a>
                               @endif

                           </h4>

                           {{-- <h4 class="text-white"><a href="javascript:void(0)">

                        {{ $format->videos_count >0 ? "il y'a $format->videos_count episodes "   : "il y'a $format->videos_count episode " }}  </a></h4> --}}


                       </div>
                   </div>
               </div>
           </div>
       </div>

       @endforeach
       @else
           <p style="font-weight: bold ; color: red ;text-align: center ; margin-left: 40%" > Auccunne Formation Disponible Pour : " {{ $search }} " </p>
       @endif

</div>

</div>
