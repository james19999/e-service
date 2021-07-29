<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;

     protected $fillable = [
        'nom',
        'description',
        'prix',
        'image',
    ];


    public function videos(){
        return $this->hasMany(Video::class,'form_id');
    }

}
