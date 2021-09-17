<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activity = DB::table("bookings")->get();
        $data['cities'] = City::orderBy('id','desc')->paginate(5);

        return view('backend.cities.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $path = $request->file('image')->store('public/images');

        $city = new City;

        $city->title = $request->title;
        $city->country = $request->country;

        $city->image = $path;

        $city->save();


        return redirect()->route('cities.index')
            ->with('success','City has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('backend.cities.show',compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('backend.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',

        ]);

        $city = City::find($id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $city->image = $path;
        }

        $city->title = $request->title;

        $city->save();

        return redirect()->route('cities.index')
            ->with('success','City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')
            ->with('success','City has been deleted successfully');
    }
}
