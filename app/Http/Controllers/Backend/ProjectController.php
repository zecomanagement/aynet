<?php

namespace App\Http\Controllers\Backend;

use App\Models\ProSec;
use App\Models\Project;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function viewPro()
    {
        $data = Project::all();
        $loc = Location::all();

        return view('backend.setup.pro.viewPro', compact('data', 'loc'));
    }

    public function addPro()
    {
        $loc = Location::all();
        return view('backend.setup.pro.addPro', compact('loc'));
    }

    public function getPpa($id)
    {
        $ppa = 0;
        if (Project::where('id', $id)->first()) {
            $ppa = Project::where('id', $id)->first()->ppa;
        }
        return $ppa;
        //return view('backend.order.seedling.seedUPrice', compact('uPrice'));
    }

    public function getSection($id)
    {
        $html = '';
        $sections = ProSec::where('pro_id', $id)->get();

        foreach ($sections as $section) {
            $html .= '<option value="' . $section->id . '">' . $section->name . '</option>';
        }

        return response()->json($html);
    }

    public function storePro(Request $request)
    {
        $countPro = count((is_countable($request->name) ? $request->name : []));
        if ($countPro != NULL) {
            for ($i = 0; $i < $countPro; $i++) {
                $data = new Project();
                $data->name = $request->name[$i];
                $data->location = $request->location[$i];
                $data->size = $request->size[$i];


                $data->save();
            }
        }

        $notification = array(
            'message' => 'data added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pro.view')->with($notification);
    }

    public function editPro($id)
    {
        $editData = Project::where('id', $id)->get();
        $loc = Location::all();
        return view('backend.setup.pro.editPro', compact('editData', 'loc'));
    }

    public function updatePro(Request $request, $id)
    {
        $data = Project::find($id);
        $data->name = $request->name;
        $data->location = $request->location;
        $data->size = $request->size;

        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pro.view')->with($notification);
    }
}
