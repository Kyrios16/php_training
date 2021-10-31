<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Contracts\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     *post interface
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
     * show all posts
     * @param $request value from request
     * @return index
     */
    public function index(Request $request)
    {
        $posts = $this->postInterface->getPostList($request);

        return view('posts.index', ['posts' => $posts]);
    }


    /**
     * Post create
     * 
     * @return create blade
     */
    public function create()
    {
        return view('posts.create');
    }


    /**
     * Post create in db
     * @param $request
     * @return index blade
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required|max:255',
            'author' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = $this->postInterface->getPostCreate($request);

        return redirect('/posts');
    }

    public function show()
    {
        //show a blog post
    }


    /**
     * post edit
     * @param $id user id
     * @return update blade
     */
    public function edit($id)
    {
        $post = $this->postInterface->postEdit($id);

        return view('posts.edit', compact('post'));
    }


    /**
     * poste update in db
     * @param $id
     * @param $request
     * @return index blade
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required|max:255',
            'author' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $post = $this->postInterface->postUpdate($request, $id);

        return redirect('/posts');
    }

    /**
     * post deleted in post list
     * @param $id 
     * @return index blade
     */
    public function destroy($id)
    {
        $post = $this->postInterface->postDelete($id);
        return redirect('/posts');
    }
}
