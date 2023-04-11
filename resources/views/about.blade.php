@extends('layouts/main')

@section('container')

<h1>Halaman ABOUT</h1>
<h2> {{ $name }} </h2>
<h2> {{ $email }} </h2>
<img src="img/{{ $foto }}" alt="{{ $name }}" width="200px" class="img-tumbnail rounded-circle">

@endsection
