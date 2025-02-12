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
        <div class="bg-gray-900 flex-1 p-6 mt-10">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-white">
                    <span x-data="{ text: '', fullText: 'User Management', index: 0 }"
                        x-init="setInterval(() => { if (index < fullText.length) { text += fullText[index]; index++; } }, 100)">
                        <span x-text="text"></span>
                    </span>
                </h1>
            </div>

            <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-md"> <!-- Ganti bg-white menjadi bg-gray-800 -->
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-700 text-white"> <!-- Ganti bg-gray-800 menjadi bg-gray-900 -->
                        <tr>
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-300"> <!-- Ganti text-gray-800 menjadi text-gray-300 -->
                        <tr class="border-b border-gray-700 hover:bg-gray-700"> <!-- Tambah hover effect -->
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">john@example.com</td>
                            <td class="py-3 px-6 text-center">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Detail</button>
                                <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Hapus</button>
                            </td>
                        </tr>
                        <!-- Ulangi untuk baris lainnya dengan class yang sama -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>



@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Optional: Add any client-side interactions
        const deleteButtons = document.querySelectorAll('form[onsubmit]');
        deleteButtons.forEach(form => {
            form.addEventListener('submit', function (e) {
                if (!confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
                    e.preventDefault();
                }
            });
        });
    });

</script>
@endpush
