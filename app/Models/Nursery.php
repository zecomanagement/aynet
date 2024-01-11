<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nursery extends Model
{
    use HasFactory;

    public function species()
    {
        return $this->belongsTo(Seedling::class, 'sp_id', 'id');
    }

    public function loc()
    {
        return $this->belongsTo(Location::class, 'location', 'id');
    }
}
