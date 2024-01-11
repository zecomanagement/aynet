<?php

namespace App\Http\Controllers\Backend;

use App\Models\Nursery;
use App\Models\NSDetail;
use App\Models\Seedling;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NSController extends Controller
{
    public function viewNS()
    {
        $data = NSDetail::all();
        $species = Seedling::all();
        $nursery = Nursery::all();

        return view('backend.setup.nursery.details.viewNS', compact('data', 'species', 'nursery'));
    }

    public function addNS()
    {
        $species = Seedling::all();
        $nursery = Nursery::all();

        return view('backend.setup.nursery.details.addNS', compact('species', 'nursery'));
    }

    public function storeNS(Request $request)
    {
        $countNS = count((is_countable($request->sp_id) ? $request->sp_id : []));
        if ($countNS != NULL) {
            for ($i = 0; $i < $countNS; $i++) {
                $data = new NSDetail();
                $data->n_id = $request->n_id;
                $data->sp_id = $request->sp_id[$i];
                $data->amount = $request->amount[$i];

                $data->save();
            }
        }


        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ns.view')->with($notification);
    }

    public function editNS($id)
    {
        $editData = NSDetail::where('id', $id)->get();
        $species = Seedling::all();
        $nursery = Nursery::all();

        return view('backend.setup.nursery.details.editNS', compact('editData', 'species', 'nursery'));
    }

    public function updateNS(Request $request, $id)
    {
        $data = NSDetail::find($id);
        $data->n_id = $request->n_id;
        $data->sp_id = $request->sp_id;
        $data->amount = $request->amount;


        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ns.view')->with($notification);
    }
}
