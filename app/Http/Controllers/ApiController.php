<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class ApiController extends Controller
{
    public function __construct(Api $api)
    {
        $this->middleware('auth');
        $this->api = $api;
    }

    public function getTrack(Request $reguest)
    {
        $result = $this->api->track($reguest->track_name);

        $tracks = $result['message']['body']['track_list'];

        return view('search_track', compact('tracks'));
    }

    public function getToTenNigeriaSongs(Request $reguest)
    {
        $country = "NG";
        if(!empty($reguest->country))
        {
            $country = $reguest->country;
        }

        $result = $this->api->getToTenNigeriaSongs($country);

        $tracks = $result['message']['body']['track_list'];

        return view('nigeria_songs', compact('tracks'));
    }

    public function getSingleSong($id)
    {
        $result = $this->api->getSong($id);

        return view('song', compact('result'));
    }
}
