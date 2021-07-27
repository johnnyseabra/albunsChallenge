<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use GuzzleHttp\Client;

class AlbunsController extends Controller
{
    public function create(Request $request)
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
            
        return view('albuns.create')->with("artists", $body);
    }
    
    //Store new album
    public function store(Request $request)
    {
        
        Album::create
        ([
            "name" => $request->name,
            "year" => $request->year,
            "artist" => $request->artist
        ]);
        
        return("Album created!");
    }
    
    //Show album data
    public function show(Request $request, $id)
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
            
        $album = Album::findOrFail($id);
        return view('albuns.show', ['album' => $album])->with("artists", $body);
    }
    
    //Change album data
    public function change(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        
        $album->update
        ([
            "name" => $request->name,
            "year" => $request->year,
            "artist" => $request->artist
        ]);
        
        
        return "Album updated!";
    }
    
    //List by artist
    public function listByArtist(Request $request, $name)
    {
        
        $albuns = Album::where('artist', $name)->get();
        
        return view('albuns.list')->with("albuns", $albuns);
    }
    
}
