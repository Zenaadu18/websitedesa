{{-- ================= TOP BAR ================= --}}
<div class="sticky top-0 z-50 w-full z-50 
            bg-white/30 backdrop-blur-md 
            border-b border-gray-200"
    x-data="{ open: false }">

    <div class="flex items-center justify-between px-4 h-14">

        <!-- KIRI -->
        <div class="flex items-center">

            <!-- GRID BUTTON -->
            <button @click="open = !open"
                class="w-12 h-12 bg-gray-700 flex items-center justify-center hover:bg-gray-800 transition">

                <div class="grid grid-cols-3 gap-[2px]">
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                    <span class="bg-white w-1 h-1"></span>
                </div>

            </button>

            <!-- LOGO + TEXT -->
            <div class="flex items-center gap-3 ml-4">

                <img src="{{ Vite::asset('resources/images/logo.png') }}"
                    class="w-8 h-8 object-contain">

                <span class="text-gray-800 text-sm font-semibold">
                    Website Resmi Desa Camplong 2
                </span>

            </div>

        </div>

        <!-- TENGAH: SEARCH -->


        <!-- KANAN -->
        <div class="flex items-center gap-4">
            <div class="hidden md:block">
                <input type="text" placeholder="Cari Artikel"
                    class="px-4 py-1 rounded-full 
                       bg-gray-200 text-gray-700 
                       border border-gray-300 
                       focus:outline-none">
            </div>

            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                🔒
            </div>
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                📊
            </div>

            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                🔔
            </div>

        </div>

    </div>

    <!-- DROPDOWN MENU -->
    <div x-show="open"
        @click.outside="open = false"
        x-transition
        class="absolute left-0 top-14 w-64 
                bg-white shadow-lg border rounded-lg p-4">

        <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">Dashboard</a>
        <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">Profil Desa</a>
        <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">Layanan</a>
        <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">Berita</a>
        <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">Kontak</a>

    </div>

</div>

{{-- ================= HERO HEADER ================= --}}
<div class="relative h-[250px]">

    <!-- Background -->
    <img src="{{ Vite::asset('resources/images/header.webp') }}"
        class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-green-900/60"></div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 h-full flex items-center text-white">

        <div class="flex justify-between items-center w-full">

            <!-- KIRI: LOGO + INFO -->
            <div class="flex items-center gap-6">

                <img src="{{ Vite::asset('resources/images/logo.png') }}"
                    class="w-20 h-20 object-contain animate-flip">

                <div>
                    <h1 class="text-3xl font-bold">Desa Camplong 2</h1>
                    <p class="text-sm">Kec. Fatuleu, Kab. Kupang</p>
                    <p class="text-xs opacity-80">
                        Motto Desa: Maju Digital, Transparan & Modern
                    </p>
                </div>

            </div>

            <!-- KANAN: JAM & TANGGAL -->
            <div class="flex flex-col items-center justify-center text-center"
                x-data="clock()" x-init="startClock()">

                <p class="text-sm" x-text="date"></p>
                <p class="text-2xl font-bold text-cyan-300 drop-shadow-lg" x-text="time"></p>

            </div>

        </div>

    </div>
</div>

{{-- ================= NAVBAR ================= --}}
<nav class="sticky top-14 z-40 
            bg-green-700/30 backdrop-blur-md 
            border-b border-white/20 
            text-white">
    <div class="container mx-auto px-6 flex items-center">

        <a href="#" class="flex items-center gap-2 px-4 py-3 hover:bg-green-800 transition">

            <wa-icon name="house" variant="light" class="w-5 h-5 text-white"></wa-icon>
            <span>Beranda</span>

        </a>

        <a href="#" class="px-4 py-3 hover:bg-green-800 transition">Profil</a>
        <a href="#" class="px-4 py-3 hover:bg-green-800 transition">Pemerintah</a>
        <a href="#" class="px-4 py-3 hover:bg-green-800 transition">Lembaga</a>
        <a href="#" class="px-4 py-3 hover:bg-green-800 transition">Layanan</a>
        <a href="#" class="px-4 py-3 hover:bg-green-800 transition">Berita</a>

    </div>
</nav>