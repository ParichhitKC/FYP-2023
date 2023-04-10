<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\hotel;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Str;


class BookingController extends Controller
{
    //
    public function index()
    {
        $booking = booking::orderBy('id','desc')->paginate(5);
        $destination = destination::all();
        $hotel=hotel::all();
        return view('booking.index', compact('booking','destination','hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destination = destination::all();
        $hotel=hotel::all();
        return view('booking.create')->with(compact('hotel', 'destination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $booking = new booking();
        $booking['room_type'] = $request->room_type;
//        $booking['slug']=Str::slug($request->input('booking_type'), "-");
        $booking['price'] = $request->price;
        $booking['start_date'] = $request->start_date;
        $booking['end_date'] = $request->end_date;
        $booking['destination_id'] = $request->destination_id;
        $booking['hotel_id'] = $request->hotel_id;

        $booking->save();
        dd($booking);

        return redirect()->route('booking.index')->with('success','booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        $destination = destination::all();
        $hotel=hotel::all();
        return view('booking.edit',compact('booking','destination','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        $request->validate([
            'booking_type' => 'required',
        ]);

        $booking->update($request->all());

        return redirect()->route('booking.index')->with('success','booking Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('success','booking has been deleted successfully');
    }
}
