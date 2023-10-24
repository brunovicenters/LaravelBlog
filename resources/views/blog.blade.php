<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/app.css">
    <title>My blog</title>
</head>

<body>
    @foreach ($posts as $post)
    <article class="{{ $loop->even ? 'foobar' : '' }}">
        <a href="/posts/{{$post->slug}}">
            <h1> {{$post->title}} </h1>
        </a>
        <div>{{$post->excerpt}}</div>
    </article>
    @endforeach

</body>

</html>