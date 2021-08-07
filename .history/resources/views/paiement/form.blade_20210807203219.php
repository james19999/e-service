@extends('layouts.master')


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


                                                            <form id="form" action="{{ route('Acheter') }}"  method="POST" >
                                                                @csrf

                                                                <input type="hidden" name="amount"  value="{{ $Formation->prix }}" >
                                                                <input type="hidden" name="formation_id" value="{{ $Formation->id }}">
                                                                {{-- <p>
                                                                    <input  class="btn btn-primary btn-block" role="button" type="submit" value="Acheter la formation">
                                                                    </p> --}}
                                                            </form>
                                                            <div id="paypal-button-container"></div>
                                                            <div id="prix" style="display: none;">{{ $Formation->prix }}</div>
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

        <script src="https://www.paypal.com/sdk/js?client-id=&currency=USD" data-sdk-integration-source="button-factory"></script>

        <script>
            let form = document.getElementById('form');
        function initPayPalButton() {
            let formation = document.getElementById('prix')
          paypal.Buttons({
            style: {
              shape: 'rect',
              color: 'gold',
              layout: 'vertical',
              label: 'pay',

            },
            createOrder: function(data, actions) {
                let prix = parseFloat(formation.innerText)
              return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"USD","value":prix}}]
              });
            },
            onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
                form.submit();
              });
            },
            onError: function(err) {
              console.log(err);
            }
          }).render('#paypal-button-container');
        }
        initPayPalButton();
      </script>

        <!-- End off row -->
    </div><!-- End off container -->
</section>
@endsection
