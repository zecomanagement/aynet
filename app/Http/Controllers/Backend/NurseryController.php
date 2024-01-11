<?php

namespace App\Http\Controllers\Backend;

use App\Models\Nursery;
use App\Models\Location;
use App\Models\Seedling;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NurseryController extends Controller
{
    public function viewNrs()
    {
        $data = Nursery::all();


        return view('backend.setup.nursery.viewNrs', compact('data'));
    }

    public function addNrs()
    {
        $loc = Location::all();
        return view('backend.setup.nursery.addNrs', compact('loc'));
    }

    public function storeNrs(Request $request)
    {
        $countNrs = count((is_countable($request->name) ? $request->name : []));
        if ($countNrs != NULL) {
            for ($i = 0; $i < $countNrs; $i++) {
                $data = new Nursery();
                $data->name = $request->name[$i];
                $data->location = $request->location[$i];

                $data->save();
            }
        }


        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('nrs.view')->with($notification);
    }

    public function editNrs($id)
    {
        $editData = Nursery::where('id', $id)->get();
        $loc = Location::all();
        return view('backend.setup.nursery.editNrs', compact('editData', 'loc'));
    }

    public function updateNrs(Request $request, $id)
    {
        $data = Nursery::find($id);
        $data->name = $request->name;
        $data->location = $request->location;


        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('nrs.view')->with($notification);
    }

    public function delNrs($id)
    {
        $data = Nursery::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('nrs.view')->with($notification);
    }
}
