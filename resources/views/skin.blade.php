<x-layout>
    <x-slot:heading>
        Gun skin Listings
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $skin['name']}}</h2>
    <p>
        This skin costs {{ $skin['value'] }} VP.
    </p>
</x-layout>
