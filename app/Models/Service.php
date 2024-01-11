<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function place()
    {
        return $this->belongsTo(Location::class, 'loc_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(ServName::class, 'sv_id', 'id');
    }
}
