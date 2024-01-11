<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllocReceipt extends Model
{
    use HasFactory;

    public function alloc()
    {
        return $this->belongsTo(Receipt::class, 'recId', 'id');
    }
}
