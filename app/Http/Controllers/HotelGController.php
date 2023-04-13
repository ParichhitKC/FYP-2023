<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\HotelGallery;
use Illuminate\Http\Request;

class HotelGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = hotel::all();
        $hotelG = HotelGallery::orderBy('id','desc')->paginate(5);
        return view('HotelG.index', compact('hotelG','hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel =hotel::all();
        return view('hotelG.create',compact('hotel'));
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

            'image_1' => 'required',
            'image_2' => 'required',
            'image_3' => 'required',
            'image_4' => 'required',
        ]);
        $image_1 = $request->file('image_1');
        $image_2 = $request->file('image_2');
        $image_3 = $request->file('image_3');
        $image_4 = $request->file('image_4');
        $path = public_path('images');
        $image_1->move($path, $image_1->getClientOriginalName());
        $image_2->move($path, $image_2->getClientOriginalName());
        $image_3->move($path, $image_3->getClientOriginalName());
        $image_4->move($path, $image_4->getClientOriginalName());
        $hotelG = new HotelGallery();
        $hotelG['hotel_id'] = $request->hotel_id;
        $hotelG['image_1'] = $image_1->getClientOriginalName();
        $hotelG['image_2'] = $image_2->getClientOriginalName();
        $hotelG['image_3'] = $image_3->getClientOriginalName();
        $hotelG['image_4'] = $image_4->getClientOriginalName();
        $hotelG->save();
        return redirect()->route('hotelG.index')->with('success','hotel gallery has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HotelG  $hotelG
     * @return \Illuminate\Http\Response
     */
    public function show(HotelGallery $hotelG)
    {
        return view('hotelG.show',compact('hotelG'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelG  $hotelG
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelGallery $hotelG)
    {
        $hotel = hotel::all();
        return view('hotelG.edit',compact('hotelG','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotelG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotelG $hotelG)
    {
        $hotelG->update($request->all());

        return redirect()->route('hotelG.index')->with('success','Hotel Gallery Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotelG  $hotelG
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelGallery $hotelG)
    {
        $hotelG->delete();
        return redirect()->route('hotelG.index')->with('success','hotel has been deleted successfully');

    }
}
