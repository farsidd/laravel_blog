<x-layout>



<h1>{{ $posts->title }}</h1>
<p>By <a href="#">{{$posts->user->name}}</a></p>
<p>{{$posts->body}}</p>

    <p>
        {{$posts->category->name}}
    </p>





</x-layout>