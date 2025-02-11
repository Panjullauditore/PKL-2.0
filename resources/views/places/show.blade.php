<!-- Inside <head> tag, before your other stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

@include('layouts.swal')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Kuliner Semarang') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg mt-10">
                <img src="{{ asset($place->image ?? 'images/default.jpg') }}" alt="{{ $place->name }}"
                    class="w-full h-96 object-cover">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $place->name }}</h3>
                    <!-- Average Rating Section -->
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-2">
                            @php
                            $averageRating = $reviews->avg('rating');
                            $fullStars = floor($averageRating);
                            $hasHalfStar = $averageRating - $fullStars >= 0.5;
                            @endphp

                            @for ($i = 1; $i <= 5; $i++) @if ($i <=$fullStars) <i class="fas fa-star"></i>
                                @elseif ($i == $fullStars + 1 && $hasHalfStar)
                                <i class="fas fa-star-half-alt"></i>
                                @else
                                <i class="far fa-star"></i>
                                @endif
                                @endfor
                        </div>
                        <span class="text-gray-400">({{ number_format($averageRating, 1) }}/5 from
                            {{ $reviews->count() }} reviews)</span>
                    </div>
                    <p class="text-gray-300 mb-6">{{ $place->desc }}</p>
                    <p class="text-gray-300 mb-6">{{ $place->desc }}</p>
                    <div class="text-gray-400">
                        <p class="mb-3"><i class="fas fa-map-marker-alt mr-2"></i>{{ $place->location }}</p>
                        <p class="mb-3"><i class="fas fa-phone mr-2"></i>{{ $place->phoneNum }}</p>
                        <p class="mb-3"><i class="fas fa-envelope mr-2"></i>{{ $place->email }}</p>

                        <div class="mt-6">
                            <h4 class="text-white text-lg font-semibold mb-3">Menu Items:</h4>
                            <ul class="list-disc list-inside">
                                @foreach($menu as $menuItem)
                                <li class="text-gray-300">{{ $menuItem->culinary->name }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Tags Section -->
                        <div class="mt-4">
                            <h4 class="text-white text-lg font-semibold mb-3">Tags:</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($tags as $tag)
                                <span class="px-3 py-1 bg-gray-700 rounded-full text-sm">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Review Section -->
                    <div class="mt-8 border-t border-gray-700 pt-8">
                        <h4 class="text-white text-lg font-semibold mb-6">Reviews</h4>

                        <!-- Review Form -->
                        <form id="reviewForm" method="POST" action="{{ route('review.store', $place->id) }}"
                            class="mb-8">
                            @csrf
                            <input type="hidden" name="rating" id="ratingInput" value="0">

                            <div class="flex gap-1 mb-4" id="starRating">
                                @for ($i = 1; $i <= 5; $i++) <i
                                    class="fa-regular fa-star text-2xl text-gray-400 hover:text-yellow-400 cursor-pointer star-rating"
                                    data-rating="{{ $i }}"></i>
                                    @endfor
                            </div>

                            <div class="mb-4">
                                <textarea name="desc" rows="4" placeholder="Share your own experience at this place"
                                    class="bg-gray-700 text-white rounded-lg w-full p-2">{{ old('desc') }}</textarea>
                            </div>

                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                Submit Review
                            </button>
                            <!-- Include SweetAlert2 -->
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                        @if(!Auth::check())
                        <script>
                            document.getElementById('reviewForm').addEventListener('submit', function(e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Please login to submit a review',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '{{ route("login") }}';
                                    }
                                });
                            });
                        </script>
                        @else
                        <script>
                            document.getElementById('reviewForm').addEventListener('submit', function(e) {
                                const rating = document.getElementById('ratingInput').value;
                                const description = document.querySelector('textarea[name="desc"]').value;

                                if (rating === '0' || description.trim() === '') {
                                    e.preventDefault();
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'Please provide both a rating and a review description',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                                
                                else {
                                    if ({{ $thisUserReview ? 'true' : 'false' }}) {
                                        e.preventDefault();
                                        Swal.fire({
                                            title: 'Error!',
                                            text: 'You have already submitted a review for this place',
                                            icon: 'error',
                                            confirmButtonText: 'OK'
                                        });
                                    }
                                }
                            });
                        </script>
                        @endif
                        </form>

                        
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const stars = document.querySelectorAll('.star-rating');
                            const ratingInput = document.getElementById('ratingInput');
                            const form = document.getElementById('reviewForm');

                            // Form submission validation
                            

                            // Star rating functionality
                            stars.forEach(star => {
                                star.addEventListener('click', function () {
                                    const rating = this.getAttribute('data-rating');
                                    ratingInput.value = rating;
                                    updateStars(rating);
                                    console.log('Selected rating:', rating); // Debug log
                                });

                                star.addEventListener('mouseover', function () {
                                    const rating = this.getAttribute('data-rating');
                                    highlightStars(rating);
                                });
                            });

                            document.getElementById('starRating').addEventListener('mouseleave', function () {
                                const currentRating = ratingInput.value;
                                highlightStars(currentRating);
                            });

                            function updateStars(rating) {
                                stars.forEach(star => {
                                    const value = star.getAttribute('data-rating');
                                    if (value <= rating) {
                                        star.classList.remove('fa-regular');
                                        star.classList.add('fa-solid');
                                        star.classList.add('text-yellow-400');
                                    } else {
                                        star.classList.add('fa-regular');
                                        star.classList.remove('fa-solid');
                                        star.classList.remove('text-yellow-400');
                                    }
                                });
                            }

                            function highlightStars(rating) {
                                stars.forEach(star => {
                                    const value = star.getAttribute('data-rating');
                                    if (value <= rating) {
                                        star.classList.remove('fa-regular');
                                        star.classList.add('fa-solid');
                                        star.classList.add('text-yellow-400');
                                    } else {
                                        star.classList.add('fa-regular');
                                        star.classList.remove('fa-solid');
                                        star.classList.remove('text-yellow-400');
                                    }
                                });
                            }
                        });

                    </script>
                    {{-- Tambahkan ini di bawah form review --}}
                    @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Display Reviews -->
                    <div id="reviewsContainer" class="space-y-6">
                        @foreach($reviews as $review)
                        <div class="bg-gray-700 rounded-lg p-4">
                            <p class="text-gray-300 font-semibold">{{ $review->user->name }}</p>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$review->rating)
                                        <i class="fas fa-star pointer-events-none"></i>
                                        @else
                                        <i class="far fa-star pointer-events-none"></i>
                                        @endif
                                        @endfor
                                </div>

                            </div>

                            <p class="text-gray-300 break-words whitespace-normal max-w-xxxl">{{ $review->desc }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

{{dd($thisUserReview)}}
