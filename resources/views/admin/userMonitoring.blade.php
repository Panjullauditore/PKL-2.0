<x-app-layout>

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