<?php
use App\Models\Post;
use App\Models\Category;
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
        'posts' => Post::with('category')->get()
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

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', [
        'posts' => $post
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});

