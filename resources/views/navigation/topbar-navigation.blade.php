<!-- Header -->
<nav class="fixed top-0 w-full bg-white shadow-lg z-10">
    <header class="bg-gray-100 text-black border-b border-gray-700 shadow-sm">
        <div class="container mx-auto px-4 py-1 mt-auto flex text-sm items-center justify-between">
            <!-- Logo Section -->
            <button action="#" method="GET" class="flex items-center mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
                <span>{{ config('app.name', 'Laravel') }}</span>
            </button>

            <!-- Navigation Section (Desktop) -->
            <nav class="hidden items-end justify-between space-x-6 gap-2 lg:flex">

                <a href="#" class="text-gray-700 hover:text-green-500">Tentang Tokopedia</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Mitra Tokopedia</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Mulai Berjual</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Promo</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Tokopedia Care</a>
            </nav>

            <!-- Hamburger Icon for mobile -->
            <div class="lg:hidden flex items-center">
                <button action="#" method="GET" id="menu-toggle" class="text-gray-900 hover:text-gray-900">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M3 5h14a1 1 0 110 2H3a1 1 0 110-2zm0 4h14a1 1 0 110 2H3a1 1 0 110-2zm0 4h14a1 1 0 110 2H3a1 1 0 110-2z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Navbar (Mobile) -->
    <nav class="hidden bg-gray-100 border-b border-gray-200 shadow-sm py-2 lg:hidden" id="mobile-menu">
        <div class="hidden md:hidden items-center justify-between space-x-4 gap-2">
            <div class="w-full bg-gray-800 justify-center">
                @csrf

                <form action="{{ route('login') }}" method="GET">
                    <button type="submit"
                        class="bg-transparent text-black border px-4 py-2 rounded-md shadow-md hover:bg-transparent transition-colors">
                        Masuk
                    </button>
                </form>

                <form action="{{ route('register') }}" method="GET">
                    <button type="submit"
                        class="bg-green-500 text-current text-gray-900 border px-4 py-2 rounded-md shadow-lg hover:bg-green-600 hover:text-gray-200 transition-colors duration-200 transform hover:scale-105">
                        Daftar
                    </button>
                </form>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Tentang Tokopedia</a>
            <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Mitra Tokopedia</a>
            <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Mulai Berjual</a>
            <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Promo</a>
            <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Tokopedia Care</a>
        </div>
    </nav>

    <!-- Search and Actions -->
    <nav class="bg-white border-b border-gray-200 py-2">
        <div class="container mx-auto px-4 lg:px-8 flex items-center justify-between h-16 gap-6">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-green-600 text-2xl font-bold">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <button action="#" method="GET"
                    class="ml-4 mt-auto text-lg font-bold text-black transition-colors duration-200 transform hover:scale-105">
                    <span>{{ __('Kategori') }}</span>
                </button>
            </div>

            <!-- Search Bar -->
            <div class="lg:flex flex-1 mx-auto items-center space-x-4 drop-shadow-lg">
                @csrf

                <!-- For smaller screens: show the input field -->
                <div class="hidden w-full lg:flex flex-1 mx-auto items-center space-x-4 drop-shadow-lg">
                    <input type="text" placeholder="Cari di Tokopedia"
                        class="py-2 w-full border border-gray-300 rounded-lg" />
                </div>

                <!-- For larger screens: show the icon only -->
                <div class="lg:hidden items-center space-x-4">
                    <button action="#" method="GET"
                        class="text-gray-600 hover:text-gray-900 transition-colors duration-200 transform hover:scale-105">
                        <svg class="w-auto h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>

                    <!-- For element search mobile -->
                    <div class="hidden w-full lg:flex flex-1 mx-auto items-center space-x-4 drop-shadow-lg">
                        <input type="text" placeholder="Cari di Tokopedia"
                            class="py-2 w-full border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:outline-none" />
                    </div>
                </div>
            </div>
            @csrf

            <button action="#" method="GET"
                class="flex px-auto py-2 shadow-2xl transition-colors duration-200 transform hover:scale-105">
                <svg class="w-auto h-6 text-gray-700 fill-current" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512">
                    <path
                        d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
            </button>

            {{-- <div class="border-t border-gray-900 pt-4"></div> --}}

            <!-- User Action Buttons -->
            <div class="flex items-center space-x-4 gap-2">
                @csrf

                <form action="{{ route('login') }}" method="GET">
                    <button type="submit"
                        class="bg-transparent text-md font-bold text-black border px-4 py-2 rounded-md shadow-inner hover:bg-transparent transition-colors">
                        Masuk
                    </button>
                </form>

                <form action="{{ route('register') }}" method="GET">
                    <button type="submit"
                        class="hidden lg:flex text-md font-bold bg-green-500 text-current text-gray-900 border px-4 py-2 rounded-md shadow-lg hover:bg-green-600 hover:text-white focus:ring focus:ring-green-600 focus:outline-none transition-colors duration-200 transform hover:scale-105">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bottom Links Section -->
    <div class="max-w-7xl bg-white mt-1 mx-auto ml-60 p-0">
        <div class="flex flex-col lg:flex-row justify-between">
            <!-- Popular Searches -->
            <div class="w-full lg:flex">
                {{-- <h3 class="text-lg font-semibold mb-4">Pencarian Populer</h3> --}}
                <div class="hidden bg-transparent lg:flex rounded-lg p-1">
                    <div class="flex text-sm gap-3">
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            Samsung Note 10
                        </a>
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            Charger Mobil
                        </a>
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            Samsung A73
                        </a>
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            Pull Up Bar
                        </a>
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            HDD 1TB
                        </a>
                        <a href="#" class="text-gray-600 hover:text-green-600 transition-colors duration-200">
                            Xbox Series X
                        </a>
                    </div>
                </div>
            </div>

            <!-- Locations Section -->
            <div class="flex w-full lg:w-1/5 lg:justify-end justify-end mt-auto ml-auto gap-4">
                <div class="text-sm font-semibold text-black p-1">
                    @csrf

                    <button class="flex  bg-transparent rounded-lg p-0">
                        <!-- Add your locations content here -->
                        <svg class="h-5 w-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <span class="mt-auto">Di kirim ke Jakarta Pusat </span>
                        <svg class="h-4 w-auto mt-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
