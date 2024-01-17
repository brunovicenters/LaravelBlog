<x-panel>
    @if (auth()->id())
        <form action="/posts/{{ $post->slug }}/comments" method="POST">

            @csrf

            <header class="flex items-center space-x-4">
                <img 
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}" 
                    alt="Profile image" 
                    width="40" 
                    height="40" 
                    class="rounded-full">
                    
                <h2 class="font-bold">What do you think about it?</h2>
            </header>

            <div class="mt-4">
                <textarea 
                    name="body" 
                    placeholder="Write your comment..." 
                    class="w-full p-1 text-sm" 
                    rows="3" 
                    required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-2 border-t border-gray-200 pt-6">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-5 rounded-2xl hover:bg-blue-600">
                    Post
                </button>
            </div>
        </form>
    @else
        <header class="flex">
            <h2>Want to leave an opinion? <a href="/login" class="text-blue-500 hover:underline">Log in</a></h2>
        </header>
    @endif
</x-panel>