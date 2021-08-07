<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
