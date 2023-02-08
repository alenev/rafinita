<?php

namespace App\Helpers;

class RafinitaApiHelper
{
    public static function post($request)
    {

        $url = env('RAFINITA_API_URL') . 'post';
        $data = $request->all();
        $client = new \GuzzleHttp\Client(['http_errors' => false]);
        $response = $client->post($url, $data);
        $response_status = $response->getStatusCode();
        $response_data = json_decode($response->getBody());
        $response_data->url = $url;
        $output_data = [
            'data' => $response_data,
            'status' => $response_status
        ];

        return $output_data;
    }
}
