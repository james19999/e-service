<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Formation;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function form($formation_id){

         $Formation =Formation::where('id',$formation_id)->with('videos')->withCount('videos')->first();

        return view('paiement.form' ,compact('Formation'));
    }

    public function Acheter(Request $request){

        $order = new Order();
        $transaction_id = rand(10000000,99999999);
        $order->user_id = 1 ;  //user id
        $order->transaction_id = $transaction_id;
        $order->save();

        return  back();

    }
}
