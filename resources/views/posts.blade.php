<x-layout>
<body>
    @foreach($posts as $post)
    <a href="/posts/{{$post->slug}}"><h1>
        {{ $post->title }}
    </h1>
</a>

    <p>
        {{$post -> body}}
    </p>
<a href="/categories/{{$post->category->slug}}">
    <p>
        {{$post->category->name}}
    </p>
</a>
    @endforeach
</body>
</x-layout>