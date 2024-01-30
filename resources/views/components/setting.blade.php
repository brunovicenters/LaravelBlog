@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">

    <h1 class="text-xl font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>


    <div class="flex">
        
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul class="space-y-2 font-light">
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
                <li>
                    <a href="/admin/category/create" class="{{ request()->is('admin/category/create') ? 'text-blue-500' : '' }}">New Category</a>
                </li>
                <li>
                    <a href="/admin/create" class="{{ request()->is('admin/create') ? 'text-blue-500' : '' }}">New Admin</a>
                </li>

            </ul>
        </aside>
        
        <main class="flex-1">
            <x-panel>
        
                {{ $slot }}
                
            </x-panel>
        </main>
    </div>
</section>