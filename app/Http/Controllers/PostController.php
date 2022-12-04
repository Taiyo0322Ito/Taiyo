<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Http_Requests\PostRequest;
>>>>>>> origin/master
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
<<<<<<< HEAD
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
=======
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }

    public function show(Post $post)
    {
        return view('posts/index')->with(['posts' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
?>
>>>>>>> origin/master
