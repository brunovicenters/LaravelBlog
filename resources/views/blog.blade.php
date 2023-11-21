<x-layout>

    <header class="mt-20 mas-w-4xl mx-auto text-center">
        <div class="max-w-xl mx-auto">
          <h1 class="text-4xl">
            Latest
            <span class="text-blue-500">Laravel From Scratch</span>
            News
          </h1>
          <h2 class="inline-flex mt-2">
            By Lary Laracore
            <img src="/images/lary-head.svg" alt="Head of Lary the mascot" />
          </h2>
          <p class="text-sm mt-14">
            Another year. Another update. We're refreshing the popular Laravel
            series with new content. I'm going to keep you guys up to speed with
            what's going on!
          </p>
          <div
            class="tw-flex tw-justify-center space-y-4 lg:space-y-0 lg:space-x-4 mt-8">
            <!-- Category -->
            <span
              class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
              <select
                class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category</option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
              </select>
              <svg
                class="transform -rotate-90 absolute pointer-events-none"
                style="right: 12px"
                width="22"
                height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                  <path
                    stroke="#000"
                    stroke-opacity=".012"
                    stroke-width=".5"
                    d="M21 1v20.16H.84V1z"></path>
                  <path
                    fill="#222"
                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
              </svg>
            </span>
            <!-- Other Filters -->
            <span
              class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
              <select
                class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="otherFilters" disabled selected>
                  Other Filters
                </option>
                <option value="foo">Foo</option>
                <option value="bar">Bar</option>
              </select>
              <svg
                class="transform -rotate-90 absolute pointer-events-none"
                style="right: 12px"
                width="22"
                height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                  <path
                    stroke="#000"
                    stroke-opacity=".012"
                    stroke-width=".5"
                    d="M21 1v20.16H.84V1z"></path>
                  <path
                    fill="#222"
                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
              </svg>
            </span>
            <!-- Search -->
            <span
              class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
              <form action="#" method="GET">
                <input
                  type="text"
                  name="search"
                  placeholder="Search..."
                  class="bg-transparent placeholder-black font-semibold text-sm" />
              </form>
            </span>
          </div>
        </div>
      </header>

      <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <article
          class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
          <div class="py-6 px-5 lg:flex lg:gap-8">
            <div class="flex-1 lg:mr-8">
              <img
                src="/images/illustration-1.png"
                alt="Blog Post illustration"
                class="rounded-xl" />
            </div>
            <div class="flex-1 flex flex-col justify-between">
              <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                  <a
                    href="#"
                    class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                    style="font-size: 10px">
                    Techniques
                  </a>
                  <a
                    href="#"
                    class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                    style="font-size: 10px">
                    Updates
                  </a>
                </div>
                <div class="mt-4">
                  <h2 class="text-3xl">
                    This is a big title and it will look great on two or even
                    three lines. Wooohoo!
                  </h2>
                  <span class="mt-2 block text-gray-400 text-xs">
                    Published
                    <time>1 day ago</time>
                  </span>
                </div>
              </header>
              <div class="text-sm mt-2">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Mollitia impedit atque odio incidunt? Accusantium, expedita
                  modi perferendis rem repudiandae ipsa dolores non rerum
                  assumenda. Vitae similique quibusdam non nisi reprehenderit!
                </p>
                <p class="mt-4">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Similique ratione iure dolorum.
                </p>
              </div>
              <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                  <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                  <div class="ml-3">
                    <h5 class="font-bold">Lary Laracore</h5>
                    <h6>Mascot at Laracasts</h6>
                  </div>
                </div>
                <div class="hidden lg:block">
                  <a
                    href="#"
                    class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                    Read More
                  </a>
                </div>
              </footer>
            </div>
          </div>
        </article>

        <div class="lg:grid lg:grid-cols-2">
          <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
              <div>
                <img
                  src="/images/illustration-1.png"
                  alt="Blog Post illustration"
                  class="rounded-xl" />
              </div>
              <div class="mt-8 flex flex-col justify-between">
                <header>
                  <div class="space-x-2">
                    <a
                      href="#"
                      class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Techniques
                    </a>
                    <a
                      href="#"
                      class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Updates
                    </a>
                  </div>
                  <div class="mt-4">
                    <h2 class="text-3xl">
                      This is a big title and it will look great on two or even
                      three lines. Wooohoo!
                    </h2>
                    <span class="mt-2 block text-gray-400 text-xs">
                      Published
                      <time>1 day ago</time>
                    </span>
                  </div>
                </header>
                <div class="text-sm mt-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia impedit atque odio incidunt? Accusantium, expedita
                    modi perferendis rem repudiandae ipsa dolores non rerum
                    assumenda. Vitae similique quibusdam non nisi reprehenderit!
                  </p>
                  <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Similique ratione iure dolorum.
                  </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                  <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                      <h5 class="font-bold">Lary Laracore</h5>
                      <h6>Mascot at Laracasts</h6>
                    </div>
                  </div>
                  <div class="hidden lg:block">
                    <a
                      href="#"
                      class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                      Read More
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
              <div>
                <img
                  src="/images/illustration-2.png"
                  alt="Blog Post illustration"
                  class="rounded-xl" />
              </div>
              <div class="mt-8 flex flex-col justify-between">
                <header>
                  <div class="space-x-2">
                    <a
                      href="#"
                      class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Techniques
                    </a>
                    <a
                      href="#"
                      class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Updates
                    </a>
                  </div>
                  <div class="mt-4">
                    <h2 class="text-3xl">
                      This is a big title and it will look great on two or even
                      three lines. Wooohoo!
                    </h2>
                    <span class="mt-2 block text-gray-400 text-xs">
                      Published
                      <time>1 day ago</time>
                    </span>
                  </div>
                </header>
                <div class="text-sm mt-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia impedit atque odio incidunt? Accusantium, expedita
                    modi perferendis rem repudiandae ipsa dolores non rerum
                    assumenda. Vitae similique quibusdam non nisi reprehenderit!
                  </p>
                  <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Similique ratione iure dolorum.
                  </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                  <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                      <h5 class="font-bold">Lary Laracore</h5>
                      <h6>Mascot at Laracasts</h6>
                    </div>
                  </div>
                  <div class="hidden lg:block">
                    <a
                      href="#"
                      class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                      Read More
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </article>
        </div>

        <div class="lg:grid lg:grid-cols-3">
          <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
              <div>
                <img
                  src="/images/illustration-3.png"
                  alt="Blog Post illustration"
                  class="rounded-xl" />
              </div>
              <div class="mt-8 flex flex-col justify-between">
                <header>
                  <div class="space-x-2">
                    <a
                      href="#"
                      class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Techniques
                    </a>
                    <a
                      href="#"
                      class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Updates
                    </a>
                  </div>
                  <div class="mt-4">
                    <h2 class="text-3xl">
                      This is a big title and it will look great on two or even
                      three lines. Wooohoo!
                    </h2>
                    <span class="mt-2 block text-gray-400 text-xs">
                      Published
                      <time>1 day ago</time>
                    </span>
                  </div>
                </header>
                <div class="text-sm mt-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia impedit atque odio incidunt? Accusantium, expedita
                    modi perferendis rem repudiandae ipsa dolores non rerum
                    assumenda. Vitae similique quibusdam non nisi reprehenderit!
                  </p>
                  <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Similique ratione iure dolorum.
                  </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                  <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                      <h5 class="font-bold">Lary Laracore</h5>
                      <h6>Mascot at Laracasts</h6>
                    </div>
                  </div>
                  <div class="hidden lg:block">
                    <a
                      href="#"
                      class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                      Read More
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
              <div>
                <img
                  src="/images/illustration-4.png"
                  alt="Blog Post illustration"
                  class="rounded-xl" />
              </div>
              <div class="mt-8 flex flex-col justify-between">
                <header>
                  <div class="space-x-2">
                    <a
                      href="#"
                      class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Techniques
                    </a>
                    <a
                      href="#"
                      class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Updates
                    </a>
                  </div>
                  <div class="mt-4">
                    <h2 class="text-3xl">
                      This is a big title and it will look great on two or even
                      three lines. Wooohoo!
                    </h2>
                    <span class="mt-2 block text-gray-400 text-xs">
                      Published
                      <time>1 day ago</time>
                    </span>
                  </div>
                </header>
                <div class="text-sm mt-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia impedit atque odio incidunt? Accusantium, expedita
                    modi perferendis rem repudiandae ipsa dolores non rerum
                    assumenda. Vitae similique quibusdam non nisi reprehenderit!
                  </p>
                  <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Similique ratione iure dolorum.
                  </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                  <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                      <h5 class="font-bold">Lary Laracore</h5>
                      <h6>Mascot at Laracasts</h6>
                    </div>
                  </div>
                  <div class="hidden lg:block">
                    <a
                      href="#"
                      class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                      Read More
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
              <div>
                <img
                  src="/images/illustration-5.png"
                  alt="Blog Post illustration"
                  class="rounded-xl" />
              </div>
              <div class="mt-8 flex flex-col justify-between">
                <header>
                  <div class="space-x-2">
                    <a
                      href="#"
                      class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Techniques
                    </a>
                    <a
                      href="#"
                      class="px-3 py-1 border border-red-300 rounded-full text-red-300 uppercase font-semibold"
                      style="font-size: 10px">
                      Updates
                    </a>
                  </div>
                  <div class="mt-4">
                    <h2 class="text-3xl">
                      This is a big title and it will look great on two or even
                      three lines. Wooohoo!
                    </h2>
                    <span class="mt-2 block text-gray-400 text-xs">
                      Published
                      <time>1 day ago</time>
                    </span>
                  </div>
                </header>
                <div class="text-sm mt-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia impedit atque odio incidunt? Accusantium, expedita
                    modi perferendis rem repudiandae ipsa dolores non rerum
                    assumenda. Vitae similique quibusdam non nisi reprehenderit!
                  </p>
                  <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Similique ratione iure dolorum.
                  </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                  <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                      <h5 class="font-bold">Lary Laracore</h5>
                      <h6>Mascot at Laracasts</h6>
                    </div>
                  </div>
                  <div class="hidden lg:block">
                    <a
                      href="#"
                      class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-8">
                      Read More
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </article>
        </div>
      </main>
</x-layout>


{{-- <x-layout>
        @foreach ($posts as $post)
            <article class="{{ $loop->even ? 'foobar' : '' }}">
                <h2> 
                    <a href="/posts/{{$post->slug}}">{!!$post->title!!}</a>
                </h2>
                
                <p>
                    By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                </p>

                <div>
                    {!!$post->excerpt!!}
                </div>
            </article>
        @endforeach
</x-layout> --}}