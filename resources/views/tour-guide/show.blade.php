<!-- resources/views/tour-guide/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ $guide['name'] }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset($guide['image']) }}" alt="{{ $guide['name'] }}" class="w-full h-96 object-cover">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $guide['name'] }}</h3>
                    <p class="text-gray-300 mb-6">{{ $guide['description'] }}</p>
                    <div class="text-gray-400">
                        <p class="mb-3"><i class="fas fa-language mr-2"></i>Languages: {{ implode(', ', $guide['languages']) }}</p>
                        <p class="mb-3"><i class="fas fa-star mr-2"></i>Rating: {{ $guide['rating'] }}/5.0</p>
                        <p class="mb-3"><i class="fas fa-money-bill-wave mr-2"></i>Price Range: {{ $guide['price_range'] }}</p>
                        <p class="mb-3"><i class="fas fa-phone mr-2"></i>Contact: {{ $guide['phone'] }}</p>
                        
                        @if(isset($guide['specialties']) && count($guide['specialties']) > 0)
                        <div class="mt-6">
                            <h4 class="text-white text-lg font-semibold mb-3">Tour Specialties:</h4>
                            <ul class="list-disc list-inside text-gray-300">
                                @foreach($guide['specialties'] as $specialty)
                                    <li>{{ $specialty }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    
                    <div class="mt-8 flex space-x-4">
                        <a href="{{ route('tour-guide.index') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                            Back to Tour Guides
                        </a>
                        <a href="#" class="inline-block px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300">
                            Book Guide
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>