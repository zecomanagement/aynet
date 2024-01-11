<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function viewMb()
    {
        //$data = Client::where('usertype', 'farmer')->get();
        $data = Client::all();
        return view('backend.client.member.viewMb', compact('data'));
    }

    public function addMb()
    {
        return view('backend.client.member.addMb');
    }

    public function addCl()
    {
        return view('backend.client.member.addCl');
    }

    public function storeMb(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new Client();
        //$code = rand(0000, 9999);
        $data->usertype = $request->usertype;
        $data->mobile = $request->mobile;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        //$data->code = $code;

        $data->save();

        $notification = array(
            'message' => 'member created successfully',
            'alert-type' => 'success'
        );

    
        return redirect()->route('mb.view')->with($notification);   
    }

    public function storeCl(Request $request)
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
            'message' => 'member created successfully',
            'alert-type' => 'success'
        );

        
        return redirect()->route('login')->with($notification);
        
        
    }

    public function editMb($id)
    {
        $editData = Client::find($id);
        return view('backend.client.member.editMb', compact('editData'));
    }

    public function updateMb(Request $request, $id)
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

        return redirect()->route('mb.view')->with($notification);
    }

    public function deleteMb($id)
    {
        $data = Client::find($id);
        $data->delete();

        $notification = array(
            'message' => 'User Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('mb.view')->with($notification);
    }
}
