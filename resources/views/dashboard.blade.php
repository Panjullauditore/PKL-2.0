<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('img/dashboard.png') }}" alt="Semarang" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative text-center text-white px-4">
            <h1 class="text-5xl font-bold mb-4">WISATA SEMARANG</h1>
            <p class="text-xl">Discover the beauty of Semarang</p>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-8">ABOUT US</h2>
                <div class="max-w-3xl mx-auto">
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Website Info Wisata Kota Semarang adalah portal online yang menyediakan
                        panduan lengkap tentang destinasi wisata di Kota Semarang. Dari landmark
                        terkenal, wisata alam, kegiatan budaya, serta ulasan terkini dari para pelancong.
                        Dengan navigasi yang mudah dan konten yang selalu diperbarui, platform ini
                        bertujuan menjadi sumber informasi utama bagi wisatawan untuk menjelajahi
                        keindahan, sejarah, dan budaya kota Semarang.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white text-center mb-12">CATEGORIES</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Hotel Card -->
                <a href="{{ route('hotel') }}" class="block">
                    <div
                        class="bg-rose-500 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Hotel</h3>
                                <p class="text-white/80">Hotel di Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Culinary Card -->
                <a href="{{ route('kuliner') }}" class="block">
                    <div
                        class="bg-orange-300 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Culinary</h3>
                                <p class="text-white/80">Tempat Kuliner di Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Shopping Card -->
                <a href="{{ route('shopping') }}" class="block">
                    <div
                        class="bg-emerald-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Shopping</h3>
                                <p class="text-white/80">Oleh-oleh khas Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Entertainment Card -->
                <a href="{{ route('entertainment') }}" class="block">
                    <div
                        class="bg-cyan-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Entertainment</h3>
                                <p class="text-white/80">Tempat Hiburan di Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Tempat Wisata -->
                <a href="{{ route('wisata') }}" class="block">
                    <div
                        class="bg-purple-500 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Wisata</h3>
                                <p class="text-white/80">Tempat Wisata di Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Tour Guide Card -->
                <a href="{{ route('tour.guide') }}" class="block">
                    <div
                        class="bg-lime-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 cursor-pointer">
                        <div class="p-6">
                            <div class="flex flex-col items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mb-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <h3 class="text-xl font-bold text-white mb-2">Tour Guide</h3>
                                <p class="text-white/80">Pemandu Wisata Kota Semarang</p>
                            </div>
                        </div>
                    </div>
                </a>
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

     <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex flex-col items-center text-gray-400 text-sm">
                <div class="mb-2">Contact Us</div>
                <a href="mailto:semarangpemkot@semarangkota" class="hover:text-white mb-1">semarangpemkot@semarangkota</a>
                <span>(024) 3513366 – 3515871 Fax:(024) 3542522</span>
            </div>
            <div class="text-center text-gray-400 text-sm mt-2">
                &copy; 2025 Wisata Semarang. All rights reserved.
            </div>
        </div>
    </footer>
</x-app-layout>
