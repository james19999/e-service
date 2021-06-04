<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Formation;
use Livewire\WithFileUploads;

class VideoForm extends Component
{
    use WithFileUploads;
    public $video;
    public $form_id;
    
     //controle des champs pour qu'ils soient remplis
             protected $rules = 
                  [
                    'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',

                    'form_id' => 'required|integer',
                  ];


             public function submit()
        
                {
                    
                    $this->validate();

                    Video::create([
                    'video'=> $this->video->hashName(),
                    'form_id' => $this->form_id,
                   
                     ]);
                     
                       $this->video->store('public/video');
     
                    $this->reset(['video', 'form_id']); //apres validation de ces attributs,
                    // le champs doit etre vide de nouveau
                    session()->flash('message', 'Video enregistré avec succès.');
                    return   back();
     

                }
    public function render()
    {
        
        return view('livewire.video-form',[
            'Formations'=>$Formations = Formation::All(),
        ])->extends('layouts.admin');
    }
}