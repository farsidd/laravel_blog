<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $post = Post::latest();


        return view('posts', [
            'posts' => $post->filter(request(['search']))->get(),
            // 'categories' => Category::all()
        ]);
    }
}
