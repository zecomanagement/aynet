<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ward;
use App\Models\County;
use App\Models\SellTree;
use App\Models\SubCounty;
use App\Models\DonateTree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellTreesController extends Controller
{
    public function viewSales()
    {

        $sales = SellTree::all();

        return view('admin.frontend.sell.viewSales', compact('sales'));
    }

    public function addSales()
    {
        $trees = DonateTree::all();
        $county = County::all();
        //dd($trees);
        $subCounty = SubCounty::all();
        $ward = Ward::all();
        return view('admin.frontend.sell.addSales', compact('trees', 'county', 'subCounty', 'ward'));
    }

    public function getSubCounty($id)
    {
        $html = '';
        $sections = SubCounty::where('county_id', $id)->get();

        foreach ($sections as $section) {
            $html .= '<option value="' . $section->id . '">' . $section->sub_county_name . '</option>';
        }

        return response()->json($html);
    }

    public function getWard($id)
    {
        $html = '';
        $wards = Ward::where('sub_county_id', $id)->get();

        foreach ($wards as $ward) {
            $html .= '<option value="' . $ward->id . '">' . $ward->ward_name . '</option>';
        }

        return response()->json($html);
    }

    public function storeSales(Request $request)
    {
        $sales = new SellTree;
        $sales->name = $request->name;
        $sales->mobile = $request->mobile;
        $sales->email = $request->email;
        $sales->tr_name = $request->tr_name;
        $sales->av_age = $request->av_age;
        $sales->county_id = $request->county_id;
        $sales->sub_county_id = $request->sub_county_id;
        $sales->ward_id = $request->ward_id;
        $sales->circumference = $request->circumference;
        $sales->price = $request->price;
        $sales->quantity = $request->quantity;
        $sales->total = $request->total;

        $sales->save();

        $notification = array(
            'message' => 'Sale Posted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editSales($id)
    {
        $editSales = SellTree::findOrFail($id);
        return view('admin.frontend.sell.editSales', compact('editSales'));
    }

    public function updateSales(Request $request, $id)
    {
        $sales = SellTree::find($id);
        $sales->name = $request->name;
        $sales->mobile = $request->mobile;
        $sales->email = $request->email;
        $sales->tr_name = $request->tr_name;
        $sales->av_age = $request->av_age;
        $sales->circumference = $request->circumference;
        $sales->price = $request->price;
        $sales->quantity = $request->quantity;
        $sales->total = $request->total;

        $sales->save();

        $notification = array(
            'message' => 'Sale updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.sales')->with($notification);
    }
}
