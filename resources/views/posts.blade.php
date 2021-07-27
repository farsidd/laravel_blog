<x-layout>
<body>
    @foreach($posts as $post)
    <a href="/post/{{$post->slug}}"><h1>
        {{ $post->title }}
    </h1>
</a>
<p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>
        {{$post -> body}}
    </p>

    @endforeach
</body>
</x-layout>