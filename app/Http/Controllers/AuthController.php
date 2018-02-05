<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $guzzle = new Client;
        $response = $guzzle->get("http://server.reservina.ir/mobile?username=$request->email&password=$request->password");
        return $response;
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $guzzle = new Client;
        $response = $guzzle->post('http://server.reservina.ir/users', [
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);
        return $response;
    }
}
