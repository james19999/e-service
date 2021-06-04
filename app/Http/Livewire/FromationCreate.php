<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class FromationCreate extends Component
{
            //declaration des attributs de la table formation

             public $nom;
             public $description;
             public $prix;
             
    
             //controle des champs pour qu'ils soient remplis
             protected $rules = 
                  [
                    'nom' => 'required|unique:formations',
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
     
                    $this->reset(['nom', 'description', 'prix']); //apres validation de ces attributs,
                    // le champs doit etre vide de noveau
                    session()->flash('message', 'Formation enregistré avec succès.');
                    return   redirect()->route('formationcomponet');
     

                }
 
           public function render()
               {
                   return view('livewire.fromation-create')->extends('layouts.admin');
               }
}