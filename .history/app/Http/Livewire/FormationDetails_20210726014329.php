<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Formation;
use Illuminate\Support\Facades\DB;

class FormationDetails extends Component
{

       public $formation_id;

         public function mount($formation_id)
       {
           $this->formation_id=$formation_id;

       }

    public function render()

    {

        // $Formation=Formation::select('nom')->where('id',$this->formation_id);
        //  $Formation=Formation::find($this->formation_id);
        $Formation=Formation::where('id',$this->formation_id)->with('videos')->withCount('videos')->first();

        return view('livewire.formation-details',[
            'Formation'=>$Formation,
        ])->extends('layouts.AdminUser');
    }
}
