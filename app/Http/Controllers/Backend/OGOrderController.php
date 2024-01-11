<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Order;
use App\Models\Client;
use App\Models\Nursery;
use App\Models\Project;
use App\Models\Service;
use App\Models\Seedling;
use App\Models\CompDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OGOrderController extends Controller
{
    public function seedOrder($seed_id, $seed_qty)
    {
        $data = Seedling::where('id', $seed_id)->first();

        $result = 'error';
        if (Auth::user()->id) {
            $seedOrder = new Order;

            if ($seedOrder->create([
                'mb_id' => Auth::user()->id,
                'sp_id' => $seed_id,
                'qty' => $seed_qty,
                'uPrice' => $data->uPrice,
                'amount' => $data->uPrice * $seed_qty,

            ])) {
                $result = 'success';
            }
        }
        return $result;
    }

    public function viewSdProf($id)
    {
        $order = Order::where('id', $id)->first();

        return view('backend.order.seedling.seedDetails', compact('order'));
    }

    public function checkout($id)
    {
        $order = Order::where('id', $id)->first();
        return view('backend.order.seedling.checkout', compact('order'));
    }

    public function viewOrd()
    {
        $order = Order::where('type', 'seedling')->get();
        $member = Client::all();
        $seed = Seedling::all();
        $pro = Project::all();
        $serv = Service::all();

        return view('backend.order.seedling.viewOrd', compact('order', 'member', 'seed', 'pro', 'serv'));
    }

    public function addOrd()
    {
        $member = Client::all();
        $seed = Seedling::all();
        $nursery = Nursery::all();
        return view('backend.order.seedling.addOrd', compact('member', 'seed', 'nursery'));
    }

    public function storeOrd(Request $request)
    {
        $countOrd = count((is_countable($request->sp_id) ? $request->sp_id : []));
        if ($countOrd != NULL) {
            for ($i = 0; $i < $countOrd; $i++) {
                $data = new Order();
                $data->mb_id = $request->mb_id;
                $data->sp_id = $request->sp_id[$i];
                $data->nrs_id = $request->nrs_id[$i];
                $data->type = $request->type[$i];
                $data->uPrice = $request->uPrice[$i];
                $data->qty = $request->qty[$i];
                $data->amount = $request->amount[$i];

                $data->save();
            }
        }


        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sd.ord.view')->with($notification);
    }



    public function editOrd($id)
    {
        $editData = Order::where('id', $id)->get();
        $member = Client::all();
        $seed = Seedling::all();
        return view('backend.order.seedling.editOrd', compact('editData', 'member', 'seed'));
    }

    public function updateOrd(Request $request, $id)
    {
        $data = Order::find($id);
        $data->mb_id = $request->mb_id;
        $data->sp_id = $request->sp_id;
        $data->nrs_id = $request->nrs_id;
        $data->type = $request->type;
        $data->qty = $request->qty;
        $data->uPrice = $request->uPrice;
        $data->amount = $request->amount;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sd.ord.view')->with($notification);
    }

    public function delOrd($id)
    {
        $data = Order::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('sd.ord.view')->with($notification);
    }
}
