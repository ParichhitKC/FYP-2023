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
        $hotelG = HotelGallery::orderBy('id','desc')->paginate(5);
        return view('HotelG.index', compact('hotelG'));
        return [
            "status" => 1,
            "data" => $hotelG
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('$hotelG.create');
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
        $hotelG['Hotel_id'] = $request->Hotel_id;
        $hotelG['image_1'] = $image_1->getClientOriginalName();
        $hotelG['image_2'] = $image_2->getClientOriginalName();
        $hotelG['image_3'] = $image_3->getClientOriginalName();
        $hotelG['image_4'] = $image_4->getClientOriginalName();

        $hotelG->save();
        return [
            "status" => 1,
            "data" => $hotelG
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotelG
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotelG)
    {
        return [
            "status" => 1,
            "data" => $hotelG
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $Hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotelG)
    {
        return view('Hotel.edit',compact('$hotelG'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $Hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotelG)
    {
        $HotelG->fill($request->post())->save();
        return [
            "status" => 1,
            "data" => $hotelG,
            "msg" => "Hotel updated successfully"
        ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $Hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotelG)
    {
        $hotelG->delete();
        return [
            "status" => 1,
            "data" => $hotelG,
            "msg" =>'Hotel deleted successfully'
        ];

    }
}
