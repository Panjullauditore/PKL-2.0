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
        <div class="flex-1 min-h-screen bg-gray-900 p-8 mt-7">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-white">
                    <span x-data="{ text: '', fullText: 'Manage Places', index: 0 }"
                        x-init="setInterval(() => { if (index < fullText.length) { text += fullText[index]; index++; } }, 100)">
                        <span x-text="text"></span>
                    </span>
                </h1>
            </div>

            <!-- Add New Place Form -->
            <div class="md:col-span-2 bg-gray-800 rounded-3xl p-8 shadow-sm">
                <div class="space-y-6">
                    <h2 class="text-white text-2xl">Add New Place</h2>
                    <form action="{{ route('addplaces.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Input for Place Name, Description, Email, Phone Number, Address, Category -->
                        <div class="space-y-4">
                            <input type="text" name="place_name" placeholder="Place Name" class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                            <textarea name="description" placeholder="Description" class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500"></textarea>

                            <!-- Email Input -->
                            <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                            
                            <!-- Phone Number Input -->
                            <input type="text" name="phone" placeholder="Phone Number" class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                            
                            <!-- Address Input -->
                            <input type="text" name="address" placeholder="Address" class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                            
                            <!-- Category Selection (Multiple) -->
                            <h4 class="text-white">Category</h4>
                            <div class="space-y-2">
                                @foreach ($tags as $tag)
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="category[]" value="{{ $tag->id }}" class="form-checkbox h-5 w-5 text-indigo-600">
                                        <span class="text-white">{{ $tag->name }}</span>
                                    </label>    
                                @endforeach
                            </div>
                            
                            <!-- Image Upload -->
                            <div class="w-full aspect-video bg-gray-700 relative rounded-lg overflow-hidden cursor-pointer">
                                <div class="absolute inset-0" id="mainImageContainer">
                                    <img id="mainImagePreview" src="" alt="Preview" class="w-full h-full object-cover hidden">
                                    <div id="mainImagePlaceholder" class="w-full h-full flex flex-col items-center justify-center">
                                        <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        <span class="mt-2 text-sm text-gray-500">Upload Image</span>
                                    </div>
                                </div>
                                <input type="file" name="image" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" @change="handleMainImageUpload($event)">
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4 mt-4">
                            <button type="button" @click="showModal = false" class="px-4 py-2 text-gray-400 hover:text-gray-300">
                                Cancel
                            </button>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                                Add Place
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Display List of Added Places -->
            <div class="mt-8 bg-gray-800 rounded-3xl p-8 shadow-sm">
                <h2 class="text-white text-2xl mb-4">Places List</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-white">Image</th>
                            <th class="px-4 py-2 text-white">Place Name</th>
                            <th class="px-4 py-2 text-white">Description</th>
                            <th class="px-4 py-2 text-white">Email</th>
                            <th class="px-4 py-2 text-white">Phone</th>
                            <th class="px-4 py-2 text-white">Address</th>
                            <th class="px-4 py-2 text-white">Category</th>
                            <th class="px-4 py-2 text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                            <tr class="border-b border-gray-700">
                                <td class="px-4 py-2">
                                    <img src="{{ asset('storage/' . $place->image) }}" alt="Image" class="w-20 h-20 object-cover rounded">
                                </td>
                                <td class="px-4 py-2 text-white">{{ $place->name }}</td>
                                <td class="px-4 py-2 text-white">{{ $place->description }}</td>
                                <td class="px-4 py-2 text-white">{{ $place->email }}</td>
                                <td class="px-4 py-2 text-white">{{ $place->phone }}</td>
                                <td class="px-4 py-2 text-white">{{ $place->address }}</td>
                                <td class="px-4 py-2 text-white">{{ $place->category }}</td>
                                <td class="px-4 py-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('places.edit', $place->id) }}" class="text-blue-600 hover:text-blue-800 mr-5">Edit</a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('places.destroy', $place->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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

    </script>
    @endpush
</x-app-layout>
