<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form action="/login" method="POST" class="mt-10">
                @csrf
                
                <x-form.input name="email" type="email" placeholder="Your@email.com" />

                <x-form.input name="password" type="password" placeholder="Your password" />

                <div class="mb-4 mt-6 flex justify-between items-center">
                    <x-form.button>Log In</x-button>
                    <p class="text-sm">Doesn't have an account? <a href="/register" class="text-blue-500 hover:underline">Register</a></p>
                </div>

            </form>

        </main>
    </section>
</x-layout>