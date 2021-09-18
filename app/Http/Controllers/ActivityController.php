<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\City;

use App\Models\Day;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('backend.activities.index', compact('activities'))
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
        return view('backend.activities.create', compact('cities', $cities));
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
            'city_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'price' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'adresse' => 'required',
            'program' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();


        if ($image = $request->file('cover')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }

        Activity::create($input);



        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['activity_id']=$request->get('activity_id');
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());

            }
        }



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
        return view('backend.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('backend.activities.edit', compact('activity'));
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
            'program' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'price' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'adresse' => 'required'

        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }else{
            unset($input['cover']);
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

        return redirect()->back()
            ->with('success', 'Activity deleted successfully');


    }
    public function destroyimage(Image $image)
    {
        $image->delete();

        return back()
            ->with('success', 'Image deleted successfully');

    }
}
