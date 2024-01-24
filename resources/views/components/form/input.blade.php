@props(['name', 'type' => 'text', 'placeholder' => ''])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input
        type="{{ $type }}"
        class="border border-gray-400 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ old($name) }}"
        required
    />

    <x-form.error name="{{$name}}" />
</x-form.field>