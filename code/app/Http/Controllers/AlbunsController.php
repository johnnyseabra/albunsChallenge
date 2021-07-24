<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbunsController extends Controller
{
    public function create()
    {
        return view('albuns.create');
    }
}
