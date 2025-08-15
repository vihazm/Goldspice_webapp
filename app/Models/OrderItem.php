<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
     protected $fillable = ['order_id', 'spice_id', 'quantity', 'price'];

    public function spice()
    {
        return $this->belongsTo(Spices::class);//each item is for one spice
    }
}
