<x-layout>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1 class="text-4xl mt-10 mb-10">Sign up</h1>
    <form action="/register" method="POST">
        @csrf

           <x-input titulo="Name" type="text" nombre="name"/>

           <x-input titulo="Email" type="text" nombre="email"/>

            <x-input titulo="Password" type="text" nombre="password"/>

            <x-input titulo="Birthday" type="text" nombre="birthday"/>

        <button type="submit">Submit</button>
    </form>
</x-layout>
