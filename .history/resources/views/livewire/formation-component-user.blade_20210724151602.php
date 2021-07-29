<div>
     <div class="row magnific-wrapper">

                    @foreach ($Formations as $Formation )


                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card card-statistics text-center">
                                    <div class="card-body p-0">
                                        <div class="portfolio-item">
                                            <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
                                            <div class="portfolio-overlay">
                                                <h4 class="text-white"><a href="{{ route('formationdetails',$Formation) }}">{{ $Formation->nom }}</a></h4>

                                                {{-- @if ($Formation->videos_count >0)
                                                <h4 class="text-white"><a href="javascript:void(0)">

                                                    il y'a  {{ $Formation->videos_count}} episodes  </a></h4>
                                                      @else
                                                      <h4 class="text-white"><a href="javascript:void(0)">
                                                        il y'a  {{ $Formation->videos_count}} episode </a></h4>
                                                      @endif --}}
                                                      <h4 class="text-white"><a href="javascript:void(0)">

                                                          {{ $Formation->videos_count >0 ? "il y'a episodes $Formation->videos_count"   : "il y'a episode $Formation->videos_count" }}  </a></h4>
                                                {{-- <h4 class="text-white"><a href="javascript:void(0)">{{ $vide->video }}</a></h4> --}}
                                                @foreach ($Formation->videos as $vide )

                                                <video  width="50px" height="50px" src="{{ url('storage/video/'.$vide->video) }}" controls class="img-fluid" alt="Clients-01">
                                                @endforeach
                                            </div>
                                            <a class="popup portfolio-img view" href="assets/img/widget/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                     @endforeach

                        </div>
</div>
