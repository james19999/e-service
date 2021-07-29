<div>
    {{-- formation details --}}
     <div>
         @isset($Formation)

         <h1>{{ $Formation->nom}}</h1>
         <h1>{{ $Formation->description}}</h1>
         <img   src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
         @foreach ($Formation->videos as  $vide )

         <p>{{ $vide->id }}

            <video  style="margin-left: 70px" width="50px" height="50px" src="{{ url('storage/video/'.$vide->video) }}" controls class="img-fluid" alt="Clients-01">
            </p>

            @endforeach
      @endisset
     </div>

{{-- liste  des formations --}}
    @php
        $Formations=App\Models\Formation::with('videos')->withCount('videos')->get();
    @endphp

 <div class="row magnific-wrapper">

    @foreach ($Formations as $format )
    <div class="col-xl-3 col-md-4 col-sm-6">
        <div class="card card-statistics text-center">
            <div class="card-body p-0">
                <div class="portfolio-item">
                    <img src="{{ url('storage/image/'.$format->image) }}" alt="gallery-img">
                    <div class="portfolio-overlay">

                        <h4 class="text-white"><a href="{{ route('formationdetails',$format) }}">{{ $format->nom }} -  {{ $format->statut==1 ? "PAYANT" : "GRATUIT" }} </a>

                        </h4>

                        <h4 class="text-white"><a href="javascript:void(0)">

                            {{ $format->videos_count >0 ? "il y'a episodes $format->videos_count"   : "il y'a episode $format->videos_count" }}  </a></h4>


                    </div>
                    <a class="popup portfolio-img view" href="assets/img/widget/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>

</div>
