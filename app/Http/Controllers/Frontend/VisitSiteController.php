<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\VisitSite;
use Illuminate\Http\Request;

class VisitSiteController extends Controller
{
    public function viewVisit()
    {
        $visit = VisitSite::all();
        return view('admin.frontend.visit.viewVst', compact('visit'));
    }

    public function addVisit()
    {
        return view('admin.frontend.visit.addVst');
    }

    public function storeVisit(Request $request)
    {
        $visit = new VisitSite;
        $visit->name = $request->name;
        $visit->mobile = $request->mobile;
        $visit->email = $request->email;
        $visit->date = $request->date;

        $visit->save();
        $notification = array(
            'message' => 'Site visit booked successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editVisit($id){
        $editVisit = VisitSite::find($id);
        return view('admin.frontend.visit.editVst', compact('editVisit'));
    }

    public function updateVisit(Request $request, $id){
        $visit = VisitSite::find($id);
        $visit->name = $request->name;
        $visit->mobile = $request->mobile;
        $visit->email = $request->email;
        $visit->date = $request->date;

        $visit->save();
        
        $notification = array(
            'message' => 'Site visit updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.visit')->with($notification);
    }
}
