@extends('layouts.main')

@section('content')

    <!-- Banner -->
    <header class="max-w-7xl mx-auto rounded-md mt-28 py-auto lg:flex-1">
        <div class="container bg-gray-900 text-white mx-auto px-auto mt-28 py-20 rounded-2xl">
            <div class=" text-start px-8 rounded-lg shadow-lg max-w-7xl">
                <div class="relative w-full items-center">
                    <button action="#" method="GET"
                        class="absolute hover:bg-gray-100 rounded-full hover:text-black left-0 top-1/2 transition-colors duration-200 transform hover:scale-105 z-0">
                        <svg class="w-auto h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <h1 class="text-3xl text-center md:text-4xl font-bold">Mau transaksi lebih hemat?</h1>
                    <p class="mt-6 text-center text-lg text-gray-300">Cek promo asyik di Tokopedia cloneku!</p>

                    <button action="#" method="GET"
                        class="absolute hover:bg-gray-100 rounded-full hover:text-black right-0 top-1/2 transition-colors duration-200 transform hover:scale-105 z-0">
                        <svg class="w-auto h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <button action="#" method="GET"
                    class="mt-20 bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 transform hover:scale-105">
                    Cek Sekarang
                </button>
            </div>
        </div>

        <div class="flex flex-wrap w-full mt-8 justify-between gap-6">
            <div class="container flex flex-col lg:flex-row bg-white px-4 py-4 lg:py-0 rounded-2xl">
                <div class="w-full lg:w-3/4 bg-white rounded-lg py-0 lg:py-10 p-4">
                    <div class="flex items-center justify-start">
                        <h2 class="text-lg font-bold">Kategori Pilihan</h2>
                    </div>

                    <div class="relative w-full flex items-center mt-4">
                        <!-- Button Kiri -->
                        <button
                            class="absolute left-0 rounded-full hover:text-black hover:bg-gray-100 transition-colors duration-200 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <!-- Kontainer Item -->
                        <div
                            class="flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4 items-center text-center mt-auto overflow-x-auto py-4 px-6 shadow-md rounded-md">
                            <div
                                class="flex flex-col items-center cursor-pointer space-y-2 min-w-[100px] lg:w-1/4 transition-colors duration-200 transform hover:scale-105">
                                <img src="{{ asset('assets/foto tpedia clone/photo.png') }}" alt="Makanan"
                                    class="h-28 w-48 object-cover">
                                <span class="text-sm">Makanan</span>
                                <span class="text-xs text-gray-500">Kering</span>
                            </div>

                            <div
                                class="flex flex-col items-center cursor-pointer space-y-2 min-w-[100px] lg:w-1/4 transition-colors duration-200 transform hover:scale-105">
                                <img src="{{ asset('assets/foto tpedia clone/1711a2e7-588d-4743-84d0-004254436c43.jpg') }}"
                                    alt="Figure" class="h-28 w-48 object-cover">
                                    <span class="text-sm">Miniatur</span>
                                    <span class="text-xs text-gray-500">Minitaur</span>
                                
                            </div>

                            <div
                                class="flex flex-col items-center cursor-pointer space-y-2 min-w-[100px] lg:w-1/4 transition-colors duration-200 transform hover:scale-105">
                                <img src="{{ asset('assets/foto tpedia clone/id-11134207-7qukx-lguqtgvktyhmdd.png') }}"
                                    alt="Tas" class="h-28 w-48 object-cover">
                                <span class="text-sm">Tas Selempang</span>
                                <span class="text-xs text-gray-500">Pria</span>
                            </div>

                            <div
                                class="flex flex-col items-center cursor-pointer space-y-2 min-w-[100px] lg:w-1/4 transition-colors duration-200 transform hover:scale-105">
                                <img src="{{ asset('assets/foto tpedia clone/da2b1b04-4fd7-4d3c-8b67-47f3047c7c6c.png') }}"
                                    alt="Shoes" class="h-28 w-48 object-cover">
                                <span class="text-sm">Flat Shoes</span>
                                <span class="text-xs text-gray-500">Wanita</span>
                            </div>
                        </div>

                        <!-- Button Kanan -->
                        <button
                            class="absolute right-0 rounded-full hover:text-black hover:bg-gray-100 transition-colors duration-200 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Top Up Section -->
                <div class="w-full mt-2 lg:w-1/4 bg-white p-4 rounded-lg lg:mt-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-bold">Top Up & Tagihan</h2>
                        <a href="#"
                            class="text-green-500 flex items-center space-x-1 transition-colors duration-200 transform hover:scale-105">
                            <span>Muat Lainnya</span>
                            <svg class="w-auto h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex space-x-4 mt-4">
                        <button class="text-gray-500 hover:text-green-500 active:bg-green-500 pb-2">Pulsa</button>
                        <button class="text-gray-500 hover:text-green-500 active:bg-green-500 pb-2">Paket Data</button>
                        <button class="text-gray-500 hover:text-green-500 active:bg-green-500 pb-2">Flight</button>
                        <button class="text-gray-500 hover:text-green-500 active:bg-green-500 pb-2">Listrik PLN</button>
                    </div>

                    <div class="space-y-4 mt-8">
                        <input type="text" placeholder="Masukan Nomor" class="w-full p-2 border rounded">
                        <div class="flex space-x-4">
                            <select class="w-full p-2 border rounded">
                                <option>Nominal</option>
                            </select>
                            <button
                                class="bg-blue-900 text-white px-6 py-2 rounded-md transition duration-200 transform hover:scale-105">Beli</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container bg-white mx-auto py-auto mt-1 sm:px-6 lg:px-8 rounded-2xl">

            {{-- <!-- Category Navigation -->
            <div class="flex flex-nowrap gap-4 mt-auto">
                @foreach ([['icon' => 'category', 'text' => 'Kategori'], ['icon' => 'phone', 'text' => 'Handphone & Tablet'], ['icon' => 'topup', 'text' => 'Top-Up & Tagihan'], ['icon' => 'electronic', 'text' => 'Elektronik'], ['icon' => 'pet', 'text' => 'Perawatan Hewan'], ['icon' => 'travel', 'text' => 'Travel & Entertainment'], ['icon' => 'finance', 'text' => 'Keuangan']] as $category)
                    <div id="draggable-element-{{ $loop->index }}"
                        class="w-full flex items-center mt-6 cursor-pointer space-x-2 rounded-full shadow-lg transition-colors duration-200 transform hover:scale-105"
                        draggable="true">
                        <img src="{{ asset('icons/' . $category['icon'] . '.svg') }}" alt="{{ $category['text'] }}"
                            class="w-5 h-5">
                        <span class="text-sm">{{ $category['text'] }}</span>
                    </div>
                @endforeach
            </div> --}}

            <!-- Trending Section -->
            <div class="container w-full mt-1 py-4 lg:py-10">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold">Lagi trending, nih</h2>
                    <a href="#"
                        class="text-green-500 flex items-center space-x-1 transition-colors duration-200 transform hover:scale-105">
                        <span>Muat Lainnya</span>
                        <svg class="w-auto h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ([['title' => 'Gtx 1050 Ti', 'products' => '7rb produk'], ['title' => 'S22 Ultra', 'products' => '119rb produk'], ['title' => 'Rx 6600', 'products' => '11rb produk'], ['title' => 'Mouse Wireless', 'products' => '750rb produk'], ['title' => 'Kipas Angin Berdiri', 'products' => '256rb produk'], ['title' => 'Lem Tikus', 'products' => '30rb produk'], ['title' => 'Kipas Angin', 'products' => '2jt produk'], ['title' => 'Ikan Hias', 'products' => '198rb produk']] as $item)
                        <div
                            class="bg-white rounded-lg shadow p-4 cursor-pointer transition-colors duration-200 transform hover:scale-105">
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg mb-4">
                                <img src="{{ asset('products/' . Str::slug($item['title']) . '.jpg') }}"
                                    alt="{{ $item['title'] }}" class="object-cover">
                            </div>
                            <h3 class="font-medium">{{ $item['title'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $item['products'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container w-full mt-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ([['title' => 'Gtx 1050 Ti', 'products' => '7rb produk'], ['title' => 'S22 Ultra', 'products' => '119rb produk'], ['title' => 'Rx 6600', 'products' => '11rb produk'], ['title' => 'Mouse Wireless', 'products' => '750rb produk'], ['title' => 'Kipas Angin Berdiri', 'products' => '256rb produk'], ['title' => 'Lem Tikus', 'products' => '30rb produk'], ['title' => 'Kipas Angin', 'products' => '2jt produk'], ['title' => 'Ikan Hias', 'products' => '198rb produk']] as $item)
                        <div class="bg-white rounded-lg shadow p-4 cursor-pointer">
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg mb-4">
                                <img src="{{ asset('products/' . Str::slug($item['title']) . '.jpg') }}"
                                    alt="{{ $item['title'] }}" class="object-cover">
                            </div>
                            <h3 class="font-medium">{{ $item['title'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $item['products'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container w-full mt-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ([['title' => 'Gtx 1050 Ti', 'products' => '7rb produk'], ['title' => 'S22 Ultra', 'products' => '119rb produk'], ['title' => 'Rx 6600', 'products' => '11rb produk'], ['title' => 'Mouse Wireless', 'products' => '750rb produk'], ['title' => 'Kipas Angin Berdiri', 'products' => '256rb produk'], ['title' => 'Lem Tikus', 'products' => '30rb produk'], ['title' => 'Kipas Angin', 'products' => '2jt produk'], ['title' => 'Ikan Hias', 'products' => '198rb produk']] as $item)
                        <div class="bg-white rounded-lg shadow p-4 cursor-pointer">
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg mb-4">
                                <img src="{{ asset('products/' . Str::slug($item['title']) . '.jpg') }}"
                                    alt="{{ $item['title'] }}" class="object-cover">
                            </div>
                            <h3 class="font-medium">{{ $item['title'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $item['products'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </header>
@endsection

{{-- <div class="container px-4 py-8">
                <h2 class="text-xl font-semibold mb-4">Kategori Pilihan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <img src="/images/makanan-kering.png" alt="Makanan Kering" class="h-16 mx-auto">
                        <p class="mt-2">Makanan Kering</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <img src="/images/figure.png" alt="Figure" class="h-16 mx-auto">
                        <p class="mt-2">Figure</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <img src="/images/tas-selempang.png" alt="Tas Selempang Pria" class="h-16 mx-auto">
                        <p class="mt-2">Tas Selempang</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <img src="/images/flat-shoes.png" alt="Flat Shoes Wanita" class="h-16 mx-auto">
                        <p class="mt-2">Flat Shoes</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <img src="/images/elektronik.png" alt="Elektronik" class="h-16 mx-auto">
                        <p class="mt-2">Elektronik</p>
                    </div>
                </div>
            </div> --}}
