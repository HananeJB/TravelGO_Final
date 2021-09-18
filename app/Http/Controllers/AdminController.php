<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\User;

use App\Http\Booking;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = DB::table('bookings')
            ->get();

        $users = DB::table('users')
            ->get();

        $activities = DB::table('activities')
            ->get();

        return view('backend.dashboard', compact('bookings','users','activities'));
    }

    public function profile()
    {
        return view('backend.profile');
    }

    public function users(){
        $users = DB::table("users")->get();
        return view('backend/usertable', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()
            ->with('success', 'User deleted successfully');
    }

}
