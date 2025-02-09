<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-900">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-6 text-white">Project</h2>
                    
                    <!-- Project Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        @foreach($projectCounts as $type => $count)
                        <div class="bg-gray-800/50 p-6 rounded-lg">
                            <h3 class="text-white text-lg mb-2">{{ $type }}</h3>
                            <p class="text-white text-4xl font-bold" id="count-{{ str_replace(' ', '-', strtolower($type)) }}">{{ $count }}</p>
                        </div>
                        @endforeach
                    </div>

                    <!-- Add Project Section -->
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-4 text-white">Add Project</h3>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach(array_keys($projectCounts) as $type)
                            <button onclick="openModal('{{ $type }}')" 
                                    class="bg-gray-800/50 hover:bg-gray-700/50 text-white p-4 rounded transition duration-150">
                                Add
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="projectModal" class="hidden fixed inset-0 bg-black bg-opacity-50 overflow-y-auto h-full w-full z-50">
                        <div class="flex items-center justify-center min-h-screen px-4 py-6">
                            <div class="relative bg-gray-800 rounded-lg w-full max-w-xl p-6">
                                <form id="projectForm" method="POST" enctype="multipart/form-data" class="space-y-6">
                                    @csrf
                                    <input type="hidden" name="type" id="projectType">

                                    <!-- Main Image Upload -->
                                    <div class="w-full aspect-video bg-gray-700 relative rounded-lg overflow-hidden mb-6">
                                        <div class="absolute inset-0" id="mainImageContainer">
                                            <img id="mainImagePreview" src="" alt="Preview" class="w-full h-full object-cover hidden">
                                            <div id="mainImagePlaceholder" class="w-full h-full flex flex-col items-center justify-center">
                                                <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                </svg>
                                                <span class="mt-2 text-sm text-gray-500">Upload Image</span>
                                            </div>
                                        </div>
                                        <input type="file" name="main_image" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" onchange="previewMainImage(this)">
                                    </div>

                                    <!-- Form Fields -->
                                    <div class="space-y-4">
                                        <input type="text" name="business_name" placeholder="Enter Business Name" 
                                               class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                                        <input type="text" name="address" placeholder="Enter Business Address" 
                                               class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                                        <input type="text" name="phone" placeholder="Enter Business Phone Number" 
                                               class="w-full px-4 py-2 bg-gray-700 rounded-lg text-white placeholder-gray-500">
                                    </div>

                                    <!-- Gallery -->
                                    <div>
                                        <p class="text-sm text-gray-500 mb-2">Gallery</p>
                                        <div class="grid grid-cols-5 gap-4">
                                            @for($i = 0; $i < 5; $i++)
                                            <div class="aspect-square bg-gray-700 relative rounded-lg overflow-hidden">
                                                <div class="absolute inset-0">
                                                    <img id="galleryPreview{{ $i }}" src="" alt="Gallery {{ $i + 1 }}" class="w-full h-full object-cover hidden">
                                                    <div id="galleryPlaceholder{{ $i }}" class="w-full h-full flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <input type="file" name="gallery_images[]" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" onchange="previewGalleryImage(this, {{ $i }})">
                                            </div>
                                            @endfor
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex justify-end space-x-4">
                                        <button type="button" onclick="closeModal()" 
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
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function previewMainImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                const preview = document.getElementById('mainImagePreview');
                const placeholder = document.getElementById('mainImagePlaceholder');
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewGalleryImage(input, index) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                const preview = document.getElementById(`galleryPreview${index}`);
                const placeholder = document.getElementById(`galleryPlaceholder${index}`);
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        function openModal(type) {
            document.getElementById('projectType').value = type;
            document.getElementById('projectModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('projectModal').classList.add('hidden');
            document.getElementById('projectForm').reset();
            resetPreviews();
        }

        function resetPreviews() {
            document.getElementById('mainImagePreview').classList.add('hidden');
            document.getElementById('mainImagePlaceholder').classList.remove('hidden');
            for(let i = 0; i < 5; i++) {
                document.getElementById(`galleryPreview${i}`).classList.add('hidden');
                document.getElementById(`galleryPlaceholder${i}`).classList.remove('hidden');
            }
        }

        // Form submission handler
        document.getElementById('projectForm').addEventListener('submit', async function(e) {
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

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const result = await response.json();
                console.log('Response:', result);
                
                if (result.success) {
                    // Update count
                    const countElement = document.getElementById(`count-${result.type.toLowerCase().replace(' ', '-')}`);
                    if (countElement) {
                        countElement.textContent = result.count;
                    }
                    
                    closeModal();
                    alert('Project added successfully!');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error adding project. Please try again.');
            }
        });

        // Modal outside click handler
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('projectModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        });
    </script>
    @endpush
</x-app-layout>