<!-- resources/views/hotel/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Hotel Semarang') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($hotels as $hotel)
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset($hotel['image']) }}" alt="{{ $hotel['name'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $hotel['name'] }}</h3>
                        <p class="text-gray-300 mb-4">{{ $hotel['description'] }}</p>
                        <div class="text-gray-400">
                            <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>{{ $hotel['address'] }}</p>
                            <p class="mb-2"><i class="fas fa-star mr-2"></i>{{ $hotel['rating'] }}/5.0</p>
                            <p class="mb-2"><i class="fas fa-money-bill-wave mr-2"></i>{{ $hotel['price_range'] }}</p>
                        </div>
                        <a href="#" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>