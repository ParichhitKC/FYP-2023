<?php

namespace App\Http\Controllers;
use App\Models\destination;
use App\Models\DestinationGallery;
use Illuminate\Http\Request;

class DestinationGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinationG = DestinationGallery::orderBy('id','desc')->paginate(5);
        return view('destinationG.index', compact('destinationG'));
        return [
            "status" => 1,
            "data" => $destinationG
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinationG.create');
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
        $destinationG = new destinationGallery();
        $destinationG['destination_id'] = $request->destination_id;
        $destinationG['image_1'] = $image_1->getClientOriginalName();
        $destinationG['image_2'] = $image_2->getClientOriginalName();
        $destinationG['image_3'] = $image_3->getClientOriginalName();
        $destinationG['image_4'] = $image_4->getClientOriginalName();

        $destinationG->save();
        return [
            "status" => 1,
            "data" => $destinationG
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(destination $destinationG)
    {
        return [
            "status" => 1,
            "data" => $destinationG
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(destination $destinationG)
    {
        return view('destination.edit',compact('destinationG'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destination $destinationG)
    {
        $destinationG->fill($request->post())->save();
        return [
            "status" => 1,
            "data" => $destinationG,
            "msg" => "Destination updated successfully"
        ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(destination $destinationG)
    {
        $destinationG->delete();
        return [
            "status" => 1,
            "data" => $destinationG,
            "msg" =>'Destination deleted successfully'
        ];

    }
}
