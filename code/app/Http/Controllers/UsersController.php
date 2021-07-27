<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        return("User created!");
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
            
            return("Usuário logado");
            dd("Criar sessão");
        }
        
    
    
    /*
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required']
        ]);
        
        
        //dd($request);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password ])) {
            $request->session()->regenerate();
            dd("aqui");
            return("Login ok");
        }
        
        dd("Não foi login");
        //TODO: VERIFICAR MENSAGEM DE RETORNO
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]); */
    }
    
    
}
