{{-- resources/views/hotel/detail.blade.php --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b bg-gray-700">
                    {{-- Hotel Header --}}
                    <div class="relative mb-6">
                        <img src="{{ asset('img/QuestHotel.png') }}" alt="{{ $hotel['name'] }}" 
                             class="w-full h-full object-cover rounded-lg">
                        <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                            <h1 class="text-3xl font-bold text-white">{{ $hotel['name'] }}</h1>
                            <p class="text-white mt-2">{{ $hotel['address'] }} </p> <a style="color: #FFFFFF;" href="tel:{{ $hotel['phone'] }}">
                                {{ $hotel['phone'] }}
                            </a>
                        </div>
                    </div>

                    {{-- Gallery --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        @foreach($hotel['gallery'] as $image)
                        <div class="relative h-48">
                            <img src="{{ asset('images/gallery/' . $image) }}" 
                                 alt="Gallery image" 
                                 class="w-full h-full object-cover rounded-lg">
                        </div>
                        @endforeach
                    </div>


                    {{-- Rating & Contact --}}
                    <h2 class="text-2xl font-bold mb-4" style="color: #FFFFFF;">Reviews</h2>
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= floor($hotel['rating']))
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="ml-2" style="color: #FFFFFF;">{{ $hotel['rating'] }}/5 ({{ $hotel['reviews_count'] }} reviews)</span>
                        </div>
                    </div>

                    {{-- Reviews Section --}}
                    <div class="mt-8">
                        <div class="space-y-4">
                            <div class="#2C2A2A p-4 rounded-lg" style="background-color: #2C2A2A;">
                                <div class="flex items-center mb-2">
                                    <div class="w-10 h-10 rounded-full" style="background-color: #2C2A2A;"></div>
                                    <div class="ml-3">
                                        <p class="font-semibold" style="color: #FFFFFF;">Jeremy</p>
                                        <div class="flex items-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p style="color: #FFFFFF;">Hotelnya sangat bagus, makanan enak dan bervariasi, kondisi kamar bersih dan terawat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>