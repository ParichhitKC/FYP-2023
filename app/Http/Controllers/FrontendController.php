<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\destination;
use App\Models\hotel;
use App\Models\HotelGallery;
use App\Models\Room;
use Carbon\CarbonPeriod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;

class FrontendController extends Controller
{
    public function home(Request $request)
    {
        $popular_destination = destination::orderBy('views', 'desc')->take(5)->get();
        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');
        return view('welcome')->with(compact('popular_destination','checkoutDate','checkinDate'));
    }

    public function hotelList()
    {
        $hotels = hotel::get();
        $destination = destination::all();
        return view('frontend.hotel-list')->with(compact('hotels', 'destination'));
    }

    public function destinationList()
    {
        $destination = destination::get();
        return view('frontend.destination-list')->with(compact('destination'));
    }

    public function selectDate(Request $request)
    {
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $checkinDate = $request->session()->put('checkin', $checkin);
        $checkoutDate = $request->session()->put('checkout', $checkout);
        return redirect()->back();
    }

    public function viewHotel(Request $request, $slug)
    {

        $hotel = hotel::where('slug', $slug)->first();
        $gallery = HotelGallery::where('hotel_id', $hotel->id)->first();
//        $room=Room::where('hotel_id',$hotel->id)->get();


//        $hotel=hotel::first();
        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');

        $availableRooms = Room::where('hotel_id', $hotel->id)
            ->whereDoesntHave('Booking', function ($query) use ($checkinDate, $checkoutDate) {
                $query->whereBetween('checkin', [$checkinDate, $checkoutDate])
                    ->orWhereBetween('checkout', [$checkinDate, $checkoutDate]);
            })->get();


        return view('frontend.hotel')->with(compact('hotel', 'availableRooms', 'checkinDate', 'checkoutDate','gallery'));
    }
    public function activity( $slug){
        $activity = Activity::where('slug', $slug)->first();
        return view('frontend.activity')->with(compact('activity','slug'));
    }
    public function viewDestination($slug)
    {
        $destinations = destination::where('slug', $slug)->first();
        $destinations->views++;
        $destinations->save();
        $hotels = hotel::where('destination_id', $destinations->id)->get();
        $activity = Activity::where('destination_id', $destinations->id)->get();
//        $hotels=hotel::first();
//        $room=Room::where('hotel_id',$hotels->id)->get();
        return view('frontend.destination')->with(compact('destinations', 'hotels','activity'));

    }

    public function profile()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();
        return view('frontend.profile')->with(compact('user'));
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
    public function booking($id, Request $request)
    {
        $room = Room::find($id);
        $checkinDate = carbon::parse($request->session()->get('checkin'));
        $checkoutDate = carbon::parse($request->session()->get('checkout'));
        $duration = $checkoutDate->diffInDays($checkinDate);
        return view('Frontend.booking')->with(compact('room', 'checkinDate', 'checkoutDate','duration'));
    }

    public function room_booking(Request $request)
    {

        $checkinDate = $request->session()->get('checkin');
        $checkoutDate = $request->session()->get('checkout');
        $booking = new Booking;
        if (Auth::check()){
            $booking->user_id = Auth::user()->id;
        }
        else{
            $booking->user_id = $request['user_id'];}
        $booking->room_id = $request['room_id'];
        $booking->total = $request['total'];
        $booking->checkin = $checkinDate;
        $booking->checkout = $checkoutDate;
        $booking->hotel_id = $request['hotel_id'];
        $booking->save();

        return redirect('/');
    }


    public function updateProfile(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//            'current_password' => 'required',
//            'password' => 'required|same:confirm_password',
//            'confirm_password' => 'required',
//        ]);
//        dd($request->all());

        $user = User::find(Auth::user()->id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $userPassword = $user->password;
//        dd((Hash::check($request->current_password,$user->password)));
        if ($request['password'] == $request['confirm_password']) {
            if (Hash::check($request->current_password, $user->password) == true) {
                $user->password = Hash::make($request->input('password'));

            } else {
                return back()->withErrors(['current_password' => 'Your current password do not match.']);
            }
        } else {
            return redirect()->back()->withErrors(['current_password' => 'Your new password and confirmed password do not match.']);
        }

        $user->save();

        return redirect()->route('front.profile')
            ->with('success', 'Profile updated successfully');
    }
    public function bookingHistory(){
        $user_id = Auth()->user()->id;
        $booking = Booking::where('user_id',$user_id)->get();
//        dd($booking);
        return view('frontend.bookingHistory')->with(compact('booking'));
    }

    public function viewInvoice(Request $request,$id){
        $booking = Booking::find($id)->first();
        return view('frontend.invoice')->with(compact('booking'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function submitContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect()->back();
    }

}
