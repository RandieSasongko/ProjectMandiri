@extends('layouts/main')

@section('container')

    <h1> Post Category : {{ $category }} </h1>   

    @foreach ($pots as $post)
    <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection
