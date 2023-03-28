<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    private $posts = [
        'Titie A',
        'Titie B',
        'Titie C',
    ];
    public function index()
    {

    return view('index')
        ->with(['posts' => $this->posts]) ;
}
    public function show ($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
