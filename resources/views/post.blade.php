<x-layout>



<h1>{{ $post->title }}</h1>
<p>By <a href="/authors/{{$post->author->name}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
<p>{{$post->body}}</p>

    <p>
        {{$post->category->name}}
    </p>







</x-layout>