<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use App\Models\Location;
use App\Models\ServName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function viewSrv()
    {
        $data = Service::all();
        return view('backend.setup.serv.viewServ', compact('data'));
    }

    public function addSrv()
    {
        $location = Location::all();
        $serv = ServName::all();
        return view('backend.setup.serv.addSvr', compact('location', 'serv'));
    }

    public function getServ($id)
    {
        $ppa = 0;
        if (Service::where('id', $id)->first()) {
            $ppa = Service::where('id', $id)->first()->ppa;
        }
        return $ppa;
        //return view('backend.order.seedling.seedUPrice', compact('uPrice'));
    }

    public function storeSrv(Request $request)
    {
        $countSrv = count((is_countable($request->loc_id) ? $request->loc_id : []));
        if ($countSrv != NULL) {
            for ($i = 0; $i < $countSrv; $i++) {
                $data = new Service();
                $data->sv_id = $request->name;
                $data->loc_id = $request->loc_id[$i];
                $data->ppa = $request->ppa[$i];

                $data->save();
            }
        }

        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('srv.view')->with($notification);
    }

    public function editSrv($id)
    {
        $editData = Service::where('id', $id)->get();
        $location = Location::all();
        $serv = ServName::all();
        return view('backend.setup.serv.editSvr', compact('editData', 'location', 'serv'));
    }

    public function updateSrv(Request $request, $id)
    {
        $data = Service::find($id);
        $data->sv_id = $request->name;
        $data->loc_id = $request->loc_id;
        $data->ppa = $request->ppa;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('srv.view')->with($notification);
    }

    public function delSrv($id)
    {
        $data = Service::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('srv.view')->with($notification);
    }
}
