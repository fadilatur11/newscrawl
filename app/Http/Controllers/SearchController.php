<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use Carbon\Carbon;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $keywords = $req->get('keywords');

        $article = new PostModel;

        return view('search.index', [
            'search' => $article->search($keywords),
            'searchCount' => PostModel::countSearch($keywords)->count(),
            'keywords' => $keywords
        ]);
    }

    function more($keywords,$offset)
    {
        $article = new PostModel;
        return view('search.more',['data'=>$article->searchmore($keywords, $offset)]);
    }

}
