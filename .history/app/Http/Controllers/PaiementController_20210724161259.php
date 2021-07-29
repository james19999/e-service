<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function paiement(){

     $Formation=Formation::where('statut',1);
       if ($Formation->statut==1) {
           return redirect()->route('login') ;
       } else {
           return  redirect()->route('formationcreate') ;
       }

    }
}
