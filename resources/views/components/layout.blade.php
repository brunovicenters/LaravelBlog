<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap"
      rel="stylesheet" 
    />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="styles/app.css">
    <title>Laravel From Scratch Blog</title>
  </head>
  <body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
      <nav class="md:flex md:justify-between md:items-center">
        <div>
          <a href="/">
            <img
              src="/images/logo.svg"
              alt="Laracast's Logo"
              width="165"
              height="16" />
          </a>
        </div>
        <div class="mt-8 lg:mt-0 flex items-center">
          @guest

            <a href="/register" class="text-xs font-bold uppercase">Register</a>

            <a href="/login" class="mx-4 text-xs font-bold uppercase">Log In</a>

          @else

            <x-dropdown>
              <x-slot name="trigger">
                <button class="text-xs font-bold uppercase hover:text-blue-500">Welcome, {{ auth()->user()->name }}</button>
              </x-slot>

              @can('author')
                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                  Dashboard
                </x-dropdown-item>
                
                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                  New Post
                </x-dropdown-item>
                
                <x-dropdown-item href="/admin/categories/create" :active="request()->is('admin/categories/create')">
                  New Category
                </x-dropdown-item>
                
                <x-dropdown-item href="/admin/users/create" :active="request()->is('admin/users/create')">
                  New Admin
                </x-dropdown-item>
              @endcan

              <x-dropdown-item href="/admin/config" :active="request()->is('admin/config')">
                Configuration
              </x-dropdown-item>

              <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                Log Out
              </x-dropdown-item>

              <form id="logout-form" action="/logout" method="POST" class="hidden">
                @csrf
              </form>
            </x-dropdown>


          @endguest
          <a
            href="#newsletter"
            class="transition-colors duration-200 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white px-5 py-3 uppercase">
            Subscribe for Updates
          </a>
        </div>
      </nav>

      {{ $slot }}

      <footer
        id="newsletter"
        class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img
          src="/images/lary-newsletter-icon.png"
          alt="Lary icon"
          class="mx-auto"
          style="width: 145px" />
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
          <div
            class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form action="/newsletter" method="POST" class="lg:flex text-sm">
              @csrf

              <div class="lg:py-3 lg:px-5 flex items-center">
                <label for="email" class="hidden lg:inline-block">
                  <img src="/images/mailbox-icon.svg" alt="Mailbox icon" />
                </label>

                <input
                  type="email"
                  placeholder="Your.email@address.com"
                  class="lg:bg-transparent pl-4 focus-within:outline-none"
                  id="email"
                  name="email" />
              </div>
              <button
                type="submit"
                class="transition-colors duration-200 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white px-8 py-3 uppercase">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </footer>
    </section>
    <x-flash />
  </body>
</html>
