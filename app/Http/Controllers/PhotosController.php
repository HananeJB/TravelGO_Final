<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Image;

class PhotosController extends Controller
{
    public function view(){
        return view('photos');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $image = new Image;
        $image->image = $path;
        $activity = Activity::find($request->get('activity_id'));
        $activity->images()->save($image);




        return back()->with('success', 'Image has successfully uploaded!');
    }


    public function destroy(Image $image)
    {

        $image->delete();

        return back()
            ->with('success', 'Image deleted successfully');
    }

}
