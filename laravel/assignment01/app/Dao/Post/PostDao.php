<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    /**
     * To get Post list
     * @param $request
     * @return array $posts Post list
     */
    public function getPostList($request)
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        return $posts;
    }


    /**
     * Add New Post
     * 
     * @param $request value from request
     * @return $post
     */
    public function getPostCreate($request)
    {
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'author' => $request->get('author'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ]);
        $post->save();

        return $post;
    }

    /**
     *To delete post by id
     * @param $id
     * @return $post
     */
    public function postDelete($id)
    {
        $post = Post::findOrFail($id);
        $post->deleted_at = now();
        $post->save();

        return $post;
    }
}
