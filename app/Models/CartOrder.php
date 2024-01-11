<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartOrder extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function delivery()
    {
        return $this->belongsTo(DeliveryDetail::class, 'id', 'order_id');
    }

    public function items(){
        return $this->hasMany(CartItem::class, 'id', 'order_id');
    }
}
