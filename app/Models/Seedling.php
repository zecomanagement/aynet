<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seedling extends Model
{
    use HasFactory;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
