<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class Recherche extends Component
{
    public function render()
    {
        return view('livewire.recherche',[
            'Formations'=>Formation::with('videos')->withCount('videos')->get(),
        ]);
    }
}
