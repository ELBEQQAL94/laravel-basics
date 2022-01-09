@extends('layout')
@section('content')
{{-- <h2>Posts {!! $data['title'] !!}</h2> --}}
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
@endsection