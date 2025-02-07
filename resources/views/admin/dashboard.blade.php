<x-app-layout>
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen bg-gray-900">
        <!-- Sidebar -->
        <div :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}" 
             class="min-h-screen bg-slate-800 p-6 transition-all duration-300">
            <div class ="mt-10">
            <nav class="flex flex-col gap-2">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                    class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                    </svg>
                    <span x-show="sidebarOpen" class="text-white transition-all duration-300">DASHBOARD</span>
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('places')"
                    class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span x-show="sidebarOpen" class="text-white transition-all duration-300">PLACES</span>
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('culinaries')"
                    class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <span x-show="sidebarOpen" class="text-white transition-all duration-300">CULINARIES</span>
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('users')"
                    class="flex items-center gap-3 p-3 rounded hover:bg-gray-800">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
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
                        <img src="{{ asset('img/userProfile/' . Auth::user()->id . '.png') }}" 
                            alt="Profile" class="w-32 h-32 rounded-full mb-4">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-white">{{ Auth::user()->name }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-white">{{ Auth::user()->email }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-white">{{ Auth::user()->phone }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-white">{{ Auth::user()->country }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects Section -->
            <div class="bg-gray-800 rounded-3xl p-8 shadow-sm mb-8">
                <h3 class="text-2xl font-bold text-white mb-8">Project</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    @foreach($projects as $title => $count)
                        <div class="bg-gray-700 rounded-3xl p-6 shadow-sm">
                            <h4 class="text-xl font-bold text-white mb-4">{{ $title }}</h4>
                            <p class="text-4xl font-bold text-white">{{ $count }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Add Project Section -->
            <div class="space-y-4">
                <h3 class="text-2xl font-bold text-white mb-4">Add Project</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($projectTypes as $type)
                    <button class="bg-gray-600 hover:bg-gray-500 text-white px-4 py-2 rounded">
                        Add
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @endpush
</x-app-layout>