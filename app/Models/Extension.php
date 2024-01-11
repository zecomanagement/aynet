<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

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
