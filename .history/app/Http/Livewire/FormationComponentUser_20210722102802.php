<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class FormationComponentUser extends Component
{
    public function render()

    {

        return view('livewire.formation-component-user',[
        'Formations' => Formation::with('videos')->get(),
        ])->extends('layouts.AdminUser');
    }
}
