<?php

namespace App\Contracts\Dao\Post;


/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
    /**
     * To get psot list
     * @param $request 
     */
    public function getPostList($request);

    /**
     * Add New psot
     * @param $request 
     */
    public function getPostCreate($request);

    /**
     *To delete post by id
     * @param $id
     */
    public function postDelete($id);
}
