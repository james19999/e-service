@extends('layouts.master')
   @section('image')

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
