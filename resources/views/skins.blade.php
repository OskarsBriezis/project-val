<x-layout>
    <x-slot:heading>
        Gun skin Listings
    </x-slot:heading>
    <ul>
        @foreach ($skins as $skin)
            <li>
                <a href="/skins/{{ $skin['id'] }}" class="text-blue-500 hover:underline">

                    <strong>{{ $skin['name'] }} </strong>: Costs {{ $skin['value'] }} VP.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
