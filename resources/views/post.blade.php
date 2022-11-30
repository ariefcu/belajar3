@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post["title"] }}</h1>
        <h3>{{ $post["author"] }}</h3>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts">Back to Posts</a>

@endsection