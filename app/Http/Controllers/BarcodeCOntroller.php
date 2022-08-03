<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeCOntroller extends Controller
{
    public function index($id)
    {
        $data =  QrCode::format('png')->eye('circle')->style('dot')->merge('https://quantumusbminer.com/prime.png', 0.4, true)->eyeColor(0, 220, 20, 60, 0, 0, 0)->gradient(0, 0, 139, 153, 50, 204, 'radial')->size(400)->margin(3)->generate($id);

        return response()->make($data)->header("Content-Type", '.png');
    }
}
