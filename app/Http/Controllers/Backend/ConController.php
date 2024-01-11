<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConController extends Controller
{
    public function clDetails($id)
    {
        return Client::where('id', $id)->first();
    }
    public function viewCon()
    {
        $data = Client::where('usertype', 'consumer')->get();
        //$data = Client::all();
        return view('backend.client.consumer.viewCon', compact('data'));
    }

    public function addCon()
    {
        return view('backend.client.consumer.addCon');
    }

    public function addOnlineCon()
    {
        return view('backend.client.consumer.addOnCon');
    }


    public function storeCon(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new Client();
        $code = rand(0000, 9999);
        $data->usertype = $request->usertype;
        $data->mobile = $request->mobile;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($code);
        $data->code = $code;

        $data->save();

        $notification = array(
            'message' => 'user created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('con.view')->with($notification);
    }

    public function storeOnlineCon(Request $request)
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

    public function editCon($id)
    {
        $editData = Client::find($id);
        return view('backend.client.consumer.editCon', compact('editData'));
    }

    public function updateCon(Request $request, $id)
    {

        $data = Client::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        $data->save();

        $notification = array(
            'message' => ' details updated successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('con.view')->with($notification);
    }

    public function deleteCon($id)
    {
        $data = Client::find($id);
        $data->delete();

        $notification = array(
            'message' => 'User Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('con.view')->with($notification);
    }
}
