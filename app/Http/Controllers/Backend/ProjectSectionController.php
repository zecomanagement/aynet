<?php

namespace App\Http\Controllers\Backend;

use App\Models\ProSec;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProSubSect;

class ProjectSectionController extends Controller
{
    public function viewSect()
    {
        $data = ProSec::all();
        $pro = Project::all();

        return view('backend.setup.pro.section.viewSect', compact('data', 'pro'));
    }

    public function addSect()
    {
        $pro = Project::all();
        return view('backend.setup.pro.section.addSect', compact('pro'));
    }

    public function getSubSect($id)
    {
        $html = '';
        $subSects = ProSubSect::where('sect_id', $id)->get();

        foreach ($subSects as $subSect) {
            $html .= '<option value="' . $subSect->id . '">' . $subSect->name . '</option>';
        }

        return response()->json($html);
    }

    public function storeSect(Request $request)
    {
        $countSect = count((is_countable($request->name) ? $request->name : []));
        if ($countSect != NULL) {
            for ($i = 0; $i < $countSect; $i++) {
                $data = new ProSec();
                $data->pro_id = $request->pro_id;
                $data->name = $request->name[$i];
                $data->size = $request->size[$i];
                $data->pl_date = date('Y-m-d', strtotime($request->pl_date[$i]));
                $data->mat_date = date('Y-m-d', strtotime($request->mat_date[$i]));

                $data->save();
            }
        }


        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sect.view')->with($notification);
    }

    public function editSect($id)
    {
        $editData = ProSec::where('id', $id)->get();
        $pro = Project::all();


        return view('backend.setup.pro.section.editSect', compact('editData', 'pro'));
    }

    public function updateSect(Request $request, $id)
    {
        $data = ProSec::find($id);
        $data->pro_id = $request->pro_id;
        $data->name = $request->name;
        $data->size = $request->size;
        $data->pl_date = date('Y-m-d', strtotime($request->pl_date));
        $data->mat_date = date('Y-m-d', strtotime($request->mat_date));

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sect.view')->with($notification);
    }

    public function delSect($id)
    {
        $data = ProSec::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('sect.view')->with($notification);
    }
}
