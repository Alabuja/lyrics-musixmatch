<?php

namespace App;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Api extends Model
{
    /**
     * @param $newsSource
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function track($track_title)
    {
        $urlParams = 'track.search?q_track=' . $track_title.'&page=1&page_size=40';

        $response = (new Helper)->makeApiCalls($urlParams);

        return $response;
    }

    public static function getTrackLyrics($trackId)
    {
        $urlParams = 'track.lyrics.get?track_id=' . $trackId;

        $response = (new Helper)->makeApiCalls($urlParams);

        if(empty($response['message']['body']))
        {
            return "";
        }
        else
        {

            $result = $response['message']['body']['lyrics']['lyrics_body'];

            return $result;
        }
    }

    public function getSong($commonTrackId)
    {
        $urlParams = 'track.get?commontrack_id=' . $commonTrackId;

        $response = (new Helper)->makeApiCalls($urlParams);

        $result = $response['message']['body']['track'];

        return $result;
    }
    
    public function getToTenNigeriaSongs($country)
    {
        $urlParams = 'chart.tracks.get?country=' . $country.'&page_size=10&page=1&s_track_rating=desc';

        $response = (new Helper)->makeApiCalls($urlParams);

        return $response;
    }
    
}
