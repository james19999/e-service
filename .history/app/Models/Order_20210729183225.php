<?php

namespace App\Models;

use App\Models\User;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'amount', 'payment_status' ,'formation_id' ,'user_id'];

    public function formation(){

        return $this->belongsTo(Formation::class,'formation_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
