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

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $client = new Client();
        $response = $client->post('http://server.reservina.ir/users', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
                'gender' => $request->gender
            ],
        ]);
        return $response;
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $client = new Client();
        $response = $client->get("http://server.reservina.ir/mobile?username=$request->username&password=$request->password");
        $result = json_decode($response->getBody());
        if($result->result_code == '200'){
            $token = $result->data->access_token;
            Session::put('access_token',$token);
            if($request->remember == 'on')
                return back()->withCookie('access_token',$token);
            return back();
        }
        return back()->withErrors($result->result_message);
    }

    public function logout(){
        Session::forget('access_token');
        if(Cookie::has('access_token'))
            return redirect('/')->withCookie(Cookie::forget('access_token'));
        return redirect('/');
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
            return true;
        }
        return false;
    }

    public static function user(){
        $accessToken = Session::get('access_token');
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://server.reservina.ir/users',
            ['headers' => [
                'Authorization' => 'Bearer '. $accessToken
            ],
        ]);
        $result = json_decode($response->getBody());
        if($result->result_code == '200')
            return $result->data;
        return false;
    }
}