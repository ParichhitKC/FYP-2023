<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\hotel;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Str;


class RoomController extends Controller
{
    //
    public function index()
    {
        $room = Room::orderBy('id','desc')->paginate(5);
        $destination = destination::all();
        $hotel=hotel::all();
        return view('room.index', compact('room','destination','hotel'));

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
        return view('room.create')->with(compact('hotel', 'destination'));
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

            'room_image' => 'required',

        ]);
//        dd($request->all());
        $r_image = $request->file('room_image');
        $path = public_path('images');
        $r_image->move($path, $r_image->getClientOriginalName());
        $room = new room();
        $room['room_type'] = $request->room_type;
//        $room['slug']=Str::slug($request->input('room_type'), "-");
        $room['price'] = $request->price;
        $room['hotel_id'] = $request->hotel_id;
        $room['room_image'] = $r_image->getClientOriginalName();
        $room->save();
//        dd($room);

        return redirect()->route('room.index')->with('success','room has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        return view('room.show',compact('room'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
        $hotel=hotel::all();
        return view('room.edit',compact('room','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        $request->validate([
            'room_type' => 'required',
        ]);

        $room->update($request->all());

        return redirect()->route('room.index')->with('success','room Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        $room->delete();
        return redirect()->route('room.index')->with('success','room has been deleted successfully');

    }
}
