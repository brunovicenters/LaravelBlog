<x-layout>
    <x-setting heading="Edit Post -> {{ $post->title }}">
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" placeholder="Post's title" :value="old('title', $post->title)" required/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img
                    src="/storage/{{ $post->thumbnail }}"
                    alt="Blog Post illustration"
                    class="rounded-xl ml-6"
                    width="200"
                />
            </div>

            <x-form.textarea name="excerpt" placeholder="Post's excerpt">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>

            <x-form.textarea name="body" placeholder="Post's body" >
                {{ old('body', $post->body) }}
            </x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.field>
                <x-form.button>Update</x-form.button>
            </x-form.field>
        </form>
    </x-setting>
</x-layout>