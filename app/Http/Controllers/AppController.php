<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function posts()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Post 1',
                'content' => 'Content 1',
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'content' => 'Content 2',
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'content' => 'Content 3',
            ],
        ];
        return view('user.posts',compact('posts'));
    }
}
