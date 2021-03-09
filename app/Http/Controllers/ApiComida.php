<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiComida extends Controller
{
    public function api(){
        $client = new Client(); 
        $url = "https://www.themealdb.com/api/json/v1/1/random.php";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        return view('api.index', compact('responseBody'));
    }
}
