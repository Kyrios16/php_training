<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Contracts\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     *task interface
     */
    private $postInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostServiceInterface $postInterface)
    {
        $this->postInterface = $postInterface;
    }

    /**
     * Show Post list
     * 
     * @return post index blade
     */
    public function index()
    {
        $posts = $this->postInterface->getPostList();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    /**
     * Add New Post
     * check validate with form request StorePostRequest
     * @param $request
     * @return view posts
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validate();
        $this->postInterface->addNewPost($validated);
        return redirect('/posts');
    }


    /**
     * post deleted in post list
     * 
     * @return index blade
     */
    public function destroy($id)
    {
        $post = $this->postInterface->postDelete($id);

        return redirect('/posts');
    }
}
