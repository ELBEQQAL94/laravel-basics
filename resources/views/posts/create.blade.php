@extends('layout')
@section('content')
{{-- <h2>Posts {!! $data['title'] !!}</h2> --}}
<h1>Create Post</h1>

<form method="POST" action={{ route('posts.store') }}>
    @csrf
    @include('posts.form')
    <button type="submit">Create Post</button>
</form>
@endsection