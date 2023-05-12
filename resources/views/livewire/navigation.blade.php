<style>
    #navigation-menu"{
height: calc(100vh -4rem)
    }
</style>

<header class=" bg-slate-400 sticky top-0 z-50" >

    <div class="container flex items-center h-16 justify-between md:justify-start">
  {{--       <a 
            class="flex flex-col items-center justify-center px-6 md:px-4 order-last md:order-first bg-white bg-opacity-25 text-white cursor-pointer font-semiboldsemi h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm hidden md:block">Secciones</span>
        </a> --}}

        <a href="/"
            class=" flex flex-col items-center justify-center px-4 text-white cursor-pointer font-semiboldsemi h-full">
            <img src="{{ asset('img/100-1.png') }}" class="block  h-14 w-auto">
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

               <!-- Settings Dropdown -->
               <div class="ml-3 relative">
                @auth
    
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
    
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <div class="border-t border-gray-200 dark:border-gray-600"></div>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <x-dropdown align="right" width="48">
    
                        <x-slot name="trigger">
                            <i class=" fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('login') }}">
                                {{ __('login') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-dropdown-link>
                        </x-slot>
    
                    </x-dropdown>
    
                @endauth
    
    
            </div>


    </div>

    
</header>