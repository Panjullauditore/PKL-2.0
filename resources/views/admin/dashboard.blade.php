<x-app-layout>
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-white mb-12">Welcome, {{ Auth::user()->name }}!</h1>

            <!-- Profile Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Profile Card -->
                <div class="md:col-span-1">
                    <div class="bg-gray-800 rounded-3xl p-8 shadow-sm h-full"> 
                        <div class="flex flex-col items-center justify-center h-full">
                            <img src="{{ asset('img/userProfile/' . Auth::user()->id . '.png') }}" alt="Profile"
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

            <div class="mt-8">
                <div class="bg-gray-800 rounded-3xl p-8 shadow-sm h-full">
                    <h3 class="text-2xl font-bold text-white mb-12">Project</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Hotel</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Cullinary</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Shopping</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Entertainment</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Tourist Attraction</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        <div class="bg-gray-700 rounded-3xl p-8 shadow-sm h-full">
                            <h4 class="text-xl font-bold text-white mb-4">Tour Guide</h4>
                            <p class="text-white">jumlah</p>
                        </div>

                        

                    </div>
                </div>
            </div>

</x-app-layout>