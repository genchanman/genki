<?php

namespace App\Http\Controllers;


use Illuminate\http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Post $post)
{
    return $post->get();
}
}