<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $article = new PostModel;

        return view('home.index', [
            'getarticle' => $article->article(),
            'slider' => $article->slider()
        ]);
    }

    /**
     * more
     *
     * @param  mixed $offset
     * @return void
     */
    public function more($offset)
    {
        $article = new PostModel;

        return response()->json($article->more($offset));
    }

    /**
     * sitemap
     *
     * @return void
     */
    public function sitemap()
    {
        $article = new PostModel;

        return response()->view('home.sitemap', ['sitemap' => $article->sitemap()])
                         ->header('Content-Type', 'text/xml');
    }

}
