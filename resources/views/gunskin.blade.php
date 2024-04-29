<x-layout>
    <x-slot:heading>
        Gun skin Listings
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $gunskin['name']}}</h2>
    <p>
        This skin costs {{ $gunskin['value'] }} VP.
    </p>
</x-layout>
