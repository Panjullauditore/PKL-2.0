<x-app-layout>
    


    <div class="py-12 mt">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-12">


                <div class="bg-gray-800 rounded-3xl p-8 shadow-sm h-full"> 
                        <div class="flex flex-col items-center justify-center h-full">
                            <img src="{{ asset('img/userProfile/' . Auth::user()->profile_photo_path) }}" alt="Profile"
                                class="w-32 h-32 rounded-full mb-4">
                                <form action="{{ route('profile.photo.update') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <label for="profile_photo" class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-full">
                                        Change Photo
                                    </label>
                                    <input type="file" name="profile_photo" id="profile_photo" class="hidden" onchange="this.form.submit()">
                                </form>
                        </div>
                    </div>
            
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
