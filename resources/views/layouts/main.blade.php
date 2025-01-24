<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title }} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- acript tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen text-black bg-gray-100  overflow-x-hidden">
        <div class="w-full shadow-xl rounded-b-lg">
            {{-- <nav class="fixed top-0 w-full bg-white shadow-lg z-10"> --}}
            @include('navigation.topbar-navigation')
            </nav>
        </div>

        <!-- Kontainer dengan margin atas responsif -->
        <div class="container mx-auto mt-16 my-auto overflow-auto">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('components.footer')

    </div>


    <script>
        const kategoriButton = document.getElementById('kategori-button');
        const kategoriMenu = document.getElementById('kategori-menu');

        kategoriButton.addEventListener('click', () => {
            kategoriMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        // Menambahkan drag-and-drop hanya pada tampilan mobile
        const container = document.getElementById('category-container');
        let draggedItem = null;

        // Fungsi untuk memeriksa ukuran layar
        function isMobile() {
            return window.innerWidth < 1024; // Mobile biasanya < 1024px
        }

        // Event listeners untuk drag-and-drop
        function enableDragAndDrop() {
            container.addEventListener('dragstart', (e) => {
                if (e.target.classList.contains('draggable')) {
                    draggedItem = e.target;
                    setTimeout(() => draggedItem.classList.add('hidden'), 0); // Menyembunyikan elemen sementara
                }
            });

            container.addEventListener('dragend', () => {
                if (draggedItem) {
                    draggedItem.classList.remove('hidden'); // Menampilkan kembali elemen setelah drag selesai
                    draggedItem = null;
                }
            });

            container.addEventListener('dragover', (e) => {
                e.preventDefault(); // Memungkinkan elemen untuk dijatuhkan
                const target = e.target.closest('.draggable'); // Pastikan hanya elemen draggable yang ditargetkan
                if (target && draggedItem !== target) {
                    const allItems = Array.from(container.children);
                    const draggedIndex = allItems.indexOf(draggedItem);
                    const targetIndex = allItems.indexOf(target);

                    // Mengatur ulang elemen berdasarkan posisi drag
                    if (draggedIndex < targetIndex) {
                        container.insertBefore(draggedItem, target.nextSibling);
                    } else {
                        container.insertBefore(draggedItem, target);
                    }
                }
            });
        }

        // Menambahkan atau menghapus drag-and-drop berdasarkan ukuran layar
        function updateDragAndDrop() {
            if (isMobile()) {
                enableDragAndDrop();
            } else {
                // Hapus event listeners jika bukan mobile
                container.removeEventListener('dragstart', () => {});
                container.removeEventListener('dragend', () => {});
                container.removeEventListener('dragover', () => {});
            }
        }

        // Memastikan drag-and-drop aktif saat halaman dimuat
        window.addEventListener('load', updateDragAndDrop);

        // Memeriksa ulang ketika ukuran layar berubah
        window.addEventListener('resize', updateDragAndDrop);
    </script>

    <script>
        // Toggle menu for mobile view
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>

</html>
