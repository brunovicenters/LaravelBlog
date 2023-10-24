<x-layout>
        @foreach ($posts as $post)
            <article class="{{ $loop->even ? 'foobar' : '' }}">
                <a href="/posts/{{$post->slug}}">
                    <h2> {{$post->title}} </h2>
                </a>
                <div>{{$post->excerpt}}</div>
            </article>
        @endforeach
</x-layout>