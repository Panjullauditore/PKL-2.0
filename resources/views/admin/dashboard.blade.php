<x-app-layout>
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen bg-gray-900">
        <!-- Sidebar -->
        <div :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}"
            class="min-h-screen bg-slate-800 p-6 transition-all duration-300">
            <div class="mt-10">
                <nav class="flex flex-col gap-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">DASHBOARD</span>
                    </x-nav-link>

                    <x-nav-link href="#" :active="request()->routeIs('places')"
                        class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">PLACES</span>
                    </x-nav-link>

                    <x-nav-link href="#" :active="request()->routeIs('culinaries')"
                        class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">CULINARIES</span>
                    </x-nav-link>

                    <x-nav-link href="#" :active="request()->routeIs('users')"
                        class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">USERS</span>
                    </x-nav-link>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 min-h-screen bg-gray-900 p-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-white">
                    <span x-data="{ text: '', fullText: 'Welcome, {{ Auth::user()->name }}!', index: 0 }"
                        x-init="setInterval(() => { if (index < fullText.length) { text += fullText[index]; index++; } }, 100)">
                        <span x-text="text"></span>
                    </span>
                </h1>
            </div>

            <!-- Profile Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Profile Card -->
                <div class="bg-gray-800 rounded-3xl p-8 shadow-sm">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/userProfile/' . Auth::user()->id . '.png') }}" alt="Profile"
                            class="w-32 h-32 rounded-full mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-xl text-white">{{'@' . Auth::user()->name }}</span>
                            <img src="{{ asset('img/flag/Flag_of_Indonesia.png') }}" alt="Flag" class="w-6">
                        </div>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="md:col-span-2 bg-gray-800 rounded-3xl p-8 shadow-sm">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-white">{{ Auth::user()->name }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white">{{ Auth::user()->email }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-white">{{ Auth::user()->phone }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-white">{{ Auth::user()->country }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900" x-data="{ showModal: false, selectedType: '' }">
                <!-- Project Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    @foreach([
                    'Hotel' => 0,
                    'Culinary' => 0,
                    'Shopping' => 0,
                    'Entertainment' => 0,
                    'Tourist Attraction' => 0,
                    'Tour Guide' => 0
                    ] as $type => $defaultCount)
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="text-white text-lg">{{ $type }}</h3>
                        <p class="text-white text-4xl font-bold"
                            id="count-{{ str_replace(' ', '-', strtolower($type)) }}">
                            {{ $projectCounts[$type] ?? $defaultCount }}
                        </p>
                    </div>
                    @endforeach
                </div>

                <!-- Add Project Section -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Add Project</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <button @click="showModal = true; selectedType = 'Hotel'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Hotel
                        </button>
                        <button @click="showModal = true; selectedType = 'Culinary'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Culinary
                        </button>
                        <button @click="showModal = true; selectedType = 'Shopping'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Shopping
                        </button>
                        <button @click="showModal = true; selectedType = 'Entertainment'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Entertainment
                        </button>
                        <button @click="showModal = true; selectedType = 'Tourist Attraction'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Tourist Attraction
                        </button>
                        <button @click="showModal = true; selectedType = 'Tour Guide'"
                            class="bg-gray-800/50 hover:bg-gray-700/50 text-gray-400 py-3 rounded-lg transition-colors">
                            Tour Guide
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <template x-teleport="body">
                    <div x-show="showModal" class="fixed inset-0 z-50 overflow-y-auto" x-transition.opacity>
                        <div class="flex items-center justify-center min-h-screen px-4 py-6">
                            <div class="fixed inset-0 bg-gray-900/75" @click="showModal = false"></div>

                            <div class="relative bg-gray-800 rounded-lg w-full max-w-xl p-6">
                                <form id="projectForm" class="space-y-6" enctype="multipart/form-data"
                                    action="{{ route('admin.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" x-model="selectedType">

                                    <!-- Main Image Upload -->
                                    <div
                                        class="w-full aspect-video bg-gray-700 relative rounded-lg overflow-hidden cursor-pointer">
                                        <div class="absolute inset-0" id="mainImageContainer">
                                            <img id="mainImagePreview" src="" alt="Preview"
                                                class="w-full h-full object-cover hidden">
                                            <div id="mainImagePlaceholder"
                                                class="w-full h-full flex flex-col items-center justify-center">
                                                <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                                <span class="mt-2 text-sm text-gray-500">Upload Image</span>
                                            </div>
                                        </div>
                                        <input type="file" name="main_image" accept="image/*"
                                            class="absolute inset-0 opacity-0 cursor-pointer"
                                            @change="handleMainImageUpload($event)">
                                    </div>

                                    <!-- Form Fields -->
                                    <input type="text" name="places_name" placeholder="Enter Business Name"
                                        class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                                    <input type="text" name="address" placeholder="Enter Business Address"
                                        class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                                    <input type="text" name="phone" placeholder="Enter Business Phone Number"
                                        class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">

                                    <!-- Add Tag Button -->
                                    <a href="{{ route('admin.places.add') }}"
                                        class="block text-center px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                        Add Tags
                                    </a>

                                    <!-- Gallery -->
                                    <div>
                                        <p class="text-sm text-gray-500 mb-2">Gallery</p>
                                        <div class="grid grid-cols-5 gap-4">
                                            @for($i = 0; $i < 5; $i++) <div
                                                class="aspect-square bg-gray-700 relative rounded-lg overflow-hidden cursor-pointer">
                                                <div class="absolute inset-0">
                                                    <img id="galleryPreview{{ $i }}" src="" alt="Gallery {{ $i + 1 }}"
                                                        class="w-full h-full object-cover hidden">
                                                    <div id="galleryPlaceholder{{ $i }}"
                                                        class="w-full h-full flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-gray-500" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <input type="file" name="gallery_images[]" accept="image/*"
                                                    class="absolute inset-0 opacity-0 cursor-pointer"
                                                    @change="handleGalleryImageUpload($event, {{ $i }})">
                                        </div>
                                        @endfor
                                    </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex justify-end space-x-4">
                                <button type="button" @click="showModal = false"
                                    class="px-4 py-2 text-gray-400 hover:text-gray-300">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                                    CONFIRM
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
            </template>
        </div>

        @push('scripts')
        <script>
            function handleMainImageUpload(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    const preview = document.getElementById('mainImagePreview');
                    const placeholder = document.getElementById('mainImagePlaceholder');

                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        placeholder.classList.add('hidden');
                    };

                    reader.readAsDataURL(file);
                }
            }

            function handleGalleryImageUpload(event, index) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    const preview = document.getElementById(`galleryPreview${index}`);
                    const placeholder = document.getElementById(`galleryPlaceholder${index}`);

                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        placeholder.classList.add('hidden');
                    };

                    reader.readAsDataURL(file);
                }
            }

            document.getElementById('projectForm').addEventListener('submit', async function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                try {
                    const response = await fetch('{{ route("admin.projects.store") }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    });

                    const result = await response.json();

                    if (result.success) {
                        // Update count
                        const countElement = document.getElementById(
                            `count-${result.type.toLowerCase().replace(' ', '-')}`);
                        if (countElement) {
                            countElement.textContent = result.count;
                        }

                        // Close modal and reset form
                        document.querySelector('[x-data]').__x.$data.showModal = false;
                        this.reset();

                        // Reset image previews
                        document.getElementById('mainImagePreview').classList.add('hidden');
                        document.getElementById('mainImagePlaceholder').classList.remove('hidden');

                        for (let i = 0; i < 5; i++) {
                            document.getElementById(`galleryPreview${i}`).classList.add('hidden');
                            document.getElementById(`galleryPlaceholder${i}`).classList.remove('hidden');
                        }
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            });

        </script>
        @endpush
</x-app-layout>
