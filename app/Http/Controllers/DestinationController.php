<?php

namespace App\Http\Controllers;
use App\Models\destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = destination::orderBy('id','desc')->paginate(10);
//        return view('destination.index', compact('destinations'));
        return [
            "status" => 1,
            "data" => $destinations
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
//        $validatedData=$request->validate([
//
//            'title_image' => 'required',
//            'stories_image' => 'required',
//        ]);
//        dd($request->all());
        $s_image = $request->file('stories_image');
        $t_image = $request->file('title_image');
        $qrfilename = time().'.png';
        $path = public_path('images');
        $s_image->move($path, $s_image->getClientOriginalName());
        $t_image->move($path, $t_image->getClientOriginalName());
        $destination = new destination();
        $destination['name'] = $request->name;
        $destination['slug']=Str::slug($request->input('name'), "-");
        $destination['stories'] = $request->stories;
        $destination['district'] = $request->district;
        $destination['zone'] = $request->zone;
        $destination['stories_image'] = $s_image->getClientOriginalName();
        $destination['title_image'] = $t_image->getClientOriginalName();
        $destination->qr = $qrfilename;
        $content = 'http://localhost:8000/destinationView/'.$destination['slug'];
        $writer = new Writer($renderer);

        $writer->writeFile($content, $qrfilename);
        $destination->save();
        return [
            "status" => 1,
            "data" => $destination
        ];

//        return redirect()->route('destination.index')->with('success','destination has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(destination $destination)
    {
        return view('destination.show',compact('destination'));
        return [
            "status" => 1,
            "data" => $destination
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(destination $destination)
    {
//        dump($destination);
//        return view('destination.edit',compact('destination'));
//       $destination_info = destination::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destination $destination)
    {
        $request->validate([
            'name' => 'required',
            'stories' => 'required',
        ]);

        $destination->fill($request->post())->save();
        return [
            "status" => 1,
            "data" => $destination,
            "msg" => "Destination updated successfully"
        ];

        return redirect()->route('destination.index')->with('success','destination Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(destination $destination)
    {
        $destination->delete();
        return [
            "status" => 1,
            "data" => $destination,
            "msg" =>'Destination deleted successfully'
        ];
//        return redirect()->route('destination.index')->with('success','destination has been deleted successfully');
    }
}
