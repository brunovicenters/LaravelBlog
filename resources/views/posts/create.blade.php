<x-layout>
    <section class="py-8 max-w-lg mx-auto">

        <x-panel>

            <h1 class=" font-bold text-xl mb-4">
                Publish New Post
            </h1>


            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf
    
                <x-form.input name="title" />

                <x-form.input name="slug" />

                <x-form.input name="thumbnail" type="file" />

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-gray-700">Excerpt</label>
                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        placeholder="Post's excerpt"
                        required
                    >{{ old('excerpt') }}</textarea>
    
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-gray-700">Body</label>
                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        placeholder="Post's body"
                        required
                    >{{ old('body') }}</textarea>
    
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-gray-700">Category</label>

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option 
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>
    
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>