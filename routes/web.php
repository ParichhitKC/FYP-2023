<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HotelGController;
use App\Http\Controllers\ActivityController;
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

    Route::resource('/destination', DestinationController::class)->middleware('is_admin');
    Route::resource('/hotel', HotelController::class)->middleware('is_admin');;
    Route::resource('/room', RoomController::class)->middleware('is_admin');;
Route::resource('/hotelG', HotelGController::class)->middleware('is_admin');
Route::resource('/activity', ActivityController::class)->middleware('is_admin');
    Route::get('/', [App\Http\Controllers\FrontendController::class,'home'])->name('welcome');

    Auth::routes();


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/location', [App\Http\Controllers\FrontendController::class, 'destination'])->name('front.destination');
    Route::get('/hotel-single', [App\Http\Controllers\FrontendController::class, 'hotel'])->name('front.hotel');
    Route::get('/hotel-list', [App\Http\Controllers\FrontendController::class, 'hotelList'])->name('front.hotelList');
    Route::get('/destination-list', [App\Http\Controllers\FrontendController::class, 'destinationList'])->name('front.destinationList');
    Route::get('/hotelView/{slug}', [App\Http\Controllers\FrontendController::class, 'viewHotel'])->name('front.viewHotel');
    Route::get('/destinationView/{slug}', [App\Http\Controllers\FrontendController::class, 'viewDestination'])->name('front.viewDestination');
    Route::get('/activityView/{slug}', [App\Http\Controllers\FrontendController::class, 'activity'])->name('front.activity');
    Route::get('/booking/{id}',[App\Http\Controllers\FrontendController::class,'booking'])->name('front.booking');

Auth::routes();
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/test/{slug}',[FrontendController::class,'selectDate'])->name('front.check');
Route::post('/confirm',[FrontendController::class,'room_booking'])->name('front.confirm');
Route::get('/profile',[FrontendController::class,'profile'])->name('front.profile');
Route::post('/updatePassword',[FrontendController::class,'updateProfile'])->name('updateProfile');
Route::get('/history',[FrontendController::class,'bookingHistory'])->name('bookingHistory');
Route::get('/invoice/{id}',[FrontendController::class,'viewInvoice'])->name('booking.viewInvoice');
Route::get('/contact',[FrontendController::class,'contact'])->name('front.contact');
Route::post('/contact/submit',[FrontendController::class,'submitContact'])->name('front.contact.submit');
Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*')->middleware('is_admin');
