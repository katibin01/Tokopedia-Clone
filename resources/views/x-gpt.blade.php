 {{-- resources/views/home.blade.php --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            {{-- Categories Section --}}
            <div class="mb-8">
                <h2 class="text-lg font-bold mb-4">Kategori Pilihan</h2>
                <div class="relative">
                    <button class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <div class="flex space-x-6 overflow-x-auto scrollbar-hide px-8">
                        <div class="flex flex-col items-center min-w-[100px]">
                            <img src="{{ asset('images/makanan.jpg') }}" alt="Makanan" class="w-20 h-20 object-cover mb-2">
                            <span class="text-sm font-medium">Makanan</span>
                            <span class="text-xs text-gray-500">Kering</span>
                        </div>

                        <div class="flex flex-col items-center min-w-[100px]">
                            <img src="{{ asset('images/figure.jpg') }}" alt="Figure" class="w-20 h-20 object-cover mb-2">
                            <span class="text-sm font-medium">Figure</span>
                        </div>

                        <div class="flex flex-col items-center min-w-[100px]">
                            <img src="{{ asset('images/tas.jpg') }}" alt="Tas" class="w-20 h-20 object-cover mb-2">
                            <span class="text-sm font-medium">Tas Selempang</span>
                            <span class="text-xs text-gray-500">Pria</span>
                        </div>

                        <div class="flex flex-col items-center min-w-[100px]">
                            <img src="{{ asset('images/shoes.jpg') }}" alt="Shoes" class="w-20 h-20 object-cover mb-2">
                            <span class="text-sm font-medium">Flat Shoes</span>
                            <span class="text-xs text-gray-500">Wanita</span>
                        </div>
                    </div>

                    <button class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Top Up Section --}}
            <div class="mb-8 bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-bold">Top Up & Tagihan</h2>
                    <a href="#" class="text-green-500 text-sm">Lihat Semua</a>
                </div>

                <div class="flex space-x-4 mb-4">
                    <button class="text-green-500 border-b-2 border-green-500 pb-2">Pulsa</button>
                    <button class="text-gray-500">Paket Data</button>
                    <button class="text-gray-500">Flight</button>
                    <button class="text-gray-500">Listrik PLN</button>
                </div>

                <div class="space-y-4">
                    <input type="text" placeholder="Masukan Nomor" class="w-full p-3 border rounded-lg">
                    <div class="flex space-x-4">
                        <select class="flex-1 p-3 border rounded-lg">
                            <option>Nominal</option>
                        </select>
                        <button class="bg-blue-50 text-blue-700 px-8 py-3 rounded-lg">Beli</button>
                    </div>
                </div>
            </div>

            {{-- Category Icons --}}
            <div class="flex flex-wrap gap-4 mb-8">
                <a href="#" class="flex items-center space-x-2 bg-white rounded-full px-4 py-2 shadow">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span>Kategori</span>
                </a>

                <a href="#" class="flex items-center space-x-2 bg-white rounded-full px-4 py-2 shadow">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <span>Handphone & Tablet</span>
                </a>

                {{-- Add more category icons as needed --}}
            </div>

            {{-- Trending Section --}}
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-bold">Lagi trending, nih</h2>
                    <a href="#" class="text-green-500 text-sm flex items-center">
                        <span>Muat Lainnya</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach ($trendingProducts as $product)
                        <div class="bg-white rounded-lg shadow p-4">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                class="w-full h-40 object-cover rounded-lg mb-3">
                            <h3 class="font-medium mb-1">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-500">{{ $product->product_count }} produk</p>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>