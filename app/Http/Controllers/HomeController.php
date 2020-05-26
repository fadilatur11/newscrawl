<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = new PostModel;
        $getdata = $article->article();
        $slider = $article->slider();
        return view('home.index',['getarticle'=>$getdata,'slider'=>$slider]);
    }

    public function more($offset)
    {
        $article = new PostModel;
        $more = $article->more($offset);
        return response()->json($more);
    }

    public function sitemap()
    {
        $article = new PostModel;
        $sitemap = $article->sitemap();
        return response()->view('home.sitemap', ['sitemap'=>$sitemap])->header('Content-Type', 'text/xml');
    }

}
