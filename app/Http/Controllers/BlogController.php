<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index() {
        $data = Post::all();
        return view('blog.index', compact('data'));
    }
}
