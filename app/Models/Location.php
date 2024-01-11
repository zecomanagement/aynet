<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Service::class, 'id', 'loc_id');
    }
}
