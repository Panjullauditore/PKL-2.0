<!-- Inside <head> tag, before your other stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Kuliner Semarang') }}
        </h2>
    </x-slot>

    
    <!-- {{dd($place)}} -->
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg mt-10">
                <img src="{{ asset($place['image'] ?? 'images/default.jpg') }}" alt="{{ $place['name'] }}" class="w-full h-96 object-cover">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $place['name'] }}</h3>
                    <p class="text-gray-300 mb-6">{{ $place['desc'] }}</p>
                    <div class="text-gray-400">
                        <p class="mb-3"><i class="fas fa-map-marker-alt mr-2"></i>{{ $place['location'] }}</p>
                        <!-- <p class="mb-3"><i class="fas fa-star mr-2"></i>{{ $place['rating'] }}/5.0</p> -->
                        
                        <div class="mt-6">
                            <h4 class="text-white text-lg font-semibold mb-3">Menu:</h4>
                            <ul class="list-disc list-inside">
                                <!-- @foreach($place['menu'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach -->
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Review Section -->
                    <div class="mt-8 border-t border-gray-700 pt-8">
                        <h4 class="text-white text-lg font-semibold mb-6">Reviews</h4>
                        
                        <!-- Review Form -->
                        <form id="reviewForm" method="POST" action="{{ route('culinary.review.store', $place['id']) }}" class="mb-8">
                            @csrf
                            <input type="hidden" name="rating" id="ratingInput" value="0">
                            <div class="flex gap-1 mb-4" id="starRating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="far fa-star text-2xl text-gray-400 hover:text-yellow-400 cursor-pointer" data-rating="{{ $i }}"></i>  
                                @endfor
                            </div>
                            <div class="mb-4">
                                <textarea name="comment" id="comment" rows="4" placeholder="Share your own experience at this place" class="bg-gray-700 text-white rounded-lg w-full p-2" required></textarea>
                            </div>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Submit Review</button>
                        </form>

                        <!-- Display Reviews -->
                        <div id="reviewsContainer" class="space-y-6">
                            @foreach($reviews as $review)
                                <div class="bg-gray-700 rounded-lg p-4">
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-yellow-400">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $review['rating'])
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="text-gray-400 ml-2">{{ $review['created_at']->diffForHumans() }}</span>
                                    </div>
                                    <!-- Display Username -->
                                    <p class="text-gray-300 font-semibold">{{ $review['username'] }}</p>
                                    <p class="text-gray-300">{{ $review['comment'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('places.index', 'Restaurant') }}" class="inline-block mt-8 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                        Back to Culinary
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
