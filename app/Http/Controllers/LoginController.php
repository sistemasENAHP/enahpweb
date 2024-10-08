<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
class LoginController extends Controller
{
    public function index(Request $request){


        $ip = $request->ip();
        $User = User::all();


    return view('auth.login',compact('User','ip'));

    }
}
