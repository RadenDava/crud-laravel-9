<?php

namespace App\Http\Controllers;

 use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /** 
    * index
    *
    * @return void
    */
    public function index() {
        // ! get data dari database yg akan di urut kan dari yang paling baru (latest) kemudian data yg di show per page di batasi 5

        $posts = Post::latest()->paginate(5);

        // ! data post tadi akan send ke dlm view melalui compact

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}
