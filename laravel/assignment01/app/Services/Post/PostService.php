<?php

namespace App\Services\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;


/**
 * Service class for post
 */
class PostService implements PostServiceInterface
{
    /**
     * post dao
     */
    private $postDao;
    /**
     * Class Constructor
     * @param PostDaoInterface
     * @return
     */
    public function __construct(PostDaoInterface $postDao)
    {
        $this->postDao = $postDao;
    }

    /**
     * Show Post list
     * @param $request
     * @return posts
     */
    public function getPostList($request)
    {
        return $this->postDao->getPostList($request);
    }

    /**
     * Add New Post
     * 
     * @param $request 
     * @return new post
     */
    public function getPostCreate($request)
    {
        return $this->postDao->getPostCreate($request);
    }

    /**
     *To delete post by id
     * @param $id
     * @return post list
     */
    public function postDelete($id)
    {
        return $this->postDao->postDelete($id);
    }
}
