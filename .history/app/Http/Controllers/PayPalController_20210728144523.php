<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Formation;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function form($formation_id){

         $Formation =Formation::findOrfail($formation_id);

        return view('paiement.form' ,compact('Formation'));
    }
}
