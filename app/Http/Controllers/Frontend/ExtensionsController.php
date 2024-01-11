<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ward;
use App\Models\County;
use App\Models\Extension;
use App\Models\SubCounty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExtensionsController extends Controller
{
    public function viewExt(){
        $extension = Extension::all();
        return view('admin.frontend.extension.viewExt', compact('extension'));
    }

    public function addExt(){
        $county = County::all();
        $subCounty = SubCounty::all();
        $ward = Ward::all();
        return view('admin.frontend.extension.addExt', compact('county', 'subCounty', 'ward'));
    }

    public function storeExt(Request $request){
        $extension = new Extension;
        $extension->name = $request->name;
        $extension->email = $request->email;
        $extension->mobile = $request->mobile;
        $extension->county_id = $request->county_id;
        $extension->sub_county_id = $request->sub_county_id;
        $extension->ward_id = $request->ward_id;
        $extension->date = $request->date;

        $extension->save();
        
        $notification = array(
            'message' => 'Extension Booked Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editExt($id){
        $editExt = Extension::find($id);
        return view('admin.frontend.extension.editExt', compact('editExt'));
    }

    public function updateExt(Request $request, $id){
        $extension = Extension::find($id);
        $extension->name = $request->name;
        $extension->email = $request->email;
        $extension->mobile = $request->mobile;
        $extension->location = $request->location;
        $extension->location_desc = $request->location_desc;
        $extension->date = $request->date;

        $extension->save();
        
        $notification = array(
            'message' => 'Details Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.ext')->with($notification);
    }
}
