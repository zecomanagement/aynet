<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServName;
use Illuminate\Http\Request;

class ServNameController extends Controller
{
    public function viewSN()
    {
        $data = ServName::all();
        return view('backend.setup.serv.viewSN', compact('data'));
    }

    public function addSN()
    {
        return view('backend.setup.serv.addSN');
    }

    public function storeSN(Request $request)
    {
        $countSN = count((is_countable($request->name) ? $request->name : []));
        if ($countSN != NULL) {
            for ($i = 0; $i < $countSN; $i++) {
                $data = new ServName();
                $data->name = $request->name[$i];

                $data->save();
            }
        }

        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sn.view')->with($notification);
    }

    public function editSN($id)
    {
        $editData = ServName::where('id', $id)->get();
        return view('backend.setup.serv.editSN', compact('editData'));
    }

    public function updateSN(Request $request, $id)
    {
        $data = ServName::find($id);
        $data->name = $request->name;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sn.view')->with($notification);
    }
}
