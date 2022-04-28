<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function ProfileView(){
        //kjo per shkak qe e mer rolin e adminit per profilin e log-um
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);

        return view('backend.user.view_profile', compact('admin'));
    }

    public function ProfileEdit(){
        //kjo per shkak qe e mer rolin e adminit per profilin e log-um
        $id = Auth::guard('admin')->user()->id;
        $editData = Admin::find($id);

        return view('backend.user.edit_profile', compact('editData'));
    }

    public function ProfileStore(Request $request){
        $data = Admin::find(Auth::guard('admin')->user()->id);
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> mobile = $request -> mobile;
        $data -> address = $request -> address;
        $data -> gender = $request -> gender;
        
        if($request -> file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/admin_images'.$data -> image));
            $filename = date('YmdHi').$file -> getClientOriginalName();
            $file -> move(public_path('upload/admin_images'),$filename);
            $data['image'] = $filename;
        }
        $data -> save();

        $notification = array(
            'message' => 'Profile updated successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('profile.view')->with($notification);
    }



    //Change Password

    public function PasswordView(){
        return view('backend.user.edit_password');
    }

    public function PasswordUpdate(Request $request){
        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::guard('admin')->user()->password;
        if(Hash::check($request -> oldpassword, $hashedPassword)){
            //50% sigurt
            $admin = Admin::find(Auth::guard('admin')->id());
            $admin -> password = Hash::make($request -> password);
            $admin -> save();
            Auth::guard('admin')->logout();
            return redirect() -> route('login');
        }else{
            return redirect() -> back();
        }
    }
}