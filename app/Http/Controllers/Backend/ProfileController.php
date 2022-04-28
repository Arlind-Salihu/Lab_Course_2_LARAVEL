<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function ProfileView(){
        //kjo per shkak qe e mer rolin e adminit per profilin e log-um
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);

        return view('backend.user.view_profile', compact('admin'));
    }
}
