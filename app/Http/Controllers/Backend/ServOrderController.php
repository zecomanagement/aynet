<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Order;
use App\Models\Project;
use App\Models\Service;
use App\Models\Seedling;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ServName;

class ServOrderController extends Controller
{
    public function viewSvProf($id)
    {
        $order = Order::where('id', $id)->first();

        return view('backend.order.serv.sdetails', compact('order'));
    }

    public function viewSOrd()
    {
        $order = Order::where('type', 'service')->get();
        $member = Client::all();
        $seed = Seedling::all();
        $pro = Project::all();
        $serv = ServName::all();

        return view('backend.order.serv.viewSOrd', compact('order', 'member', 'seed', 'pro', 'serv'));
    }

    public function addSOrd()
    {
        $member = Client::all();
        $serv = ServName::all();
        return view('backend.order.serv.addSOrd', compact('member', 'serv'));
    }

    public function storeSOrd(Request $request)
    {
        $data = new Order();
        $data->mb_id = $request->mb_id;
        $data->sv_id = $request->sv_id;
        $data->type = $request->type;
        $data->qty = $request->qty;
        $data->amount = $request->amount;

        $data->save();

        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('srv.ord.view')->with($notification);
    }

    public function editSOrd($id)
    {
        $editData = Order::find($id);
        $member = Client::all();
        $serv = ServName::all();

        return view('backend.order.serv.editSOrd', compact('editData', 'member', 'serv'));
    }

    public function updateSOrd(Request $request, $id)
    {
        $data = Order::find($id);
        $data->mb_id = $request->mb_id;
        $data->sv_id = $request->sv_id;
        $data->type = $request->type;
        $data->qty = $request->qty;
        $data->amount = $request->amount;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('srv.ord.view')->with($notification);
    }

    public function delSOrd($id)
    {
        $data = Order::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('srv.ord.view')->with($notification);
    }
}
