<?php

namespace App\Contracts\Services\Post;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface PostServiceInterface
{
    /**
     * To get post list
     */
    public function getPostList();

    /**
     * Add new post
     * 
     * @param $validated
     */
    public function addNewPost($validated);

    /**
     *To delete post by id
     * @param $id
     */
    public function postDelete($id);
}
