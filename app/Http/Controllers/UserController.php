<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /*
     * Display the posts of a particular user
     * 
     * @param int $id
     * @return Response
     */
    public function user_posts($id)
    {
        //
        $posts = Post::where('author_id',$id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = User::find($id)->name;
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_all(Request $request)
    {
        //
        $user = $request->user();
        $posts = Post::where('author_id',$user->id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = $user->name;
        return view('posts.single')->withPosts($posts)->withTitle($title);
    }
    
    public function user_posts_draft(Request $request)
    {
        //
        $user = $request->user();
        $posts = Post::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
        $title = $user->name;
        return view('posts.singlepost')->withPosts($posts)->withTitle($title);
    }

}
