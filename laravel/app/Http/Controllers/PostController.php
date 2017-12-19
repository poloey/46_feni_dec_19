<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show ($id) {
    return view('post.show');
  }
  public function create () {
    return view('post.create');
  }
  public function store(Request $r) {
    return view('post.store');
  }
}
