<?php

namespace App\Http\Controllers\Backend;

use App\Models\CompDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompDetailsController extends Controller
{
    public function viewDetails()
    {
        $data = CompDetail::all();
        return view('backend.setup.company.viewDts', compact('data'));
    }

    public function addDetails()
    {
        return view('backend.setup.company.addDts');
    }

    public function storeDetails(Request $request)
    {
        $data = new CompDetail();
        $data->name = $request->name;
        $data->brCode = $request->brCode;
        $data->country = $request->country;
        $data->cCode = $request->cCode;
        $data->zipCode = $request->zipCode;
        $data->city = $request->city;
        $data->tel = $request->tel;
        $data->mobile = $request->mobile;
        $data->phLocation = $request->phLocation;
        $data->payOptions = $request->payOptions;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $user->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/company_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editDetails($id)
    {
        $editData = CompDetail::find($id);
        return view('backend.setup.company.editDts', compact('editData'));
    }

    public function upDetails(Request $request, $id)
    {
        $data = CompDetail::find($id);
        $data->name = $request->name;
        $data->brCode = $request->brCode;
        $data->country = $request->country;
        $data->cCode = $request->cCode;
        $data->zipCode = $request->zipCode;
        $data->city = $request->city;
        $data->tel = $request->tel;
        $data->mobile = $request->mobile;
        $data->phLocation = $request->phLocation;
        $data->payOptions = $request->payOptions;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/company_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/company_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('details.view')->with($notification);
    }
}
