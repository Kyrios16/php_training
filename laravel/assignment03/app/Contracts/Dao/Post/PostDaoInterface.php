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
     * edit post 
     * @param $id
     */
    public function postEdit($id);

    /**
     * update post 
     * @param $id 
     * @param $request
     */
    public function postUpdate($request, $id);

    /**
     *To delete post by id
     * @param $id
     */
    public function postDelete($id);

    /**
     * To search post by title 
     * 
     * @param $request
     */
    public function postSearchByColumn($request);

    /**
     * To search post by date
     * 
     * @param $request
     */
    public function postSearchByDate($request);
}
