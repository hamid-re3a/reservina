<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Collection;

class ShopController extends Controller
{
    public function index(){
        if(request()->has('page'))
            $page = request('page');
        else
            $page = 1;
        $url = "http://server.reservina.ir/shops?page=$page";
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

            $personnels = $shop->personnel;

            $services = new Collection();

            foreach ($personnels as $personnel){
                $url = "http://server.reservina.ir/shop_personnel/$personnel->personnel_id";
                $data = json_decode(file_get_contents($url));
                $pServices = $data->data->services;
                foreach ($pServices as $service){
                    $service->personnel_name = $personnel->first_name.' '.$personnel->last_name;
                    $service->personnel_id = $personnel->personnel_id;

                    $services->push($service);
                }
            }

            return view('shop.show',compact('shop','services'));
        }
    }
}
