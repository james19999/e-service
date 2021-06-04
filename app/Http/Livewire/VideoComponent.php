<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class VideoComponent extends Component
{

    

    public function render()
    {
       $Videos = Video::with('formation')->get();
        return view('livewire.video-component',['Videos'=>$Videos])->extends('layouts.admin');
    }
}