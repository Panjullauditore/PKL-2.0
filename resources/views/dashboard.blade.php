<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Wisata Kota Semarang') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <section class="relative h-[500px]">
        <img src="{{ asset('images/hero-bg.jpg') }}" alt="Wissemar" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-4">WISATA SEMARANG</h1>
                <p class="text-xl">Discover the beauty of Semarang</p>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h2 class="text-3xl font-bold mb-8 text-center">CATEGORIES</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($categories as $category)
                        <div class="bg-gray-700 rounded-lg p-6 transform hover:scale-105 transition duration-300">
                            <div class="w-16 h-16 mb-4 mx-auto">
                                <img src="{{ asset($category['icon']) }}" alt="{{ $category['name'] }}" class="w-full h-full">
                            </div>
                            <h3 class="text-xl font-bold text-center mb-2">{{ $category['name'] }}</h3>
                            <p class="text-gray-300 text-center">{{ $category['description'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Section -->
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h2 class="text-3xl font-bold mb-8 text-center">POPULAR DESTINATIONS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($popularPlaces as $place)
                        <div class="group relative overflow-hidden rounded-lg">
                            <img src="{{ asset($place['image']) }}" alt="{{ $place['name'] }}" 
                                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 
                                      transition duration-300 flex items-center justify-center">
                                <div class="text-center p-4">
                                    <h3 class="text-xl font-bold text-white mb-2">{{ $place['name'] }}</h3>
                                    <p class="text-gray-200">{{ $place['description'] }}</p>
                                    <a href="#" class="inline-block mt-4 px-6 py-2 bg-red-600 text-white rounded-full 
                                                  hover:bg-red-700 transition duration-300">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="max-w-xl mx-auto">
                        <h2 class="text-2xl font-bold text-white mb-4 text-center">Subscribe to Our Newsletter</h2>
                        <form class="flex gap-4">
                            <input type="email" placeholder="Enter your email" 
                                   class="flex-1 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" 
                                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 
                                           transition duration-300">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>