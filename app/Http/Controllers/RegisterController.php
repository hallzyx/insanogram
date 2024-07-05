<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('name'));
    
        //Vamo a validar los parametros de registro de usuario
        $validateData=$request->validate([
            'name'=>'required|string|min:5|unique:users',
            'fullname'=>'required|string|max:5',
            'email'=>'required|string|email|min:5|unique:users',
            'password'=>'required|string|min:4|confirmed'
        ]);

        User::create([
            'name'=>Str::lower($validateData['name']),
            'fullname'=>$validateData['fullname'],
            'email'=>$validateData['email'],
            'password'=>Hash::make($validateData['password']),

        ]);
        return redirect()->route('login');
    }
}
