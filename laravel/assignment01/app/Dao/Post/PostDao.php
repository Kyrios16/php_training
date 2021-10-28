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
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->phone = $request->phone;
        $post->email = $request->email;

        $post->save();

        return $post;
    }

    /**
     * edit post 
     * @param $id
     * @return post
     */
    public function postEdit($id)
    {
        $post = Post::find($id);

        return $post;
    }

    /**
     * update post 
     * @param $request, $id
     * @return post
     */
    public function postUpdate($request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->phone = $request->phone;
        $post->email = $request->email;

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
