@extends('layout')

@section('banner')
    <h1>My blog</h1>
@endsection

@section('content')
   @foreach ($posts as $post)
    <article class="{{ $loop->even ? 'foobar' : '' }}">
        <a href="/posts/{{$post->slug}}">
            <h2> {{$post->title}} </h2>
        </a>
        <div>{{$post->excerpt}}</div>
    </article>
    @endforeach
@endsection