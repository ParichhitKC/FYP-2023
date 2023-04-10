<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\destination;
use App\Models\hotel;
use App\Models\Room;
use Carbon\CarbonPeriod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;


class FrontendController extends Controller
{
    public function home(){
        $popular_destination = destination::orderBy('views','desc')->take(5)->get();
        return view('welcome')->with(compact('popular_destination'));
    }

    public function hotelList(){
        $hotels = hotel::get();
        $destination = destination::all();
        return view('frontend.hotel-list')->with(compact('hotels','destination'));
    }
    public function destinationList(){
        $destination = destination::get();
        return view('frontend.destination-list')->with(compact('destination'));
    }
    public function selectDate(Request $request){
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $checkinDate = $request->session()->put('checkin',$checkin);
        $checkoutDate = $request->session()->put('checkout',$checkout);
        return redirect()->back();
    }
    public function viewHotel(Request $request,$slug){
        $hotel = hotel::where('slug',$slug)->first();
//        $room=Room::where('hotel_id',$hotel->id)->get();


//        $hotel=hotel::first();
        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');

        $availableRooms = Room::where('hotel_id', $hotel->id)
            ->whereDoesntHave('Booking', function ($query) use ($checkinDate, $checkoutDate) {
                $query->whereBetween('checkin', [$checkinDate, $checkoutDate])
                    ->orWhereBetween('checkout', [$checkinDate, $checkoutDate]);
            })->get();




        return view('frontend.hotel')->with(compact('hotel','availableRooms','checkinDate','checkoutDate'));
    }
    public function viewDestination($slug)
    {
        $destinations = destination::where('slug', $slug)->first();
        $destinations->views++;
        $destinations->save();
        $hotels = hotel::where('destination_id', $destinations->id)->get();
//        $hotels=hotel::first();
//        $room=Room::where('hotel_id',$hotels->id)->get();
        return view('frontend.destination')->with(compact('destinations', 'hotels'));

    }

    public function profile(){
        return view('frontend.profile');
    }

//    public function checkAvailability(Request $request)
//    {
//        $checkin = Carbon::parse($request->input('checkin'));
//        $checkout = Carbon::parse($request->input('checkout'));
////        dd($request->all());
//        $hotel = hotel::first();
//
//
//        $availableRooms = Room::where('hotel_id', $hotel->id)
//            ->whereDoesntHave('Booking', function ($query) use ($checkin, $checkout) {
//                $query->whereBetween('checkin', [$checkin, $checkout])
//                    ->orWhereBetween('checkout', [$checkin, $checkout]);
//            })->get();
//
//        return response()->json($availableRooms);
//
//
//    }
    public function booking($id, Request $request ){
        $room=Room::find($id);
        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');

        return view('Frontend.booking')->with(compact('room','checkinDate','checkoutDate'));
    }

    public function room_booking( Request $request){

        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');

        $booking = new Booking;
        $booking->room_id = $request['room_id'];
        $booking->user_id = Auth::user()->id;
        $booking->checkin = $checkinDate;
        $booking->checkout = $checkoutDate;
        $booking->hotel_id = $request['hotel_id'];
        $booking->save();

        return redirect('/');
    }
}
