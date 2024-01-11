<?php

namespace App\Http\Controllers\Backend;

use App\Models\Location;
use App\Models\Seedling;
use App\Models\CompDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class SeedlingController extends Controller
{

    public function seed($id)
    {
        $data = Seedling::where('id', $id)->first();
        $seedling = Seedling::all();
        $location = Location::all();
        $cart = Cart::content();
        //dd($cart);
        $company = CompDetail::all();

        return view('backend.setup.seedling.seedDts', compact('data', 'company', 'id', 'seedling', 'location', 'cart'));
    }

    public function viewSd()
    {
        $data = Seedling::all();
        return view('backend.setup.seedling.viewSd', compact('data'));
    }

    public function addSd()
    {
        return view('backend.setup.seedling.addSd');
    }

    //public function getuPrice($id)
    //{
    //$uPrice = 0;
    //if (Seedling::where('id', $id)->first()) {
    //$uPrice = Seedling::where('id', $id)->first()->uPrice;
    //}
    //return $uPrice;
    //}

    public function getuPrice($id)
    {
        $uPrice = 0;
        if (Seedling::where('id', $id)->first()) {
            $uPrice = Seedling::where('id', $id)->first()->uPrice;
        }
        return $uPrice;
        //return view('backend.order.seedling.seedUPrice', compact('uPrice'));
    }

    public function storeSd(Request $request)
    {
        $data = new Seedling();
        $data->name = $request->name;
        $data->uPrice = $request->uPrice;
        $data->briefDesc = $request->briefDesc;
        $data->longDesc = $request->longDesc;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/seedling_image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sd.view')->with($notification);
    }

    public function editSd($id)
    {
        $editData = Seedling::find($id);
        return view('backend.setup.seedling.editSd', compact('editData'));
    }

    public function updateSd(Request $request, $id)
    {
        $data = Seedling::find($id);
        $data->name = $request->name;
        $data->uPrice = $request->uPrice;
        $data->briefDesc = $request->briefDesc;
        $data->longDesc = $request->longDesc;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/seedling_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/seedling_image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('sd.view')->with($notification);
    }

    public function deleteSd($id)
    {
        $data = Seedling::find($id);
        $data->delete();

        $notification = array(
            'message' => 'data deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('sd.view')->with($notification);
    }
}
