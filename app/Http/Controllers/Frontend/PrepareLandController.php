<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ward;
use App\Models\County;
use App\Models\Location;
use App\Models\SubCounty;
use App\Models\PrepareLand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrepareLandController extends Controller
{
    public function viewPrep(){
        $prep = PrepareLand::all();
        return view('admin.frontend.prep.viewPrep', compact('prep'));
    }

    public function addPrep(){
        $county = County::all();
        
        $subCounty = SubCounty::all();
        $ward = Ward::all();
        return view('admin.frontend.prep.addPrep',compact('county', 'subCounty', 'ward'));
    }

    public function storePrep(Request $request){
        $prep = new PrepareLand;
        $prep->name = $request->name;
        $prep->email = $request->email;
        $prep->mobile = $request->mobile;
        $prep->county_id = $request->county_id;
        $prep->sub_county_id = $request->sub_county_id;
        $prep->ward_id = $request->ward_id;
        $prep->acres = $request->acres;
        $prep->date = $request->date;

        $prep->save();
        
        $notification = array(
            'message' => 'Land Preparation Booked successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editPrep($id){
        $editPrep = PrepareLand::find($id);
        return view('admin.frontend.prep.editPrep', compact('editPrep'));
    }

    public function updatePrep(Request $request, $id){
        $prep = PrepareLand::find($id);
        $prep->name = $request->name;
        $prep->email = $request->email;
        $prep->mobile = $request->mobile;
        $prep->location = $request->location;
        $prep->location_desc = $request->location_desc;
        $prep->acres = $request->acres;
        $prep->date = $request->date;

        $prep->save();
        
        $notification = array(
            'message' => 'Land Preparation Details Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.prep')->with($notification);
    }
}
