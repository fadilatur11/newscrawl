<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

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
        $search = $article->search($keywords);
        return view('search.index',['search'=>$search,'keywords'=>$keywords]);
    }

    function more($keywords,$offset)
    {
        $article = new PostModel;
        $search = $article->searchmore($keywords,$offset);
        return response()->json($search);

    }

}
