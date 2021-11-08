<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostUpdateMail;
use App\Contracts\Services\Post\PostServiceInterface;
use App\Mail\PostCreateMail;
use App\Mail\UserDetailMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

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

        $details = [
            'heading' => "You successfully created new post.",
            'title' => $post['title'],
            'content' => $post['content'],
            'author' => $post['author'],
            'email' => $post['email']

        ];
        Mail::to($details['email'])->send(new PostCreateMail($details));

        return redirect('/posts');
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

        $postDetails = [
            'heading' => "You successfully created new post.",
            'title' => $post['title'],
            'content' => $post['content'],
            'author' => $post['author'],
            'email' => $post['email'],
            'updated_at' => $post['updated_at']

        ];
        Mail::to($postDetails['email'])->send(new PostUpdateMail($postDetails));

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

    /**
     * To search post by column name 
     * 
     * @param $request
     * @return $posts searched posts
     */
    public function searchByColumn(Request $request)
    {
        $posts = $this->postInterface->postSearchByColumn($request);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * To search post by column name 
     * 
     * @param $request
     * @return $posts searched posts
     */
    public function searchByDate(Request $request)
    {
        $posts = $this->postInterface->postSearchByDate($request);
        return view('posts.index', ['posts' => $posts]);
    }
}
