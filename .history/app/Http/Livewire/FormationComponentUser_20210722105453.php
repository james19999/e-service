<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;
use App\Models\Video;

class FormationComponentUser extends Component
{
    public function render()

    {

        return view('livewire.formation-component-user',[
        'videos' =>Video::with('formation')->get(),
        ])->extends('layouts.AdminUser');
    }
}
