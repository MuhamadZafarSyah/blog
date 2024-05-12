<header class="bg-white" x-data="{ isOpen: false, isOpen2: false }">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a class="block text-teal-600" href="/">
                    <span class="sr-only">Home</span>
                    <img src="/img/logo.png" class="w-40" alt="logo_website">
                </a>
            </div>

            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-black transition hover:text-black/75" href="/"> Home </a>
                        </li>

                        <li>
                            <a class="text-black transition hover:text-black/75" href="/posts"> Blog </a>
                        </li>

                        <li>
                            <a class="text-black transition hover:text-black/75" href="/categories"> Categories </a>
                        </li>
                    </ul>
                </nav>
            </div>

            @auth
                <div class="relative ml-3">
                    <div>
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            @if (auth()->user()->image)
                                <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{ auth()->user()->image }}"
                                    alt="/storage/{{ auth()->user()->image }}">
                            @else
                                <img class="h-8 w-8 rounded-full"
                                    src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg"
                                    alt="profile-picture">
                            @endif
                        </button>
                    </div>

                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->

                        <a href="/dashboard" class="block px-4 py-2 text-sm  text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Dashboard</a>
                        <a href="/posts" class="block px-4 py-2 text-sm text-gray-700 md:hidden" role="menuitem"
                            tabindex="-1" id="user-menu-item-1">Blog</a>
                        <a href="/categories" class="block px-4 py-2 text-sm text-gray-700 md:hidden" role="menuitem"
                            tabindex="-1" id="user-menu-item-1">Categories</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="/login">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                href="/register">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button type="button" @click="isOpen2 = !isOpen2"
                            class="relative inline-flex items-center justify-center rounded-md  bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75  hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen2, 'block': !isOpen2 }" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen2, 'hidden': !isOpen2 }" class="hidden h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen2" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" class="md:hidden shadow-2xl" id="mobile-menu">
        <div class="= pb-3 pt-4 shadow-2xl bg-white absolute w-full z-50">
            <div class=" space-y-1 px-2 ">
                <a href="/"
                    class="block rounded-md px-3 py-2 text-base font-medium text-black hover:text-gray-700">
                    Home</a>
                <a href="/posts"
                    class="block rounded-md px-3 py-2 text-base font-medium text-black hover:text-gray-700">Blog</a>
                <a href="/categories"
                    class="block rounded-md px-3 py-2 text-base font-medium text-black hover:text-gray-700">Categories</a>
                <a href="/register"
                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:text-gray-300 bg-teal-800">Register</a>
            </div>
        </div>
    </div>
</header>
