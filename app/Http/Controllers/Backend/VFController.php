<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VFController extends Controller
{
    public function viewVF()
    {
        //$data = Client::where('usertype', 'vf')->get();
        $data = User::all();
        return view('backend.client.VF.viewVF', compact('data'));
    }

    public function addVF()
    {
        return view('backend.client.VF.addVF');
    }

    public function storeVF(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        //$code = rand(0000, 9999);
        $data->usertype = $request->usertype;
        $data->mobile = $request->mobile;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        //$data->code = $code;

        $data->save();

        $notification = array(
            'message' => 'user created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }

    public function editVF($id)
    {
        $editData = User::find($id);
        return view('backend.client.VF.editVF', compact('editData'));
    }

    public function updateVF(Request $request, $id)
    {

        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        $data->save();

        $notification = array(
            'message' => ' details updated successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('vf.view')->with($notification);
    }

    public function deleteVF($id)
    {
        $data = User::find($id);
        $data->delete();

        $notification = array(
            'message' => 'User Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('vf.view')->with($notification);
    }
}
