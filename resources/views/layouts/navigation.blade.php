<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = window.pageYOffset > 0"
     class="fixed w-full z-50 top-0 transition-all duration-300"
     :class="{'bg-transparent': !scrolled, 'bg-gray-800/75 backdrop-blur-sm': scrolled}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left Side -->
            <div class="flex items-center">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-white" />
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                <!-- Home Link -->
                <div class="hidden sm:flex sm:items-center">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
                              class="text-white hover:text-gray-300 no-underline">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

                <!-- User Dropdown -->
                <div class="hidden sm:flex sm:items-center">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-white hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="bg-gray-800 rounded-md ring-1 ring-black ring-opacity-5">
                                    <x-dropdown-link :href="route('profile.userProfile')" class="text-gray-100 hover:bg-gray-700">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-100 hover:bg-gray-700">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:text-gray-300 px-3 py-2 text-sm font-medium">
                            {{ __('Login') }}
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>