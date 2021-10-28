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
     * @param $request
     */
    public function getPostList($request);

    /**
     * Add new post
     * 
     * @param $request
     */
    public function getPostCreate($request);

    /**
     *To delete post by id
     * @param $id
     */
    public function postDelete($id);
}
