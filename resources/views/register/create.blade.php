<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">

            <x-panel class="bg-gray-200">
                <h1 class="text-center font-bold text-xl">Register!</h1>
                
                <form action="/register" method="POST" class="mt-10">
                    @csrf
                    
                    <x-form.input name="name" placeholder="Your name" />
                    
                    <x-form.input name="username" placeholder="Your username" />
                    
                    <x-form.input name="email" type="email" placeholder="Your@email.com" />
                    
                    <x-form.input name="password" type="password" placeholder="Your password" autocomplete="new-password" />
                    
                    <div class="mb-4 mt-6 flex justify-between items-center">
                        <x-form.button>Register</x-button>
                        
                        <p class="text-sm">Already has an account?
                            <a href="/login" class="text-blue-500 hover:underline">Log in</a>
                        </p>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>