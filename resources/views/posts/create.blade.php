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

                <x-form.textarea name="excerpt" />

                <x-form.textarea name="body" />

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