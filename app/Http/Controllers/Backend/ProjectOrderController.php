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
use App\Models\ProSec;
use App\Models\ProSubSect;

class ProjectOrderController extends Controller
{
    public function viewProf($id)
    {
        $order = Order::where('id', $id)->first();
        $member = Client::all();
        $amountAllocated = [];
        if ($order->amountAllocated != null) {
            $receipts = $order->amountAllocated;
        }

        return view('backend.order.proj.details', compact('order', 'member', 'amountAllocated', 'id'));
    }

    public function viewPOrd()
    {
        $order = Order::where('type', 'project')->get();
        $member = Client::all();
        $seed = Seedling::all();
        $pro = Project::all();
        $sect = ProSec::all();
        $sub_sect = ProSubSect::all();
        $serv = Service::all();

        return view('backend.order.proj.viewPro', compact('order', 'member', 'seed', 'pro', 'serv', 'sect', 'sub_sect'));
    }

    public function addPOrd()
    {
        $member = Client::all();
        $pro = Project::all();
        $sect = ProSec::all();
        $sub_sect = ProSubSect::all();
        return view('backend.order.proj.addPro', compact('member', 'pro', 'sect', 'sub_sect'));
    }



    public function storePOrd(Request $request)
    {
        $countOrd = count((is_countable($request->pr_id) ? $request->pr_id : []));
        if ($countOrd != NULL) {
            for ($i = 0; $i < $countOrd; $i++) {
                $data = new Order();
                $data->mb_id = $request->mb_id;
                $data->pr_id = $request->pr_id[$i];
                $data->sect_id = $request->sect_id[$i];
                $data->sub_sect_id = $request->sub_sect_id[$i];
                $data->amount = $request->amount[$i];
                $data->type = $request->type;



                $data->save();
            }

            if (ProSubSect::where('id', $request->sub_sect_id)->first()) {
                $subSect = ProSubSect::where('id', $request->sub_sect_id)->first();
                $subSect->status = '1';
                $subSect->save();
            }
        }


        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pro.ord.view')->with($notification);
    }

    public function editPOrd($id)
    {
        $editData = Order::where('id', $id)->get();
        $member = Client::all();
        $pro = Project::all();
        $sect = ProSec::all();
        $sub_sect = ProSubSect::all();

        return view('backend.order.proj.editPro', compact('editData', 'member', 'pro', 'sect', 'sub_sect'));
    }

    public function updatePOrd(Request $request, $id)
    {
        $data = Order::find($id);
        $data->mb_id = $request->mb_id;
        $data->pr_id = $request->pr_id;
        $data->sect_id = $request->sect_id;
        $data->sub_sect_id = $request->sub_sect_id;
        $data->amount = $request->amount;
        $data->type = $request->type;


        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pro.ord.view')->with($notification);
    }

    public function delPOrd($id)
    {
        $data = Order::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('pro.ord.view')->with($notification);
    }
}
