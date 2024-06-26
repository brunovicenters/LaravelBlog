@props(['post'])

<article {{$attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
    <div class="py-6 px-5">
      <div>
        <img
          src="{{($post->thumbnail) ? "/storage/{$post->thumbnail}" : "/images/default.png"}}"
          alt="Blog Post illustration"
          class="rounded-xl w-full h-80 object-cover" />
      </div>
      <div class="mt-8 flex flex-col justify-between">
        <header>
          <div class="space-x-2">
            <x-category-button :category="$post->category"/>
          </div>
          <div class="mt-4">
            <h2 class="text-3xl">
              <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
              </a>
            </h2>
            <span class="mt-2 block text-gray-400 text-xs">
              Published
              <time>{{ $post->created_at->diffForHumans() }}</time>
            </span>
          </div>
        </header>
        <div class="text-sm mt-4 space-y-2">
          <p>
            {!! $post->excerpt !!}
          </p>
        </div>
        <footer class="flex justify-between items-center mt-8">
          <div class="flex items-center text-sm">
            <img src="/images/lary-avatar.svg" alt="Lary avatar" />
            <div class="ml-3">
              <h5 class="font-bold"><a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a></h5>
              <h6>{{ $post->author->username }}</h6>
            </div>
          </div>
          <div class="hidden lg:block">
            <a
              href="/posts/{{ $post->slug }}"
              class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
              Read More
            </a>
          </div>
        </footer>
      </div>
    </div>
</article>
