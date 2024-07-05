<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use APP\Models\User;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('wasa',[
            'userInsano'=>$user,
        ]);
    }
}
