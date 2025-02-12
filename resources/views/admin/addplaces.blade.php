<x-app-layout>
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen bg-gray-900">
        <!-- Sidebar -->
        <div :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}" class="min-h-screen bg-slate-800 p-6 transition-all duration-300">
            <div class="mt-10">
                <nav class="flex flex-col gap-2">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">DASHBOARD</span>
                    </x-nav-link>

                    <x-nav-link :href="route('addplaces.index')" :active="request()->routeIs('places')" class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">PLACES</span>
                    </x-nav-link>

                    <x-nav-link :href="route('addculinary.index')" :active="request()->routeIs('addculinary.index')" class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-white transition-all duration-300">CULINARIES</span>
                    </x-nav-link>

                    <x-nav-link :href="route('admin.usermonitoring.index')" :active="request()->routeIs('users')" class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
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
                            <!-- Place Name -->
                            <input type="text" name="place_name" placeholder="Place Name" required maxlength="255"
                                class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('place_name') border-red-500 @enderror">
                            

                            <!-- Description -->
                            <textarea name="description" placeholder="Description" required
                                class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('description') border-red-500 @enderror"></textarea>
                            

                            <!-- Email Input -->
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('email') border-red-500 @enderror">
                            

                            <!-- Phone Number Input -->
                            <input type="text" name="phone" placeholder="Phone Number" required pattern="\+?\d{10,15}" title="Enter a valid phone number"
                                class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('phone') border-red-500 @enderror">
                            

                            <!-- Address Input -->
                            <input type="text" name="address" placeholder="Address" required
                                class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('address') border-red-500 @enderror">
                            

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
                            <!-- Image Upload with Filename Display -->
                            <div class="flex items-center gap-4 mt-4">
                                <label for="imageUpload" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg cursor-pointer">
                                    Upload Image
                                </label>
                                <span id="fileName" class="text-gray-400"></span>
                                <input type="file" id="imageUpload" name="image" accept="image/*" class="hidden" onchange="handleMainImageUpload(event)">
                            </div>

                            <script>
                            function handleMainImageUpload(event) {
                                const fileInput = event.target;
                                const fileNameDisplay = document.getElementById('fileName');
                                
                                if (fileInput.files && fileInput.files[0]) {
                                    // Get the file name
                                    const fileName = fileInput.files[0].name;
                                    
                                    // Display the file name
                                    fileNameDisplay.textContent = fileName;
                                    
                                    // Optional: Preview the image if needed
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        // If you have an image preview element, you can set its src here
                                        // const preview = document.getElementById('imagePreview');
                                        // preview.src = e.target.result;
                                        // preview.classList.remove('hidden');
                                    }
                                    reader.readAsDataURL(fileInput.files[0]);
                                } else {
                                    // Clear the filename if no file is selected
                                    fileNameDisplay.textContent = '';
                                }
                            }
                            </script>
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
                            <td class="px-4 py-2 text-white">Image</td>
                            <td class="px-4 py-2 text-white">Place Name</td>
                            <td class="px-4 py-2 text-white">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                            <tr class="border-b border-gray-700">
                                <td class="px-4 py-2">
                                    <img src="{{ asset('storage/' . $place->image) }}" alt="Image" class="w-20 h-20 object-cover rounded">
                                </td>
                                <td class="px-4 py-2 text-white">{{ $place->name }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex flex-col items-start space-y-2"> <!-- Gunakan flex-col untuk menumpuk tombol -->
                                        <!-- Edit Button -->
                                        <a href="{{ route('places.edit', $place->id) }}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2">
                                            <?xml version="1.0" ?><svg class="feather feather-edit" fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                            Edit
                                        </a>
                            
                                        <!-- Delete Button -->
                                        <form class="inline-block"> <!-- Ubah ke inline-block -->
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-500 hover:text-red-700 transition-colors duration-200 flex items-center gap-2"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
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

