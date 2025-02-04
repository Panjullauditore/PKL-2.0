<!-- resources/views/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-900 text-white min-h-screen">

    <!-- Navigation Links -->
    <div class="mt-4">
        <!-- Tambahkan margin-top di sini -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('Dashboard')"
                class="text-white hover:text-gray-300 no-underline">
                {{ __('Home') }}
            </x-nav-link>
        </div>
    </div>



    <!-- Main Content -->
    <main class="container mx-auto px-4 mt-12">
        <h1 class="text-4xl font-bold mb-12">Welcome, {{ $user->name }}!</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-1 h-full">
                <!-- Profile Card -->
                <div class="bg-gray-800 rounded-3xl p-8 h-full">
                    <div class="flex flex-col items-center justify-center h-full">
                        <img src="{{ asset('img/userProfile/' . $user->id . '.png') }}" alt="Profile"
                            class="w-32 h-32 rounded-full mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">{{ '@' . $user->name }}</span>
                            <img src={{asset('img/flag/Flag_of_Indonesia.png')}} alt="Flag" class="w-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 h-full">
                <!-- Info Card -->
                <div class="bg-gray-800 rounded-3xl p-8 h-full">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div>
                                <img src="{{ asset('icons/userProfile/username.png') }}" class="w-8 h-8">
                            </div>
                            <span>{{ $user->name }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div>
                                <img src="{{ asset('icons/userProfile/email.png') }}" class="w-8 h-8">
                            </div>
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div>
                                <img src="{{ asset('icons/userProfile/phone.png') }}" class="w-8 h-8">
                            </div>
                            <span>{{ $user->phone }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div>
                                <img src="{{ asset('icons/userProfile/email.png') }}" class="w-8 h-8">
                            </div>
                            <span>{{ $user->country }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="md:col-span-3 h-full">
                <!-- New Empty Card -->
                <div class="bg-gray-800 rounded-3xl p-8 h-full">
                    <div class="flex flex-col space-y-2">
                        <div>
                            @foreach (['favorite', 'wishlist', 'review', 'gallery'] as $button)
                            <button
                                class="text-left px-4 py-2 rounded-lg hover:bg-white hover:text-black transition-colors duration-300">
                                {{ ucfirst($button) }}
                            </button>
                            @endforeach
                            <script>
                                document.querySelectorAll('button').forEach(button => {
                                    button.addEventListener('click', function () {
                                        document.querySelectorAll('button').forEach(btn => btn.classList
                                            .remove('bg-white', 'text-black'));
                                        this.classList.add('bg-white', 'text-black');
                                        document.getElementById('content').innerHTML =
                                            `<h2 class="text-2xl font-bold mb-4">${this.textContent}</h2><p>Content for ${this.textContent.toLowerCase()} goes here.</p>`;
                                    });
                                });

                            </script>
                        </div>
                        <div>
                            <div id="content" class="mt-4">
                                <script>
                                    document.querySelectorAll('button').forEach(button => {
                                        button.addEventListener('click', function () {
                                            document.getElementById('content').innerHTML =
                                                `<h2 class="text-2xl font-bold mb-4">${this.textContent}</h2><p>Content for ${this.textContent.toLowerCase()} goes here.</p>`;
                                        });
                                    });
                                    // Set default content to 'favorite'
                                    document.querySelector('button').classList.add('bg-white', 'text-black');
                                    document.getElementById('content').innerHTML =
                                        `<h2 class="text-2xl font-bold mb-4">Favorite</h2><p>Content for favorite goes here.</p>`;

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8"></div>
        <a href="{{ route('profile.edit', $user->id) }}"
            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
            Edit Profile
        </a>
        </div>
        <br>
        <br>
    </main>
</body>

</html>
