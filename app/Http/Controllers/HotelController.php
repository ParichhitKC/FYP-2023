<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotel;
use Illuminate\Support\Str;
use App\Models\destination;

class HotelController extends Controller
{
    //
    public function index()
    {
        $hotel = hotel::orderBy('id','desc')->paginate(5);
        $destination = destination::all();
//        dd($destination);
        return view('hotel.index', compact('hotel','destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destination= destination::all();
        return view('hotel.create')->with(compact('destination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([

            'hotel_image' => 'required',

        ]);
//        dd($request->all());
        $h_image = $request->file('hotel_image');
        $path = public_path('images');
        $h_image->move($path, $h_image->getClientOriginalName());
        $hotel = new hotel();
        $hotel['title'] = $request->title;
        $hotel['slug']=Str::slug($request->input('title'), "-");
        $hotel['destination_id'] = $request->destination_id;
        $hotel['hotel_image'] = $h_image->getClientOriginalName();
        $hotel->save();

        return redirect()->route('hotel.index')->with('success','hotel has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        return view('hotel.show',compact('hotel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        $destination = destination::all();
        return view('hotel.edit',compact('hotel', 'destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        $request->validate([
            'title' => 'required',
            'destination_id' => 'required',

        ]);

        $hotel->update($request->all());

        return redirect()->route('hotel.index')->with('success','Hotel Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('hotel.index')->with('success','hotel has been deleted successfully');
    }
}
