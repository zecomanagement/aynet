<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProSec extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class, 'pro_id', 'id');
    }

    public function subsection()
    {
        return $this->hasMany(ProSubSect::class);
    }
}
