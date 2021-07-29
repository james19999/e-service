@extends('layouts.master')
  @section('image')
  <section id="home" class="home">
    <div class="container">
        <div class="row">
            <div class="main_home">
                <div class="col-md-6">
                    <div class="home_text">
                        <h1 class="text-white">BIENVENUE SUR DAROLLO TRAGING SCHOOL</h1>
                    </div>

                    <div class="home_btns m-top-40">
                        <a href="" class="btn btn-danger m-top-20">Download</a>
                        <a href="" class="btn btn-primary m-top-20">Features</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="phone_one phone_attr1 text-center sm-m-top-50">
                        <div class="attr_deg">9&deg;</div>
                        <div class="attr_rio text-uppercase">Rio</div>
                        <div class="attr_sun text-uppercase text-white">Sunny</div>
                        <div class="attr_lon text-uppercase text-white">London</div>
                        <img src="{{asset('assetss/images/phone01.png')}}" alt="" />
                    </div>
                </div>

            </div>
            <div class="scrooldown">
                <a href="#features"><i class="fa fa-chevron-down"></i></a>
            </div>

        </div><!--End off row-->
    </div><!--End off container -->
</section>
  @endsection

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
 </style>


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

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="shadow-md" >
                                                    <div class="thumbnail">
                                                        <img class=" img-responsive" src="{{ url('storage/image/'.$Formation->image) }}" alt="image" width="120" height="120">
                                                        <div class="caption">
                                                            <h2 style="font-weight: blod; color:#4466c9; font-size: 20px" ><a href="">Formation en : {{ $Formation->nom }}</a></h2>
                                                            <p   style="color: red" class="text-muted">
                                                                <i class="fa fa-tasks"></i> {{ $Formation->videos_count }} Vidéos &middot;  {{ $Formation->statut==1 ? "$Formation->prix $ " :"GRATUIT" }}
                                                               </p>
                                                            <p>  {{ $Formation->description }}   &#039;.</p>


                                                            <form action="{{ route('Acheter') }}"  method="POST" >
                                                                @csrf

                                                                <input type="hidden" name="amount"  value="{{ $Formation->prix }}" >
                                                                <input type="hidden" name="formation_id" value="{{ $Formation->id }}">
                                                                <p>
                                                                    <input  class="btn btn-primary btn-block" role="button" type="submit" value="Acheter la formation">
                                                                    </p>
                                                            </form>

                                                        </div>
                                            </div>
                                                </div>
                                            </div>
                                        </div>

                                  </div>
                          </div>

                        </div>
                </div>



            </div>
        </div>




        <!-- End off row -->
    </div><!-- End off container -->
</section>
@endsection
