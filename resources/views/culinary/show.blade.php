<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Kuliner Semarang') }}
        </h2>
    </x-slot>
    
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg mt-10">
                <img src="{{ asset($place['image']) }}" alt="{{ $place['name'] }}" class="w-full h-96 object-cover">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $place['name'] }}</h3>
                    <p class="text-gray-300 mb-6">{{ $place['description'] }}</p>
                    <div class="text-gray-400">
                        <p class="mb-3"><i class="fas fa-map-marker-alt mr-2"></i>{{ $place['address'] }}</p>
                        <p class="mb-3"><i class="fas fa-star mr-2"></i>{{ $place['rating'] }}/5.0</p>
                        <p class="mb-3"><i class="fas fa-money-bill-wave mr-2"></i>{{ $place['price_range'] }}</p>
                        <p class="mb-3"><i class="fas fa-clock mr-2"></i>{{ $place['opening_hours'] }}</p>
                        
                        <div class="mt-6">
                            <h4 class="text-white text-lg font-semibold mb-3">Menu:</h4>
                            <ul class="list-disc list-inside">
                                @foreach($place['menu'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <a href="{{ route('culinary.index') }}" class="inline-block mt-8 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                        Back to Culinary
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>