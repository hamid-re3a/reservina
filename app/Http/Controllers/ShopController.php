<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index(){
        $url = "http://server.reservina.ir/shops?page=1";
        $data = json_decode(file_get_contents($url));
        if($data->result_code == 200){
            $shops = $data->data;
            return view('shop.index',compact('shops'));
        }
    }

    public function show($id){
        $url = "http://server.reservina.ir/shops/$id";
        $data = json_decode(file_get_contents($url));
        if($data->result_code == 200){
            $shop = $data->data;
            return view('shop.show',compact('shop'));
        }
    }
}
