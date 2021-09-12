<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PhotosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

/** HomeController **/
Route::get('/', function () {return redirect('/home');});
Route::get('/home', [HomeController::class,"index"])->name('home');
Route::get('/offers', [HomeController::class,"offers"]);
Route::get('/offers/{city}', [HomeController::class,"offerscity"]);
Route::get('/about', [HomeController::class,"about"]);
Route::get('/terms_and_conditions', [HomeController::class,"terms"]);
Route::get('/details/{id}', [HomeController::class,"showDetail"]);
Route::get('/profile', [HomeController::class,"Profile"]);
Route::get('/yourbookings', [HomeController::class,"reservations"]);
Route::post('/send-message',[HomeController::class,"sendEmail"])->name('contact.send');
Route::get('/payments/{id}', [BookingController::class,"showDetail"]);
Route::post('/addtolist',[HomeController::class,"addtolist"])->name('addtolist');

/** AdminController **/
Route::get('/admin', [AdminController::class,"handleAdmin"])->name('admin.route')->middleware('admin');
Route::get('/users', [AdminController::class,"users"])->middleware('admin');
Route::post('/users/store', [DayController::class,"store"])->name('users.add');
Route::post('/day/store', [DayController::class,"store"])->name('day.add');
Route::delete('/day/{day}', [DayController::class,"destroy"])->name('days.destroy');
Route::delete('/user/{user}', [DayController::class,"destroy"])->name('users.destroy');
Route::post('/photos/store',[PhotosController::class,"store"])->name('photos/store');
Route::delete('/image/{image}',[PhotosController::class,'destroy'])->name('images.destroy');
Route::put('/update/{id}',[ActivityController::class,'update']);
Route::get('/profil', [AdminController::class,"profileadmin"])->middleware('admin');

//Route::resource('/admin/activities', [AdminController::class,"activities"]);
//Route::resource('/admin/users', [AdminController::class,"users"]);
//Route::resource('/admin/bookings', [AdminController::class,"bookings"]);

/** Resources **/
Route::resource('/activities', ActivityController::class)->middleware('admin');
Route::resource('/bookings', BookingController::class);
Route::resource('/cities', CityController::class);

/** Contact **/
Route::get("/contact", [MailerController::class, "email"])->name("email");
Route::post("/send-email", [MailerController::class, "composeEmail"])->name("send-email");
