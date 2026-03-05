<nav x-data="{ open: false }" class="bg-transparent backdrop-blur-xl border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto text-white" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden sm:flex sm:items-center space-x-4">

                @auth
                    <!-- Мій кабінет -->
                    <a href="{{ route('dashboard') }}" class="btn glass-btn">
                        Мій кабінет
                    </a>

                    <!-- Адмін панель -->
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="btn glass-btn">
                            Адмін панель
                        </a>
                    @endif

                    <!-- Профіль (dropdown) -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm text-white hover:text-yellow-300 transition">
                                <div>{{ Auth::user()->name }}</div>
                                <svg class="ms-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                Профіль
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Вийти
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="btn glass-btn">Вхід</a>
                    <a href="{{ route('register') }}" class="btn glass-btn">Реєстрація</a>
                @endguest

            </div>

            <!-- Mobile Hamburger -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="p-2 rounded-md text-white hover:text-yellow-300 transition">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-black/40 backdrop-blur-xl">

        @auth
            <div class="px-4 py-3 text-white">
                <div class="font-medium">{{ Auth::user()->name }}</div>
                <div class="text-sm opacity-75">{{ Auth::user()->email }}</div>
            </div>

            <x-responsive-nav-link :href="route('dashboard')">
                Мій кабінет
            </x-responsive-nav-link>

            @if(auth()->user()->role === 'admin')
                <x-responsive-nav-link :href="route('admin.dashboard')">
                    Адмін панель
                </x-responsive-nav-link>
            @endif

            <x-responsive-nav-link :href="route('profile.edit')">
                Профіль
            </x-responsive-nav-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Вийти
                </x-responsive-nav-link>
            </form>
        @endauth

        @guest
            <x-responsive-nav-link :href="route('login')">Вхід</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')">Реєстрація</x-responsive-nav-link>
        @endguest

    </div>
</nav>