<x-layout>
    <x-setting heading="Edit Post -> {{ $post->title }}">
        <form action="/admin/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" placeholder="Post's title" value="{{ $post->title }}" />

            <x-form.input name="slug" placeholder="Post's slug" value="{{ $post->slug }}" />

            <x-form.input name="thumbnail" type="file" />

            <x-form.textarea name="excerpt" placeholder="Post's excerpt" />

            <x-form.textarea name="body" placeholder="Post's body" />

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') ?? $post->category_id == $category->id ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.field>
                <x-form.button>Publish</x-form.button>
            </x-form.field>
        </form>
    </x-setting>
</x-layout>