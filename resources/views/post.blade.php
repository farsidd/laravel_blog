<x-layout>



<h1>{{ $posts->title }}</h1>
<p>
    By <a href="#">{{$posts->user->name}} </a> in <a href="/categories/{{$posts->category->slug}}">{{$posts->category->name}}
</a>
</p>
<p>{{$posts->body}}</p>






</x-layout>