@props(['posts'])

{{-- First Article --}}
<x-post-featured-card :post="$posts[0]"/>

@if ($posts->count()>1)
    {{-- Two Articles --}}
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            <x-post-card 
                :post="$post" 
                class="{{ ($loop->iteration > 2) ? 'col-span-2' : 'col-span-3' }}"
            />
        @endforeach
    </div>
@endif