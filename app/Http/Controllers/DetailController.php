<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $article = new PostModel;
        return view('detail.index', [
            'detail' => $article->detail($id),
            'bacajuga' => $article->bacajuga(),
            'bacajuga2' => $article->bacajuga2(),
            'bacajuga3' => $article->bacajuga3(3,$id)]);
    }

}
