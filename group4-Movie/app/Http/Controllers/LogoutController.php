<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LogoutController extends Controller
{
    public function logout (){
        \Auth::logout();
        return view ('auth/login');
    }
}
