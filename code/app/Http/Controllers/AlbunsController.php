<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbunsController extends Controller
{
    public function create()
    {
        return view('albuns.create');
    }
    
    //Store new album
    public function store(Request $request)
    {
        
        Album::create([
            "name" => $request->name,
            "year" => $request->year,
            "artist" => $request->artist
        ]);
        
        return("Album created!");
    }
    
    //Show album data
    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('albuns.show', ['album' => $album]);
    }
    
    //Change album data
    public function change(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        
        $album->update([
            "name" => $request->name,
            "year" => $request->year,
            "artist" => $request->artist
        ]);
        
        
        return "Album updated!";
    }
}
