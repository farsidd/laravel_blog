<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->with('category','author')->get()
    ]);
});

//normal way to access data through id

// Route::get('/posts/{id}', function($id){
//     return view('post', [
//         'posts' => Post::findOrFail($id)
//     ]);
// });

//alternate approach to access data via route | wildcard name and the model object name will remain the same like in the case below 
//wildcard name is "post" and model (Post) object name is $post | in that case laravel already filtered your data according to id.

// Route::get('/posts/{post}', function(Post $post){
//     return view('post', [
//         'posts' => $post
//     ]);
// });

//if you want the above approach but you need to filter data other than id then in that case  you will use the approach below | just add
//key value pair name in that case slug | you want to filter post via slug or anything other than id

Route::get('/post/{post:slug}', function(Post $post){
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'posts' => $category->posts

        //you can eager load relatioship mean you can load relevent author and category while fetching category related post
        //to save the multiple request to the server
        //here i commented becasue we already done this in Post Model whenever the post model call it automatically fetch the relevent
        //category and author.
        
        // 'posts' => $category->posts->load(['author','category'])
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts

        // 'posts' => $author->posts->load(['author','category'])
    ]);
});
