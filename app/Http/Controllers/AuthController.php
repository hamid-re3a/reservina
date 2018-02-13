<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function logout(){
        Session::forget('access_token');
        return back()->withCookie(Cookie::forget('access_token'));
    }

    public static function guest(){
        if(Session::has('access_token'))
            return false;
        return true;
    }

    public static function check(){
        if(Session::has('access_token'))
            return true;
        elseif(Cookie::has('access_token')){
            $token = Cookie::get('access_token');
            Session::put('access_token',$token);
            return response()->json(['content'=>'success']);
        }
        return false;
    }

    public static function user(){
        return 'user';
    }
}