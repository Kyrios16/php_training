<?php

namespace App\Http\Controllers\API\Post;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostAPIController extends Controller
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
     * to get posts list
     * @param $request value from request
     * @return Response json with post list 
     */
    public function index(Request $request)
    {
        $posts = $this->postInterface->getPostList($request);
        return response()->json($posts);
    }

<<<<<<< HEAD
=======
    // /**
    //  * Post create
    //  * 
    //  * @return create blade
    //  */
    // public function create()
    // {
    //     return view('posts.create');
    // }

>>>>>>> 3054fbd3c5abb91662eb6d86dccb74f1ff79fceb

    /**
     * to edit post
     * @param $id user id
     * @return Response edited post
     */
    public function edit($id)
    {
        $post = $this->postInterface->postEdit($id);
        return response()->json($post);
    }


    /**
     * To create post via API
     * @param Request $request
     * @return Response json created user
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
<<<<<<< HEAD
        dd($post);
=======
>>>>>>> 3054fbd3c5abb91662eb6d86dccb74f1ff79fceb

        return response()->json($post);
    }

    /**
     * To update post in db via API
     * @param $id user id
     * @param Request $request
     * @return Response updated post
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
        return response()->json($post);
    }

    /**
     * To delete post in post list via API
     * @param $id user id
     * @return Response message
     */
    public function destroy($id)
    {
        $msg = $this->postInterface->postDelete($id);
        return response(['message' => $msg]);
    }
}
