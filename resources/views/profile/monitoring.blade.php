<x-app-layout>
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-white">
                <span x-data="{ text: '', fullText: 'Welcome, {{ $user->name }}!', index: 0 }" 
                      x-init="setInterval(() => { if (index < fullText.length) { text += fullText[index]; index++; } }, 100)">
                    <span x-text="text"></span>
                </span>
            </h1>

            <!-- Profile Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-5">
                <!-- Profile Card -->
                <div class="md:col-span-1">
                    <div class="bg-gray-800 rounded-3xl p-8 shadow-sm h-full"> 
                        <div class="flex flex-col items-center justify-center h-full">
                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile"
                                class="w-32 h-32 rounded-full mb-4">
                            <div class="flex items-center gap-2">
                                <span class="text-xl text-white">{{'@' . $user->name }}</span>
                                <img src="{{ asset('storage/img/flag/'. $user->countryID . '.png') }}" alt="Flag" class="w-6">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="md:col-span-2">
                    <div class="bg-gray-800 rounded-3xl p-8 shadow-sm">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/username.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ $user->name }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/email.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ $user->email }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/phone.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ $user->phone_number }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                                <span class="text-white">{{ $country->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="mt-8">
                <div class="bg-gray-800 rounded-3xl p-8 shadow-sm">
                    <div x-data="{ activeTab: 'favorite' }">
                        <!-- Tab Buttons -->
                        <div class="flex space-x-4 mb-6">
                            @foreach (['favorite', 'wishlist', 'review'] as $tab)
                            <button @click="activeTab = '{{ $tab }}'" :class="{
                                'bg-white text-gray-900': activeTab === '{{ $tab }}',
                                'text-gray-400': activeTab !== '{{ $tab }}'
                            }"
                                class="px-6 py-2 rounded-lg hover:text-white transition-colors duration-300 text-base font-medium">
                                {{ ucfirst($tab) }}
                            </button>
                            @endforeach
                        </div>

                        <!-- Tab Contents -->
                        <div class="mt-4">
                            <h2 class="text-2xl font-bold text-white mb-4"
                                x-text="activeTab.charAt(0).toUpperCase() + activeTab.slice(1)"></h2>

                                <div x-show="activeTab === 'favorite'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for wishlist goes here.
                                <table class="min-w-full divide-y divide-gray-600">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Image</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Place Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-600">
                                        @foreach($favorites as $favorite)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <img src="{{ 'img/default.png'}}" 
                                                        alt="{{ $favorite['placeName'] }}" 
                                                        class="h-20 w-20 rounded-lg object-cover">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">
                                                    {{ $favorite['placeName'] }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <form class="inline">
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
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div x-show="activeTab === 'wishlist'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for wishlist goes here.
                                <table class="min-w-full divide-y divide-gray-600">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Image</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Place Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-600">
                                        @foreach($wishlist as $Wishlist)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <img src="{{ 'img/default.png'}}" 
                                                        alt="{{ $wishlist['placeName'] }}" 
                                                        class="h-20 w-20 rounded-lg object-cover">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">
                                                    {{ $wishlist['placeName'] }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <form class="inline">
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
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div x-show="activeTab === 'review'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for wishlist goes here.
                                <table class="min-w-full divide-y divide-gray-600">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Image</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Place Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Desc</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-600">
                                        @foreach($reviews as $review)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <img src="{{ 'img/default.png'}}" 
                                                        alt="{{ $review['placeName'] }}" 
                                                        class="h-20 w-20 rounded-lg object-cover">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-gray-300">
                                                    {{ $review['placeName'] }}
                                                </td>
                                                <td class="px-6 py-4 text-gray-300 break-words whitespace-normal max-w-md">
                                                    {{ $review['desc'] }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <form class="inline">
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
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

{{dd($reviews)}}