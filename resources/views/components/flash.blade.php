@if (session()->has('success'))
    <div x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        class="fixed bottom-3 right-3 bg-green-500 text-white py-2 px-4 rounded-xl text-sm"
    >
    <p>{{ session('success') }}</p>
    </div>
@elseif (session()->has('error'))
    <div x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        class="fixed bottom-3 right-3 bg-red-500 text-white py-2 px-4 rounded-xl text-sm"
    >
        <p>{{ session('error') }}</p>
    </div>
@endif