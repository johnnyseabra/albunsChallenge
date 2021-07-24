<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    
    //Render view
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        Users::create([
            "name" => $request->name,
            "username" => $request->username,
            "password" => md5($request->password),
            "role" => $request->role
        ]);
        
        return("User created!");
    }
    
}
