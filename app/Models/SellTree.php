<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellTree extends Model
{
    use HasFactory;
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id', 'id');
    }

    public function subCounty()
    {
        return $this->belongsTo(SubCounty::class, 'sub_county_id', 'id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }
}
