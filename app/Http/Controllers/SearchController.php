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
            'keywords' => $keywords
        ]);
    }

    function more($keywords,$offset)
    {
        $article = new PostModel;
        $data = $article->searchmore($keywords, $offset);
        $html = '';
        foreach ($data as $value) {
            $html .= "<div class='row'>
                        <div class='col-50'>
                            <div class='content'>
                            <a class='external' href=".url('/detail').'/'.$value['id'].'/'.$value['slug'].">
                                <img src=".$value['image']." alt=".$value['title'].">
                            </a>
                        </div>
                        </div>
                            <div class='col-50'>
                                <div class='content-text'>
                                    <span>".$value['author']."</span>
                                    <a class='external' href=".url('/detail').'/'.$value['id'].'/'.$value['slug']."><h5>".$value['title']."</h5></a>
                                    <p class='date'>".Carbon::parse(date('Y-m-d',$value['published_at']))->diffForHumans()."</p>
                                </div>
                            </div>
                    </div>";
        }
        return response()->json($html);
    }

}
