<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\City;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::latest()->paginate(5);

        return view('activities.index', compact('activities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('title', 'id');
        return view('activities.create', compact('cities', $cities));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $activity = new Activity;

        $activity->title = $request->get('title');
        $activity->category = $request->get('category');
        $activity->description1 = $request->get('description1');
        $activity->description2 = $request->get('description2');
        $activity->price = $request->get('price');
        $activity->datedebut = $request->get('datedebut');
        $activity->datefin = $request->get('datefin');
        $activity->adresse = $request->get('adresse');
        $activity->video = $request->get('video');
        $path = $request->file('image')->store('public/images');

        $activity->image = $path;
        $cities = City::find($request->get('city_id'));
        $cities->activities()->save($activity);


        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {

        return view('activities.show', compact('activity'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'price' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'image' => 'required',
            'video' => 'required',
            'adresse' => 'required'

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage   = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $activity->update($input);

        return redirect()->route('activities.index')
            ->with('success', 'Activity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('activities.index')
            ->with('success', 'Activity deleted successfully');
    }
}
