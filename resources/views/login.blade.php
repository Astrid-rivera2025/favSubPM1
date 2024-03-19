<x-layout>
    <h1 class="text-emerald-400 font-serif text-center text-8xl py-4">Log In</h1>
    <form action="/login" method="POST" class="flex-col justify-center my-12 ">
        @csrf
    
        <div class="text-center py-5 font-serif">
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div class="text-center font-serif">
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>

        <button type="submit" class="bg-[#0fb1dc] rounded-lg my-16 text-3xl py-3 px-3" >Log in</button>
    </form>
    

</x-layout>
