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
                <a href="#formation"><i class="fa fa-chevron-down"></i></a>
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
.form{
    margin-top: 30px
}


</style>
 @livewire('recherche')


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
