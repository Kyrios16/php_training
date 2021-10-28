<?php

namespace App\Contracts\Dao\Post;


/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
    /**
     * To get psot list
     */
    public function getPostList();

    /**
     * Add New psot
     * @param $request 
     */
    public function addNewPost($request);

    /**
     *To delete post by id
     * @param $id
     */
    public function postDelete($id);
}
