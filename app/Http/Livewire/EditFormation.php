<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;


class EditFormation extends Component
{
       public $nom;
       public $description;
       public $prix;
       public $formation_id;

       public function mount($formation_id)
       {
           $Formations=Formation::find($formation_id);
           $this->nom=$Formations->nom;
           $this->description=$Formations->description;
           $this->prix=$Formations->prix;
           $this->$formation_id=$Formations->id;

       }

        public function updated($fields)
        {
            $this->validateOnly($fields,[
                'nom'=>'required',
                'description'=>'required',
                'prix'=>'required'

            ]);
        }  
        public function modification()
        {
            $this->validate
            (['nom'=>'required',
            'description'=>'required',
            'prix'=>'required'
            ]);
            $Formations=Formation::find($this->formation_id);
            $Formations->nom=$this->nom;
            $Formations->description=$this->description;
            $Formations->prix=$this->prix;
            $Formations->save();
            $this->reset(['nom', 'description', 'prix']);
            session()->flash('sms', 'Formation modifiée avec succès.');
            return   redirect()->route('formationcomponet');
        }     
    public function render()
    {
        return view('livewire.edit-formation')->extends('layouts.admin');
    }
}