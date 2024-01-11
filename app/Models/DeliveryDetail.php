<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function county()
    {
        return $this->belongsTo(County::class, 'county_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function subCounty()
    {
        return $this->belongsTo(SubCounty::class, 'subCounty_id', 'id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(CartOrder::class, 'order_id', 'id');
    }

    
}
