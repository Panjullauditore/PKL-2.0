<!-- resources/views/tour-guide/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Pemandu Wisata Semarang') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($guides as $guide)
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="w-full h-auto">
                        <img src="{{ asset($guide['image']) }}" alt="{{ $guide['name'] }}" class="w-full">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $guide['name'] }}</h3>
                        <p class="text-gray-300 mb-4">{{ $guide['description'] }}</p>
                        <div class="text-gray-400">
                            <p class="mb-2"><i class="fas fa-language mr-2"></i>{{ implode(', ', $guide['languages']) }}
                            </p>
                            <p class="mb-2"><i class="fas fa-star mr-2"></i>{{ $guide['rating'] }}/5.0</p>
                            <p class="mb-2"><i class="fas fa-money-bill-wave mr-2"></i>{{ $guide['price_range'] }}</p>
                            <p><i class="fas fa-phone mr-2"></i>{{ $guide['phone'] }}</p>
                        </div>
                        <a href="{{ route('tour-guide.show', $loop->index) }}"
                            class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Pagination yang benar -->
        @if ($guides->hasPages())
        <div class="mt-6">
            <nav class="flex justify-end">
                <ul class="flex items-center space-x-1">
                    {{-- Previous Page --}}
                    @if ($guides->onFirstPage())
                    <li class="px-2 py-1 text-gray-400 cursor-not-allowed">
                        <span>&lt;</span>
                    </li>
                    @else
                    <li>
                        <a href="{{ $guides->previousPageUrl() }}"
                            class="px-2 py-1 text-gray-300 hover:text-white transition-colors">
                            &lt;
                        </a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($guides->getUrlRange(1, $guides->lastPage()) as $page => $url)
                    @if ($page == $guides->currentPage())
                    <li>
                        <span class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                            {{ $page }}
                        </span>
                    </li>
                    @else
                    <li>
                        <a href="{{ $url }}"
                            class="px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition-colors">
                            {{ $page }}
                        </a>
                    </li>
                    @endif
                    @endforeach

                    {{-- Next Page --}}
                    @if ($guides->hasMorePages())
                    <li>
                        <a href="{{ $guides->nextPageUrl() }}"
                            class="px-2 py-1 text-gray-300 hover:text-white transition-colors">
                            &gt;
                        </a>
                    </li>
                    @else
                    <li class="px-2 py-1 text-gray-400 cursor-not-allowed">
                        <span>&gt;</span>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        @endif
</x-app-layout>
