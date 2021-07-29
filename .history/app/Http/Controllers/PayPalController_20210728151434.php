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
}
