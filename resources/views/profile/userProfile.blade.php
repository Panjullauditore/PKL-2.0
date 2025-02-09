<x-app-layout>
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-white">
                <span x-data="{ text: '', fullText: 'Welcome, {{ Auth::user()->name }}!', index: 0 }" 
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
                            <img src="{{ asset('img/userProfile/' . Auth::user()->profile_photo_path) }}" alt="Profile"
                                class="w-32 h-32 rounded-full mb-4">
                            <div class="flex items-center gap-2">
                                <span class="text-xl text-white">{{'@' . Auth::user()->name }}</span>
                                <img src="{{ asset('img/flag/Flag_of_Indonesia.png') }}" alt="Flag" class="w-6">
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
                                <span class="text-white">{{ Auth::user()->name }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/email.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ Auth::user()->email }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/phone.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ Auth::user()->phone }}</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('icons/userProfile/email.png') }}" class="w-8 h-8">
                                <span class="text-white">{{ Auth::user()->country }}</span>
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
                            @foreach (['favorite', 'wishlist', 'review', 'gallery'] as $tab)
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
                                Content for favorite goes here.
                            </div>

                            <div x-show="activeTab === 'wishlist'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for wishlist goes here.
                            </div>

                            <div x-show="activeTab === 'review'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for review goes here.
                            </div>

                            <div x-show="activeTab === 'gallery'" class="text-gray-300"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                Content for gallery goes here.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Profile Button -->
            <div class="mt-8">
                <a href="{{ route('profile.edit') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    {{ __('Edit Profile') }}
                </a>
            </div>
        </div>
</x-app-layout>
