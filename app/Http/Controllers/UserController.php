<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function admin() {

        return view('backend.profile')->withUser(Auth::user());
    }

    public function dashboard() {

        return view('frontend.profile.profile')->withUser(Auth::user());
    }

    public function updateUserProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = request()->input('name');
        $user->lastname = request()->input('lastname');
        $user->telephone = request()->input('telephone');
        $user->email =  request()->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();


        return redirect()->back();
    }

}
