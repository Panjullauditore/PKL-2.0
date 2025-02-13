<!-- Add New Place Form -->
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

        <div>
        <div class="md:col-span-2 bg-gray-800 rounded-3xl p-8 shadow-sm mt-10 mx-4">
            <div class="space-y-6">
                <h2 class="text-white text-2xl">Edit</h2>
                <form action="{{ route('places.update', $place->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Input for Place Name, Description, Email, Phone Number, Address, Category -->
                    <div class="space-y-4">
                        <img src="{{ asset('storage/' . $place->image) }}" alt="Place Image" class="w-full h-64 object-cover rounded-lg">
                        <!-- Place Name -->
                        <input type="text" name="place_name" required maxlength="255" value="{{$place->name}}" 
                            class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('place_name') border-red-500 @enderror">
                        

                        <!-- Description -->
                        <textarea name="description" required
                            class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('description') border-red-500 @enderror">{{$place->desc}}</textarea>
                        

                        <!-- Email Input -->
                        <input type="email" name="email" value="{{ $place->email }}" required
                            class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('email') border-red-500 @enderror">
                        

                        <!-- Phone Number Input -->
                        <input type="text" name="phone" value="{{$place->phoneNum}}" required title="Enter a valid phone number"
                            class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('phone') border-red-500 @enderror">
                        

                        <!-- Address Input -->
                        <input type="text" name="address" value="{{$place->location}}" required
                            class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500 @error('address') border-red-500 @enderror">
                        
                            <h4 class="text-white">Last Category</h4>
                        <div class="space-y-2">
                            @foreach ($last_tags as $last_tag)
                                <label class="flex items-center space-x-2">
                                    <span class="text-white">{{ $last_tag->name }}</span>
                                    
                                  
                            @endforeach
                        </div>

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
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            update
                        </button>
                        
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-8 bg-gray-800 rounded-3xl p-8 shadow-sm mt-10 mx-4">
            <h2 class="text-white text-2xl mb-4">Items List</h2>
            <form action="{{ route('places.additems', $place->id) }}" method="POST">
            @csrf
            <table class="w-full table-auto">
                <thead>
                <tr>
                    <td class="px-16 py-6 text-white text-lg font-bold"></td>
                    
                    <td class="px-16 py-6 text-white text-lg font-bold">Items Name</td>
                    <td class="px-16 py-6 text-white text-lg font-bold">Description</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($culinaries as $culinary)
                    <tr class="border-b border-gray-700">
                    <td class="px-16 py-2">
                        @if($culinary->placeID == null)
                            <input type="checkbox" name="culinaries[]" value="{{ $culinary->culinary_real_id }}" class="form-checkbox h-5 w-5 text-indigo-600">
                        @else
                            <input type="checkbox" name="culinaries[]" value="{{ $culinary->culinary_real_id }}" class="form-checkbox h-5 w-5 text-indigo-600" checked>
                        @endif
                        
                    </td>
                    
                    <td class="px-16 py-2 text-white">{{ $culinary->name }}</td>
                    <td class="px-16 py-2 text-white">{{ $culinary->desc }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="flex justify-end space-x-4 mt-4">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                Add items to menu
                </button>
            </div>
            </form>
        </div>
        </div>
</x-app-layout>