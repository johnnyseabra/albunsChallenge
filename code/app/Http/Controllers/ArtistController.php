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
            dd("Não tem sessão");
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
        
        $body = $response->getBody()->getContents();
        
        //$body = json_encode($body);
        //dd($body);          
        return view('artists.list')->with("artists", $body);
        //return view('artists.list', ["artist" => $body]);
    }
}
