<!-- resources/views/admin/addplaces.blade.php -->
<x-app-layout>
    <div class="min-h-screen bg-gray-900 flex items-center justify-center"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full"> 
            <div class="bg-gray-800 overflow-hidden shadow-xl rounded-lg mx-4"> 
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-white mb-6">Add Place</h2>

                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        {{-- <!-- Main Image -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-2">Main Image</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-600 border-dashed rounded-lg">
                                <div class="space-y-1 text-center">
                                    <input type="file" name="main_image" id="main_image" class="hidden" accept="image/*">
                                    <label for="main_image" class="cursor-pointer bg-gray-700 px-4 py-2 rounded-lg text-gray-300 hover:bg-gray-600">
                                        Upload Image
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <!-- Business Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300">Business Name</label>
                            <input type="text" name="places_name" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Business Address -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300">Business Address</label>
                            <input type="text" name="address" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300">Business Phone Number</label>
                            <input type="text" name="phone" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring-indigo-500">
                        </div> --}}

                        <!-- Type Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300">Type</label>
                            <select name="type" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="Hotel">Hotel</option>
                                <option value="Culinary">Culinary</option>
                                <option value="Shopping">Shopping</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Tourist Attraction">Tourist Attraction</option>
                                <option value="Tour Guide">Tour Guide</option>
                            </select>
                        </div>

                        <!-- Tags Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300">Tags</label>
                            <select name="tags[]" multiple class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring-indigo-500" style="min-height: 120px;">
                                <option value="restaurant">Restaurant</option>
                                <option value="cafe">Cafe</option>
                                <option value="hotel">Hotel</option>
                                <option value="mall">Mall</option>
                                <option value="park">Park</option>
                                <option value="museum">Museum</option>
                            </select>
                            <p class="text-sm text-gray-400 mt-1">Hold Ctrl (Windows) or Command (Mac) to select multiple tags</p>
                        </div>

                        {{-- <!-- Gallery -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Gallery</label>
                            <div class="grid grid-cols-5 gap-4">
                                @for($i = 0; $i < 5; $i++)
                                    <div class="relative aspect-square">
                                        <input type="file" name="gallery[]" id="gallery-{{ $i }}" class="hidden" accept="image/*">
                                        <label for="gallery-{{ $i }}" class="cursor-pointer flex items-center justify-center w-full h-full border-2 border-gray-600 border-dashed rounded-lg hover:bg-gray-700">
                                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                            </svg>
                                        </label>
                                    </div>
                                @endfor
                            </div>
                        </div> --}}

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="window.history.back()" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                                Cancel
                            </button>
                            {{-- <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700" onclick="window.location.href='admin.dashboard'">
                                Confirm
                            </button> --}}
                            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                                Confirm
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Preview image before upload
        function previewImage(input, imgId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(imgId).src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @endpush
</x-app-layout>