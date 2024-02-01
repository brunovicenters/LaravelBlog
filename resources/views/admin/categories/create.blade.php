<x-layout>
    <x-setting heading="Create New Category">
        <form action="/admin/categories" method="POST" >
            @csrf

            <x-form.input name="name" placeholder="Category's name" required />

            <x-form.field>
                <x-form.button>Create</x-form.button>
            </x-form.field>
        </form>
    </x-setting>
</x-layout>