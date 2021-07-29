<div>
     <div class="row magnific-wrapper">

                    @forelse ($videos as $video )
                             @foreach ($video->formation as $formations )

                             <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card card-statistics text-center">
                                    <div class="card-body p-0">
                                        <div class="portfolio-item">
                                            <video src="{{ url('storage/video/'.$video->video) }}" controls class="img-fluid" alt="Clients-01">
                                                {{-- <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img"> --}}
                                                <div class="portfolio-overlay">
                                                     {{-- <h4 class="text-white"><a href="{{ route('formationdetails',$Formation) }}">{{ $Formation->nom }}</a></h4> --}}
                                                    <h4 class="text-white"><a href="javascript:void(0)">{{ $formations->nom }}</a></h4>
                                                </div>
                                            <a class="popup portfolio-img view" href="assets/img/widget/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @empty
                            <p style="font-size: 200%; text-align: center" ><strong>Pas de formations disponible</strong> </p>

                    @endforelse

                        </div>
</div>
