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
<div class="py-5 bg-gray-900">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 rounded-3xl p-8 shadow-sm mt-5">
    
            <h1 class="text-2xl font-bold mb-6 text-white mt">User Management</h1>

            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-[#252F3E] rounded-lg shadow-md overflow-hidden">
                <table class="w-full">
                    <thead class="bg-[#2C3A4A] text-white">
                        <tr>
                            <th class="px-4 py-3 text-left">ID</th>
                            <th class="px-4 py-3 text-left">Nama</th>
                            <th class="px-4 py-3 text-left">Email</th>
                            <th class="px-4 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dummyUsers = [
                                ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
                                ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
                                ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com'],
                                ['id' => 4, 'name' => 'Alice Williams', 'email' => 'alice@example.com'],
                                ['id' => 5, 'name' => 'Mike Brown', 'email' => 'mike@example.com'],
                            ];
                        @endphp

                        @foreach($dummyUsers as $user)
                            <tr class="border-b border-[#2C3A4A] hover:bg-[#2C3A4A]/50 transition duration-300">
                                <td class="px-4 py-3 text-white">{{ $user['id'] }}</td>
                                <td class="px-4 py-3 text-white">{{ $user['name'] }}</td>
                                <td class="px-4 py-3 text-white">{{ $user['email'] }}</td>
                                <td class="px-4 py-3 text-right">
                                    <div class="flex justify-end space-x-2">
                                        <a href="#" 
                                        class="bg-blue-600 text-white px-3 py-1.5 rounded hover:bg-blue-700 transition duration-300">
                                            Detail
                                        </a>
                                        <button type="button" 
                                                class="bg-red-600 text-white px-3 py-1.5 rounded hover:bg-red-700 transition duration-300">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
    </div>
</div>
</x-app-layout>


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add any client-side interactions
        const deleteButtons = document.querySelectorAll('form[onsubmit]');
        deleteButtons.forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
                    e.preventDefault();
                }
            });
        });
    });
</script>
@endpush