<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//the below line purpose is to load post with related author and category everytime someone call post model to fetch post
protected $with = ['category','author'];

public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false , fn($query,$search) =>
    $query -> where('title','like','%' . $search . '%')
         ->orWhere('body','like','%' . $search . '%')
);
}


    public function category()
{
    return $this->belongsTo(Category::class);
}

//Standard way to work

// public function user()
// {
//     return $this->belongsTo(User::class);
// }

//Alternative way


//here you have to put the exact name of the function like in the case below laravel look for user_id column in post table by default
//so if you are going to change the function name like author now laravel will try to find author_id table in post table which he can't
//find and throw an error
//so if you want tou change the function name to something else like author() you have to tell about the foriegn id manually like below

public function author()
{
    return $this->belongsTo(User::class, 'user_id');
}


}


