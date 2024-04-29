<x-layout>
    <x-slot:heading>
        Gun skin Listings
    </x-slot:heading>
    <ul>
        @foreach ($gunskins as $gunskin)
            <li>
                <a href="/gunskins/{{ $gunskin['id'] }}" class="text-blue-500 hover:underline">

                    <strong>{{ $gunskin['name'] }} </strong>: Costs {{ $gunskin['value'] }} VP.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
