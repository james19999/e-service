<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class Recherche extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.recherche',[
            'Formations'=>Formation::where('nom', 'like', '%'.$this->search.'%')->with('videos')->withCount('videos')->paginate(9),
        ]);
    }
}
