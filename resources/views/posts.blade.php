<x-layout>


    @include('_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    @if($posts->count())
      <x-posts-grid  :posts="$posts" />
    @else
        <p style="text-align: center">No Post Yet. View the page daily to get updates</p>
    @endif
    

    </main>
  </x-layout>








    {{-- <body>
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
</body> --}}


