<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderBalanceController extends Controller
{
    public function billDetails($id)
    {
        $bills = Order::where('id', $id)->first();
        //dd($bills);
        return $bills;
    }

    public function orderBalance($id)
    {
        $billAmount = $this->billDetails($id)->amount ?? 0;
        $totalAmountPaid = $this->orderAmountPaid($id);
        $balance = $billAmount - $totalAmountPaid;

        return $balance;
    }

    public function orderAmountPaid($id)
    {
        $totalAmountPaid = 0;
        foreach ($this->billDetails($id)->amountAllocated as $row) {
            $totalAmountPaid += $row->amount;
        }

        return $totalAmountPaid;
    }
}
