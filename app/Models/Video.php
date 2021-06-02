<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

     protected $fillable = [
        'video',
        'form_id',
      
    ];


    public function formation()
    {
        return $this->belongsTo(Formation::class, 'form_id');
    }
}