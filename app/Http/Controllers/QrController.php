<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function qr( Request $request){
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $qrfilename = time().'.png';

        $destination = new destination();
        $destination->name = $request->name;
        $destination->qr = $qrfilename;
        $content = 'http://localhost:8000/destionation/'.$request->slug;
        $writer = new Writer($renderer);

        $writer->writeFile($content, $qrfilename);

    }
}
