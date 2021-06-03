<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Formation;
use Livewire\WithPagination;

class FormationComponent extends Component
{  

    use WithPagination;
    
    public function delete($id)
    {
        $Formations = Formation::find($id);
        $Formations->delete();
         session()->flash('messages', 'Formation supprimé avec succès.');
        return back();
    }

    public function render()
    {
        return view('livewire.formation-component',[
            'Formations' => Formation::paginate(5),
        ])->extends('layouts.admin');
    }
}