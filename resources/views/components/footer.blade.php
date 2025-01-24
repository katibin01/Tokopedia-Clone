<footer class="bg-gray-800 text-white mt-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:space-x-6 py-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Kolom 1 -->
            <div>
                <h1 class="text-3xl font-bold">{{ config('app.name', 'Laravel') }}<span class="text-red-600">2</span>GO<span
                        class="text-gray-400">.com</span></h1>
                <p class="text-gray-400 mt-2 text-xs">Website ini merupakan usaha saya sebagai penunjang tugas kuliah
                    Mata Kuliah
                    (Microservice), yang
                    mana tugasnya yaitu membuat website (Tokopedia Clone) yang didalamnya memiliki layanan fitur payment
                    dan register customer sebelum melakukan payment barang belanjanya.
                </p>
            </div>

            <!-- Kolom 2 -->
            <div class="grid grid-cols-1 mt-4 lg:mt-0 lg:flex lg:flex-row lg:space-x-16 lg:ml-52 gap-6 lg:gap-0">
                <div>
                    <h2 class="font-bold">Compress2Go</h2>
                    <ul class="mt-2 lg:mt-3">
                        <li><a class="text-sm hover:text-green-500" href="#">Help</a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">Blog</a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">Press</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-bold">Beranda</h2>
                    <ul class="mt-2 lg:mt-3">
                        <li><a class="text-sm hover:text-green-500" href="#">Solution</a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">Education</a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">management</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-bold">Company</h2>
                    <ul class="mt-2 lg:mt-3">
                        <li><a class="text-sm hover:text-green-500" href="#">About</a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">Career</a></li>
                        <li><a class="flex text-sm text-green-500 hover:text-blue-500" href="#">Sustainability <i class="fas fa-leaf"></i></a></li>
                        <li><a class="text-sm hover:text-green-500" href="#">Security</a></li>
                    </ul>
                </div>
                
                <div>
                    <h2 class="font-bold">Product</h2>
                    <ul class="mt-2 lg:mt-3">
                        <li><a class="hover:text-green-500" href="#">Pricing</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-bold">privacy</h2>
                    <ul class="mt-2 lg:mt-3">
                        <li><a class="hover:text-green-500" href="#">Police</a></li>
                        <li><a class="hover:text-green-500" href="#">Security</a></li>
                        <li><a class="hover:text-green-500" href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="mt-auto py-4 border-t border-gray-600 text-gray-400 pt-3 text-xs text-center">
            &copy;{{ date('Y') }} {{ config('app.name', 'Laravel') }}. Semua Hak Dilindungi.
        </div>
</footer>
