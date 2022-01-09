@extends('layout')
@section('content')
{{-- <h2>Posts {!! $data['title'] !!}</h2> --}}
<h1>Create Post</h1>

<form method="POST" action={{ route('posts.update', ['post' => $post->id]) }}>
    @csrf
    @method('PUT')
    @extends('posts.form')
    <button type="submit">Edit Post</button>
</form>
@endsection