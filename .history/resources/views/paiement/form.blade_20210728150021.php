@extends('layouts.master')

@section('content')
<section id="fr" class="fo">
    <div class="container">
        <div class="row">
            <div class="main_features p-top-100">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="head_title text-center">
                          <div class="panel panel-default" >
                                {{-- <div class="panel-heading">
                                    achat
                                </div> --}}

                                  <div class="panel-body">
                                        <div class="row" >

                                            <div class="col-md-8">

                                                <div class="shadow-md" >
                                                    <p style="margin-bottom: 12px" >{{ $Formation->nom }}</p>
                                                    <hr>
                                                     <form action="">

                                                         <input type="text" class="form-control">
                                                     </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="shadow-md" >
                                                     <div class="thumbnail">
                                                     <img class=" img-responsive" src="{{ url('storage/image/'.$Formation->image) }}" alt="image" width="120" height="120">

                                                     </div>
                                                    <p>{{ $Formation->description }}</p>
                                                </div>
                                            </div>
                                        </div>

                                  </div>
                          </div>

                        </div>
                </div>



            </div>
        </div>



         {{-- <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                  <div class="container">
                      <div class="row">

                          <div class="row" id="courses">



                             <div class="col-sm-6 col-md-4">
                                     <div class="thumbnail">
                                                 <a href=""><img class=" img-responsive" src="" alt="Programmer avec Python" width="120" height="120"></a>
                                                 <div class="caption">
                                                     <h2 style="font-weight: blod; color:#4466c9;" ><a href="">Formation en :</a></h2>
                                                     <p   style="color: red" class="text-muted">
                                                         <i class="fa fa-tasks"></i> &middot;
                                                        </p>

                                                 </div>
                                     </div>

                             </div>

                            </div>

                  </div>
              </div>

         </div> --}}
        <!-- End off row -->
    </div><!-- End off container -->
</section>
@endsection
