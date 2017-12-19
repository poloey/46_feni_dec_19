<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show ($id) {
    $post = Post::find($id);
    return view('post.show', ['post' => $post]);
  }
  public function create () {
    return view('post.create');
  }
  public function store(Request $request) {
    $title = $request->input('title');
    $content = $request->input('content');
    Post::create([
        'title' => $title,
        'content' => $content,
        'user_id' => auth()->id()
      ]
    );

    return redirect()->route("home");
  }
}
