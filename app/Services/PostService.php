<?php

namespace App\Services;

use App\PostModel;
use Illuminate\Support\Str;

class PostService
{
    /**
     * This method use to store / create data of posts.
     *
     * @param  mixed $data
     * @return void
     */
    public static function create($data = null)
    {
        if (! empty($data['title']) && ! empty($data['content']) && ! empty($data['image'])) {
            $post = new PostModel();

            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->image = $data['image'];
            $post->slug = Str::slug($post->title);
            $post->link = (! empty($data['link'])) ? $data['link'] : '';
            $post->author = strtoupper($data['author']);
            $post->published_at = (! empty($data['published_at'])) ? $data['published_at'] : time();
            $post->save();

            return true;
        }

        return false;
    }
}
