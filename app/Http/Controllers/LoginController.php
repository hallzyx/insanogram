<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        
        if(auth()->check()){
           return redirect()->route('post.index');
        }
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $validateData=$request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);


        $init_sesion=auth()->attempt([
            'name'=>$validateData['name'],
            'password'=>$validateData['password'],
        ],$request['rememberPass']);
        if($init_sesion){
            return redirect()->route('post.index');
        }else{
            return back()->with('invalidCred_msg','Credenciales invalidas');
        }

        
    
    }
}
