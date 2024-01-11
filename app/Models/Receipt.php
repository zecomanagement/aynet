<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class, 'mbId', 'id');
    }

    public function ledger()
    {
        return $this->belongsTo(Ledger::class, 'ledgerId', 'id');
    }

    public function receiptAllocations()
    {
        return $this->hasMany(AllocReceipt::class, 'recId', 'id');
    }
}
