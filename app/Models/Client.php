<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function bills()
    {
        return $this->hasMany(Order::class, 'mb_id', 'id');
    }

    //A Client has many receipts
    public function receipts()
    {
        return $this->hasMany(Receipt::class, 'mbId', 'id');
    }
}
