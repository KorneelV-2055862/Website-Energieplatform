<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Blog page',
            'title' => 'This is a Blog page',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;

        return view('blog', $data);
    }

    public function post()
    {
        $data = [
            'meta_title' => 'Post page',
            'title' => 'This is a post',
        ];
        return view('single_post', $data);
    }
}
