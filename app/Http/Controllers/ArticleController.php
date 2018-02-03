<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index(){
        if(request()->has('page'))
            $page = request('page');
        else
            $page = 1;
        $url = "http://server.reservina.ir/articles?page=$page";
        $getArticles = json_decode(file_get_contents($url));
        $url = 'http://server.reservina.ir/tags';
        $getTags = json_decode(file_get_contents($url));
        if($getArticles->result_code == 200 && $getTags->result_code == 200){
            $articles = $getArticles->data;
            $tags = $getTags->data;
            return view('article.index',compact('articles','tags'));
        }
    }

    public function show(){
        return view('article.show');
    }
}
