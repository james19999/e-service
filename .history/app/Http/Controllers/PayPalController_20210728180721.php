<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayPalController extends Controller
{
    public function form($formation_id){

         $Formation =Formation::where('id',$formation_id)->with('videos')->withCount('videos')->first();

        return view('paiement.form' ,compact('Formation'));
    }

    public function Acheter(Request $request){

         $this->validate($request,['amount'=>'required','formation_id'=>'required' ]);

         $transaction_id = rand(10000000,99999999);
        $user_id = Auth::user()->id ;  //user id
        // $order->transaction_id = $transaction_id;
        // $order->save();
        Order::create(['user_id'=>$user_id,'amount'=>$request->amount,'formation_id'=>$request->formation_id,'transaction_id'=>$transaction_id]);

        return  back();

    }
}
