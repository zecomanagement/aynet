<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NSDetail extends Model
{
    use HasFactory;

    public function nursery()
    {
        return $this->belongsTo(Nursery::class, 'n_id', 'id');
    }

    public function species()
    {
        return $this->belongsTo(Seedling::class, 'sp_id', 'id');
    }
}
