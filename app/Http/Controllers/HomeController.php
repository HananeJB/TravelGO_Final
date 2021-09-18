<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

use App\Models\Activity;
use App\Models\Day;
use App\Models\Booking;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = DB::table("activities")
            ->get();
        $city = DB::table("cities")
            ->get();
        return view('frontend/main_pages/home', compact('activities', 'city'));
    }

    /** Start Blog **/

    public function BlogList()
    {
        $posts = Post::all();
        return view('frontend.blog.blog', compact('posts'));
    }

    public function BlogSingle($id)
    {
        $posts = Post::find($id)->first();
        return view('frontend.blog.blog_single', compact('posts'));
    }

    /** End Blog**/


    public function offerscity($city)
    {
        $activities = DB::table("activities")
            ->where('city' == $city)
            ->get();
        $activity = Activity::find($city);

        return view('home/activities', ['activity' => $activity, 'city' => $city], compact('activity', 'city', 'activities'));
    }

    public function offers()
    {
        $activities = DB::table("activities")
            ->get();
        return view('home/activities', compact('activities'));
    }


    public function showDetail($id)
    {
        $activity = Activity::find($id);
        return view('home/details', ['activity' => $activity, 'id' => $id], compact('activity', 'id'));
    }

    public function about()
    {
        return view('frontend/secondary_pages/about');
    }

    public function terms()
    {
        return view('frontend/secondary_pages/terms');
    }

    public function addtolist(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
        ]);

        $email=$request->email;
        $results = DB::insert('insert into subscribers (email) values (?)', [$email]);
        if ($results && $validation){
            return Redirect::to('/home' . "#newsletter")->with('news_message', 'From now on you will be lucky to receive our newsletters, tips and offers');
        }else{
            return Redirect::to(URL::previous() . "#newsletter")->with('news_message', 'Oops, something went wrong, try again later meh :/');
        }


    }

}
