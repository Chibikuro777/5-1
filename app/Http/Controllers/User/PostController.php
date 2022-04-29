<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, Post::$rules);
        $posts = new Post();
        $items = $posts->getList();

        return view('user.user_home', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $this->validate($request, Post::$rules);
        $posts = new Post();
        $items = $posts->getList();
        $form = $request->all();

        if (!empty($form['comment'])) {
            $posts->body  = $request->comment;
            $posts->save();
        }

        return view('user.user_home', ['items' => $items]);
    }
}
