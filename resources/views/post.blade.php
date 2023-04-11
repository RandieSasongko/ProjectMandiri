@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    
    <p>By. Randie Sasongko in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

    {!! $posts->body !!}
</article>

<a href="/blog">Back To Blog</a>

@endsection