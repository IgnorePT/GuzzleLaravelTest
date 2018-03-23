<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//My Imports
use App\Helpers\Posts;

class PostsController extends Controller
{
    //

    protected $posts;

    public function __construct(Posts $posts){

        $this->posts = $posts;

    }

    public function index () {
       
        $posts = $this->posts->all();
        
        return view('posts.index', compact('posts'));

    }


    public function show ($id) {

        $post = $this->posts->find($id);
        
        return view('posts.show', compact('post'));

    }
}
