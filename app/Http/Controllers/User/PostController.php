<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('user.user_home');
    }
    public function post(Request $request)
    {
        $this->validate($request, Post::$rules);
        $posts = new Post();
        $form = $request->all();

        $items = $posts->getList();
        return view('user.user_home', ['items' => $items]);

        if (!empty($form['comment'])) {
            $posts->body  = $request->comment;
            $posts->save();
        }
    }
}
