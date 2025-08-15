<?php

namespace App\Models;

use App\Models\Spices;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';//uses the cart table
    protected $fillable = ['user_id', 'spice_id', 'quantity'];//mass fillable values

    public function spice()
    {
        return $this->belongsTo(Spices::class, 'spice_id');//each cart item belongs to one spice
    }
}
