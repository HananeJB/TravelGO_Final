<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Booking;
use App\User;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Booking::latest()->paginate(5);

        return view('bookings.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {


        $activities = Activity::find('activity_id');
        return view('home.details', compact( 'activities'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $booking = new Booking;
        $booking->name = $request->get('name');
        $booking->lastname = $request->get('lastname');
        $booking->phone = $request->get('phone');
        $booking->email = $request->get('email');
        $booking->numpeople = $request->get('numpeople');
        $booking->roomtype = $request->get('roomtype');
        $activity = Activity::find($request->get('activity_id'));
        $activity->bookings()->save($booking);


        return back()->with('success','Booking created successfully!');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $booking->load( 'activity');
        return view('bookings.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'numpeople' => 'required',
            'roomtype' => 'required',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success','Booking deleted successfully');
    }
    public function showDetail($id)
    {
        $activity = Activity::find($id);

        return view('home/payments', ['activity' => $activity, 'id' => $id], compact('activity', 'id'));
    }



}
