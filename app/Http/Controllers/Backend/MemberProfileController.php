<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberProfileController extends Controller
{
    public function viewMbPro()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('backend.client.member.viewProf', compact('user'));
    }

    public function editMbPro()
    {
        $id = Auth::user()->id;
        $editData = User::findOrFail($id);

        return view('backend.client.member.editProf', compact('editData'));
    }

    public function storeMbPro(Request $request)
    {

        $data = User::find(Auth::user()->id); //Find the user id then pick all the set parameters
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;


        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('prof.view')->with($notification);
    }

    public function viewPass()
    {
        return view('backend.client.member.editPass');
    }

    public function updatePass(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);

            $user->save();
            Auth::logout();

            return redirect()->route('login');
        } else {
            return redirect()->back();
        }
    }
}
