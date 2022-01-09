@extends('layout')

@section('content')
    <h1>Posts</h1>
    <a href={{ route('posts.create') }}>Create Post</a>
    <ul>
        @forelse ($posts as $post)
            <h2>
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>{{ $post->content }}</p>
            <time>{{ $post->created_at->diffForHumans() }}</time>
            <a href="{{ route('posts.edit', ['post' => $post->id])}}">EDIT</a>
            <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                @csrf
                @method("DELETE")
                <button>DELETE</button>
            </form>
            @empty
                <h2>No Posts</h2>                
        @endforelse
    </ul>
@endsection