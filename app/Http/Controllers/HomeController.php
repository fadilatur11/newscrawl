<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use Carbon\Carbon;

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
    public function more($offset,$limit)
    {
        $article = new PostModel;

        return view('home.more', [
            'articles' => $article->more($offset,$limit)
        ]);
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
