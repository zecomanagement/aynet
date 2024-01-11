<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProSubSect extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class, 'pro_id', 'id');
    }

    public function section()
    {
        return $this->belongsTo(ProSec::class, 'sect_id', 'id');
    }

    public function species()
    {
        return $this->belongsTo(Seedling::class, 'sp_id', 'id');
    }
}
