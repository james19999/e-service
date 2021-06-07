<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideoComponent extends Component
{
    public $search;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];
    
    public function delete($id)
                {
                   $Videos = Video::find($id); //selectionner l'id de la video
                   $Videos->delete();            //suppression
                   session()->flash('messages', 'Video supprimé avec succès.');
                   return back();
                }

    public function render()
    {
    //    $Videos = Video::with('formation')->get();
        return view('livewire.video-component',[
            'Videos'=> Video::where('video', 'like', '%'.$this->search.'%')->paginate(5),
            ])->extends('layouts.admin');
    }
}
    