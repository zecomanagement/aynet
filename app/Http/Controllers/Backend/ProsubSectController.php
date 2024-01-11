<?php

namespace App\Http\Controllers\Backend;

use App\Models\ProSec;
use App\Models\Project;
use App\Models\ProSubSect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seedling;

class ProsubSectController extends Controller
{
    public function viewSubSect()
    {
        $data = ProSubSect::all();
        $pro = Project::all();
        $sect = ProSec::all();

        return view('backend.setup.pro.sub_section.viewSubSect', compact('data', 'pro', 'sect'));
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

    public function addSubSect()
    {
        $pro = Project::all();
        $sect = ProSec::all();
        $seed = Seedling::all();

        return view('backend.setup.pro.sub_section.addSubSect', compact('pro', 'sect', 'seed'));
    }

    public function storeSubSect(Request $request)
    {
        $data = new ProSubSect();
        $data->pro_id = $request->pro_id;
        $data->sect_id = $request->sect_id;
        $data->name = $request->name;
        $data->sp_id = $request->sp_id;
        $data->size = $request->size;
        $data->trees = $request->trees;
        $data->uPrice = $request->uPrice;
        $data->value = $request->value;
        $data->pl_date = date('Y-m-d', strtotime($request->pl_date));
        $data->mat_date = date('Y-m-d', strtotime($request->mat_date));
        $data->briefDesc = $request->briefDesc;
        $data->longDesc = $request->longDesc;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/subSection_image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();



        $notification = array(
            'message' => 'Sub-section added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sub.sect.view')->with($notification);
    }

    public function editSubSect($id)
    {
        $editData = ProSubSect::find($id);
        $pro = Project::all();
        $sect = ProSec::all();
        $seed = Seedling::all();
        return view('backend.setup.pro.sub_section.editSubSect', compact('editData', 'pro', 'sect', 'seed'));
    }

    public function upSubSect(Request $request, $id)
    {
        $data = ProSubSect::find($id);
        $data->pro_id = $request->pro_id;
        $data->sect_id = $request->sect_id;
        $data->name = $request->name;
        $data->sp_id = $request->sp_id;
        $data->size = $request->size;
        $data->trees = $request->trees;
        $data->uPrice = $request->uPrice;
        $data->value = $request->value;
        $data->pl_date = date('Y-m-d', strtotime($request->pl_date));
        $data->mat_date = date('Y-m-d', strtotime($request->mat_date));
        $data->briefDesc = $request->briefDesc;
        $data->longDesc = $request->longDesc;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/subSection_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/subSection_image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Details updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sub.sect.view')->with($notification);
    }
}
