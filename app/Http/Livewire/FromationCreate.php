<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class FromationCreate extends Component
{


    public $nom;
    public $description;
    public $prix;
    
    protected $rules = 
    [
        'nom' => 'required|',
        'description' => 'required',
        'prix' => 'required|numeric|min:0',
    ];

     public function submit()

     {
        $this->validate();

            Formation::create([
                 'nom'=> $this->nom,
                 'description' => $this->description,
                 'prix' => $this->prix,
     ]);
     
      $this->reset(['nom', 'description', 'prix']); 
       session()->flash('message', 'Formation enregistré avec succès.');
     return back();

     }

 
    public function render()
    {
        return view('livewire.fromation-create')->extends('layouts.admin');
    }
}