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
     * @return posts
     */
    public function getPostList()
    {
        return $this->postDao->getPostList();
    }

    /**
     * Add New Post
     * 
     * @param $validated 
     * @return validated post
     */
    public function addNewPost($validated)
    {
        return $this->postDao->addNewPost($validated);
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
