<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\Backend\OrderBalanceController;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'mb_id', 'id');
    }

    public function cl()
    {
        return $this->belongsTo(Client::class, 'mb_id', 'id');
    }

    public function species()
    {
        return $this->belongsTo(Seedling::class, 'sp_id', 'id');
    }

    public function nursery()
    {
        return $this->belongsTo(Nursery::class, 'nrs_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'pr_id', 'id');
    }

    public function section()
    {
        return $this->belongsTo(ProSec::class, 'sect_id', 'id');
    }

    public function subSect()
    {
        return $this->belongsTo(ProSubSect::class, 'sub_sect_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(ServName::class, 'sv_id', 'id');
    }


    /** An Order has many receipt allocations */
    public function amountAllocated()
    {
        return $this->hasMany(AllocReceipt::class, 'orderId', 'id');
    }

    public function orderBalance($id)
    {
        return (new OrderBalanceController)->orderBalance($id);
    }

    public function totalAmountPaid($id)
    {
        return (new OrderBalanceController)->orderAmountPaid($id);
    }
}
