<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;
use Livewire\WithPagination;
class Recherche extends Component
{
    use WithPagination;
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.recherche',[
            'Formations'=>Formation::where('nom', 'like', '%'.$this->search.'%')->with('videos')->withCount('videos')->paginate(6),
        ]);
    }
}
