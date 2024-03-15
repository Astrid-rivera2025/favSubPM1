<x-layout>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1>Sign up</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
           <x-input titulo="Name" type="text" nombre="name"/>
        </div>
        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="text" nombre="password"/>
        </div>
        <div>
            <x-input titulo="Birthday" type="text" nombre="birthday"/>
        </div>

        <button type="submit">Submit</button>
    </form>
</x-layout>
