
@extends('layouts.main')

@section('container')
<article>
<h1 class="">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
    
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach
@endsection