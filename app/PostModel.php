<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';

    function article()
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset(6)
        ->limit(10)
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }

    function slider()
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->limit(5)
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }

    function detail($id)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at','content')
        ->where('id','=',$id)
        ->first();
        return $data;
    }

    function more($offset)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->limit(10)
        ->offset($offset)
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }

    function search($keywords)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset(0)
        ->limit(20)
        ->where('title','LIKE', '%'.$keywords.'%')
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }

    function searchmore($keywords,$offset)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset($offset)
        ->limit(10)
        ->where('title','LIKE', '%'.$keywords.'%')
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }

    function sitemap()
    {
        $data = PostModel::select('id','title','slug','published_at')
        ->offset(0)
        ->limit(200)
        ->orderBy('published_at','desc')
        ->get();
        return $data;
    }
}
