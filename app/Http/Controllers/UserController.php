<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function dashboard()
    {

    }

    public function reservations()
    {
        $data = DB::table("bookings")
            ->join('users', 'users.email', '=', 'bookings.email')
            ->get();

        return view('home/reservations', compact('data'));
    }

    public function profile()
    {
        $data1 = DB::table("bookings")
            ->join('users', 'users.email', '=', 'bookings.email')
            ->get();
        $data = DB::table('users')->get();
        return view('home/profile', compact('data', 'data1'));
    }
}
