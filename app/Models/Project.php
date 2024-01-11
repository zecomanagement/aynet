<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function locName()
    {
        return $this->belongsTo(Location::class, 'location', 'id');
    }

    public function section()
    {
        return $this->hasMany(ProSec::class);
    }
}
