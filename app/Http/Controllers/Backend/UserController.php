<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function viewUser()
    {
        $data = User::where('usertype', 'user')->get();
        return view('backend.user.viewUser', compact('data'));
    }

    public function addUser()
    {
        return view('backend.user.addUser');
    }

    public function storeUser(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $code = rand(0000, 9999);
        $data->usertype = $request->usertype;
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($code);
        $data->code = $code;

        $data->save();

        $notification = array(
            'message' => 'User Created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function editUser($id)
    {
        $editData = User::find($id);
        return view('backend.user.editUser', compact('editData'));
    }

    public function updateUser(Request $request, $id)
    {

        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;

        $data->save();

        $notification = array(
            'message' => 'User details Updated successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();

        $notification = array(
            'message' => 'User Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }
}
