<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Users;

class UsersController extends Controller
{
    
    //Render register view
    public function create()
    {
        return view('users.create');
    }
    
    //Store new user
    public function store(Request $request)
    {
        Users::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => md5($request->password),
            'role' => $request->role
        ]);
        
        return Redirect::back()->with('msg', 'User created!');
    }
    
    //Render login view
    public function renderLogin()
    {
        return view('users.login');
    }
    
    //Do login 
    public function doLogin(Request $request)
    {  
        
        $user = Users::where('username', $request->username)->first();
        
        if($request->username == $user->username && md5($request->password) == $user->password)
        {
            $request->session()->put([ 'auth' => 'true', 'role' => $user->role ]);
            
            return Redirect::route('listArtists');
        }
        else 
        {
            return Redirect::back()->with('err', 'Sorry, we couldn\'t find an account with this username. Please check you\'re using the right username and try again.');
        }
 
    }
    
    //Do logout
    public function doLogout(Request $request)
    {
        $request->session()->flush();
        
        return Redirect::route('home');
    }
}
