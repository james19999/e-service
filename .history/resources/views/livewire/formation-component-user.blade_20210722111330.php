<div>
     <div class="row magnific-wrapper">

                    @foreach ($Formations as $Formation )
                            @foreach ($Formation->videos() as $videos )

                            @endforeach
                             <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card card-statistics text-center">
                                    <div class="card-body p-0">
                                        <div class="portfolio-item">
                                            <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
                                            <div class="portfolio-overlay">
                                                <h4 class="text-white"><a href="{{ route('formationdetails',$Formation) }}">{{ $Formation->nom }}</a></h4>
                                                <h4 class="text-white"><a href="javascript:void(0)">{{ $Formation->description }}</a></h4>
                                            </div>
                                            <a class="popup portfolio-img view" href="assets/img/widget/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
</div>
