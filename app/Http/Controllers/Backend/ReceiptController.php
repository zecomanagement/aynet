<?php

namespace App\Http\Controllers\Backend;

use NumberFormatter;
use App\Models\Order;
use App\Models\Client;
use App\Models\Ledger;
use App\Models\Receipt;
use App\Models\CompDetail;
use App\Models\AllocReceipt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceiptController extends Controller
{
    public function viewReceipt()
    {
        $data = Receipt::all();

        return view('backend.account.receipts.viewReceipt', compact('data'));
    }

    public function billShow($id)
    {
        $member = (new ConController)->clDetails($id);
        $accounts = Ledger::where('accType', 'Bank')->get();

        $bills = [];
        if ($member->bills != null) {
            $bills = $member->bills;
        }
        //dd($bills);
        return view('backend.account.receipts.makePayment', compact('member', 'bills', 'accounts', 'id'));
    }

    public function storePayment(Request $request, $id, ConController $conController)
    {
        //Declare the variables

        //$member = $conController->clDetails($id);
        $totals = $request->totals;
        $regDate = $request->regDate;
        $payMode = $request->payMode;
        $ledgerId = $request->ledgerId;
        $reference = $request->reference;
        $narration = $request->narration;
        $stamp = rand(00000000, 99999999);

        if ($totals > 0) {
            //create an instance to help with data storage
            $data = new Receipt();
            $data->amount = $totals;
            $data->regDate = $regDate;
            $data->payMode = $payMode;
            $data->ledgerId = $ledgerId;
            $data->reference = $reference;
            $data->narration = $narration;
            $data->mbId = $id;
            $data->stamp = $stamp;

            $data->save();

            $recId = $data->id;
        }

        if (!empty(@$data)) {
            //prepare for receipt allocations
            foreach ($request->contId as $key => $value) {

                $orderId = $request->contId[$key];
                $amountPaid = $request->paid[$key];

                //create instance of the allocaion model
                $alloc = new AllocReceipt;
                if ($amountPaid > 0) {
                    $alloc->recId = $recId;
                    $alloc->orderId = $orderId;
                    $alloc->amount = $amountPaid;
                    $alloc->allocDate = $regDate;

                    $alloc->save();
                }
            }

            $notification = array(
                'message' => 'Done! Receipt inserted successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('receipt.view')->with($notification);
        } else {
            $notification = array(
                'message' => 'Oops !Enter a value greater than 0',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }

    public function allocDts($id)
    {
        $allocRct = AllocReceipt::where('id', $id)->first();
        $details = CompDetail::first();


        //dd($receipt->receiptAllocations);

        return view('backend.account.receipts.allocRct', compact('allocRct', 'details'));
    }
}
