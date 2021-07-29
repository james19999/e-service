<div>
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="main_features p-top-100">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="head_title text-center">
                            <h2 style="color: #4466c9"  >Rejoignez les meilleures formations
                                 en ligne
                               </h2>
                               <div  class="form" >

                                   <h5 id="recherche" style="color: #4466c9" >RECHERCHER VOTRE FORMATION</h5>

                    <x-jet-input  style="margin-top: 16px"  wire:model="search"   class="block mt-1 w-full" type="search" name="search"   />
                       <input type="submit" value="">
                               </div>
                            </div>
                    </div>



                </div>
            </div>
            {{-- @php
            $Formations=App\Models\Formation::with('videos')->withCount('videos')->get();
           @endphp --}}


             <div class="row">
                  <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                      <div class="container">
                          <div class="row">

                              <div class="row" id="courses">
                                   @if ($Formations->count()>0 )

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
                                   @else
                                     <p style="text-align: center;text-transform: uppercase; color: red; font-weight: bold;font-size: 25px" >pas de formation disponible pour "{{ $search }}" </p>
                                   @endif
                                </div>

                      </div>
                  </div>

             </div>
            <!-- End off row -->
        </div><!-- End off container -->
    </section>
</div>
