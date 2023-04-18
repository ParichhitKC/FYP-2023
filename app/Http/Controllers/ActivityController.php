<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\hotel;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Room;
use Illuminate\Support\Str;


class ActivityController extends Controller
{
    //
    public function index()
    {
        $activity = Activity::orderBy('id','desc')->paginate(5);
        $destination = destination::all();
        return view('activity.index', compact('activity','destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destination = destination::all();
        return view('activity.create')->with(compact( 'destination'));
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

//        dd($request->all());
        $activity = new Activity();
        $activity['name']= $request->name;
        $activity['description']= $request->description;
        $activity['slug']=Str::slug($request->input('name'), "-");
        $activity['price'] = $request->price;
        $activity['start_date'] = $request->start_date;
        $activity['end_date'] = $request->end_date;
        $activity['destination_id'] = $request->destination_id;
        $activity['image_1'] = $image_1->getClientOriginalName();
        $activity['image_2'] = $image_2->getClientOriginalName();
        $activity['image_3'] = $image_3->getClientOriginalName();
        $activity['image_4'] = $image_4->getClientOriginalName();
        $activity->save();
//        dd($activity);

        return redirect()->route('activity.index')->with('success','activity has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activity.show',compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        $destination = destination::all();
        $hotel=hotel::all();
        return view('activity.edit',compact('activity','destination','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
//        $request->validate([
//            'activity_type' => 'required',
//        ]);

        $activity->update($request->all());

        return redirect()->route('activity.index')->with('success','activity Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activity.index')->with('success','activity has been deleted successfully');
    }
}
