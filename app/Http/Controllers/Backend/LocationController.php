<?php

namespace App\Http\Controllers\Backend;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function viewLoc()
    {
        $data = Location::all();
        return view('backend.setup.location.viewLoc', compact('data'));
    }

    public function addLoc()
    {
        return view('backend.setup.location.addLoc');
    }

    public function storeLoc(Request $request)
    {
        $countLoc = count((is_countable($request->name) ? $request->name : []));
        if ($countLoc != NULL) {
            for ($i = 0; $i < $countLoc; $i++) {
                $data = new Location();
                $data->name = $request->name[$i];

                $data->save();
            }
        }

        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('loc.view')->with($notification);
    }

    public function editLoc($id)
    {
        $editData = Location::where('id', $id)->get();
        return view('backend.setup.location.editLoc', compact('editData'));
    }

    public function updateLoc(Request $request, $id)
    {
        $data = Location::find($id);
        $data->name = $request->name;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('loc.view')->with($notification);
    }
}
