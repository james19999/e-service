<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Formation;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function form(Request $request, $formation_id){

         $Formations =Formation::findOrfail($formation_id);

         $order = new Order;
        $transaction_id = rand(10000000,99999999);
        $order->user_id = 1 ;  //user id
        $order->transaction_id = $transaction_id;
        $order->$formation_id   = $Formations->id;
        $order->amount    = $Formations ->amount;
        $order->save();
        return view('paiement.form');
    }
}
