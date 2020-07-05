<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PostModel extends Model
{
    protected $table = 'posts';

    function article()
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset(6)
        ->limit(5)
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();;
        return $data;
    }

    function slider()
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->limit(5)
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();
        return $data;
    }

    function detail($id)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at','content')
        ->where('id','=',$id)
        ->first()
        ->toArray();;
        return $data;
    }

    function more($offset,$limit)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->limit($limit)
        ->offset($offset)
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();;
        return $data;
    }

    function search($keywords)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset(0)
        ->limit(5)
        ->where('title','LIKE', '%'.$keywords.'%')
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();;
        return $data;
    }

    function searchmore($keywords,$offset)
    {
        $data = PostModel::select('id','title','image','slug','link','author','published_at')
        ->offset($offset)
        ->limit(5)
        ->where('title','LIKE', '%'.$keywords.'%')
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();;
        return $data;
    }

    function sitemap()
    {
        $data = PostModel::select('id','title','slug','published_at')
        ->offset(0)
        ->limit(200)
        ->orderBy('published_at','desc')
        ->get()
        ->toArray();;
        return $data;
    }

    function bacajuga(){
        $data = PostModel::select('id','title','slug','published_at','link')
        ->inRandomOrder()
        ->first()
        ->toArray();
        return $data;
    }
    function bacajuga2(){
        $data = PostModel::select('id','title','slug','published_at','link')
        ->inRandomOrder()
        ->first()
        ->toArray();
        return $data;
    }

    function bacajuga3($day,$id){
        $today = time();
        $beforetoday = strtotime('-'.$day.' day', $today);
        $data = PostModel::select('id','title','slug','published_at','link','image','author')
        ->whereRaw("`published_at` <= $today AND `published_at` >= $beforetoday")
        ->whereNotIn('id',[$id])
        ->orderBy('published_at','desc')
        ->limit(5)
        ->get()
        ->toArray();
        return $data;
    }

    /**
     * This method use as scope of count keyword search result.
     *
     * @param  mixed $query
     * @param  mixed $keyword
     * @return object
     */
    public function scopeCountSearch($query, $keyword)
    {
        return $query->where('title', 'like', "%$keyword%");
    }
}

