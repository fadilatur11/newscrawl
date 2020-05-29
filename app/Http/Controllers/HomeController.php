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
        $data = $article->more($offset,$limit);
        $html = '';
        foreach ($data as $value) {
            $html .= '<div class="row">
            <div class="col-50">
                <div class="content">
                    <a class="external" href="">
                        <img src='.$value["image"].' alt='.$value["title"].'>
                    </a>
                    </div>
                </div>
            <div class="col-50">
        <div class="content-text">
            <span></span>
                <a class="external" href=""><h5>'.$value["title"].'</h5></a>
                <p class="date">'.Carbon::parse(date('Y-m-d',$value['published_at']))->diffForHumans().'</p>
                </div>
            </div>
        </div>';
        }
        return response()->json($html);
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
