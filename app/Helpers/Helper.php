<?php

namespace App\Helpers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
class Helper
{
    /**
     * @param $url_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function makeApiCalls($url_params)
    {
        try {
            $client = new Client();
            $apiRequest = $client->request('GET', env('LYRICS_API_URL') .$url_params.'&apikey=' . env('LYRICS_API_KEY'));
            return json_decode($apiRequest->getBody()->getContents(), true);
        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}