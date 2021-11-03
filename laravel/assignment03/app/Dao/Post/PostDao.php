<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostDao implements PostDaoInterface
{
    /**
     * To get Post list
     * @param $request
     * @return array $posts Post list
     */
    public function getPostList($request)
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        return $posts;
    }


    /**
     * Add New Post
     * 
     * @param $request value from request
     * @return $post
     */
    public function getPostCreate($request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->phone = $request->phone;
        $post->email = $request->email;
        $post->save();

        return $post;
    }

    /**
     * edit post 
     * @param $id
     * @return post
     */
    public function postEdit($id)
    {
        $post = Post::find($id);

        return $post;
    }

    /**
     * update post 
     * @param $id
     * @param $request
     * @return post
     */
    public function postUpdate($request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->phone = $request->phone;
        $post->email = $request->email;

        $post->save();

        return $post;
    }

    /**
     *To delete post by id
     * @param $id
     * @return $post
     */
    public function postDelete($id)
    {
        $post = Post::findOrFail($id);
        $post->deleted_at = now();
        $post->save();

        return $post;
    }

    /**
     * To search post by column name 
     * 
     * @param $request 
     * @return $posts
     */
    public function postSearchByColumn($request)
    {
        $search = $request->input('search');
        $posts = DB::table('posts')
            ->select('*')
            ->Where('title', 'LIKE', "%$search%")
            ->orWhere('author', 'LIKE', "%$search%")
            ->get();

        return $posts;
    }

    /**
     * To search post by date
     * 
     * @param $request 
     * @return $posts
     */
    public function postSearchByDate($request)
    {
        $startDate = Carbon::parse($request->startDate)->toDateTimeString();
        $endDate = Carbon::parse($request->endDate)->toDateTimeString();
        $posts = DB::table('posts')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        return $posts;
    }
}
