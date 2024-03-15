<x-layout>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1 class="text-amber-300 text-center text-6xl">Log In</h1>
    <form action="/login" method="POST" class="flex-col justify-center my-12">
        @csrf
        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>

        <button type="submit" class="bg-[#0fb1dc]">Log in</button>
    </form>

</x-layout>
