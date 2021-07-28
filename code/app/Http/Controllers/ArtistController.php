<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ArtistController extends Controller
{
    //
    
    public function list(Request $request)
    {
        
        if(!$request->session()->get('auth') == true)
        {
            dd("There is no Session");
        }
        
        $client = new Client();
        $response = $client->get('https://moat.ai/api/task/', [
            'headers' => [
                            'Basic' => 'ZGV2ZWxvcGVyOlpHVjJaV3h2Y0dWeQ=='
                         ],
            'verify' => false
        ]);
        
        if($response->getStatusCode() != 200)
           return "Erro na integração";
        
        $artists = json_decode($response->getBody()->getContents());
        
        return view('artists.list')->with("artists", $artists);
    }
}
