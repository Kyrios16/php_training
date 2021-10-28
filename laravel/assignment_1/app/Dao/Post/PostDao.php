<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    /**
     * To get Post list
     * @return array $posts Post list
     */
    public function getPostList()
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        return $posts;
    }


    /**
     * Add New Post
     * 
     * @param $validated validate value from request
     * @return $post
     */
    public function addNewPost($validated)
    {
        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->author = $validated['author'];
        $post->phone = $validated['phone'];
        $post->email = $validated['email'];
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
