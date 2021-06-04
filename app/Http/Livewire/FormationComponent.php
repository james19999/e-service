<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Formation;
use Livewire\WithPagination;

class FormationComponent extends Component
{  
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    
            public function delete($id)
                {
                   $Formations = Formation::find($id); //selectionner l'id de la formation
                   $Formations->delete();            //suppression
                   session()->flash('messages', 'Formation supprimé avec succès.');
                   return back();
                }


            public function render()
               {
                   return view('livewire.formation-component',[
                  'Formations' => Formation::where('nom', 'like', '%'.$this->search.'%')->paginate(5), //recherche & pagination
                  ])->extends('layouts.admin');
               }
               
}