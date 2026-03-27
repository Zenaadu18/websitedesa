{{-- 1. TOP BAR (Sticky di posisi paling atas) --}}
<div class="sticky top-0 z-[100] w-full">
    @include('components.top-bar')
</div>

{{-- 2. HERO HEADER (Tidak Sticky, akan hilang saat scroll) --}}
@include('components.hero-header')

{{-- 3. NAVBAR (Sticky, tapi akan menempel TEPAT DI BAWAH Top-bar setelah scroll) --}}
<div x-data="{ 
        scrolled: false, 
        isOverflow: false,
        check() {
            this.isOverflow = $refs.ghostMenu.scrollWidth > window.innerWidth;
        }
     }"
    x-init="scrolled = window.scrollY > 100; $nextTick(() => check());"
    @scroll.window="scrolled = window.scrollY > 100"
    @resize.window="check()"
    {{-- PENTING: top-[height_topbar]. Jika topbar tingginya 40px, gunakan top-10 atau top-[40px] --}}
    class="sticky top-[40px] z-[90] w-full transition-all duration-300 border-b border-white/20 shadow-sm"
    :class="scrolled ? 'bg-white/90 backdrop-blur-md' : 'bg-[rgba(29,78,216,0.3)] backdrop-blur-md'">

    {{-- GHOST MENU (Deteksi Overflow) --}}
    <div x-ref="ghostMenu" class="absolute opacity-0 pointer-events-none whitespace-nowrap flex items-center">
        <span class="px-4 py-3 text-[18px] font-semibold">Beranda</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Profil</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Pemerintah</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Lembaga</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Layanan</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Statistik</span>
        <span class="px-4 py-3 text-[18px] font-semibold">APBDes</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Laporan</span>
        <span class="px-4 py-3 text-[18px] font-semibold">PPID</span>
        <span class="px-4 py-3 text-[18px] font-semibold">Berita</span>
    </div>

    <nav x-show="!isOverflow" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        class="h-12 flex items-center justify-center relative" style="overflow: visible !important;">

        <div class="flex items-center justify-center whitespace-nowrap h-full">

            <a href="#"
                class="px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black">
                Beranda
            </a>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    Profil <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-56 bg-white text-gray-800 rounded-b-xl shadow-2xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Sejarah</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Visi
                        Misi</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Demografi</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Struktur
                        Organisasi</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Potensi
                        Desa</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    Pemerintah <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-52 bg-white text-gray-800 rounded-b-xl shadow-2xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Kepala
                        Desa</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Perangkat
                        Desa</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">BPD</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">LPM</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  
                            hover:bg-blue-800/40 text-black h-full">
                    Lembaga <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-48 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Karang
                        Taruna</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">PKK</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">BUMDes</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">

                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent hover:bg-blue-800/40 text-black h-full">
                    Layanan <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>

                {{-- Submenu L2 --}}
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-56 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">

                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">
                        Surat Pengantar
                    </a>

                    {{-- Item dengan Submenu L3 --}}
                    <div class="relative group" x-data="{ openL3: false }" @mouseenter="openL3 = true" @mouseleave="openL3 = false">
                        <div
                            class="flex items-center justify-between px-4 py-2 border-l-4 border-transparent group-hover:border-blue-600 group-hover:bg-blue-50 rounded-r-md transition-all cursor-pointer">
                            <span>Kependudukan</span>
                            <span class="text-[10px] transform -rotate-90">▼</span>
                        </div>

                        {{-- Panel Submenu L3 --}}
                        <div x-show="openL3" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="absolute left-full top-0 ml-1 w-48 bg-white text-gray-800 rounded-xl shadow-2xl p-2 z-[70] flex flex-col border border-gray-100">

                            <a href="#" class="px-4 py-2 hover:bg-blue-50 hover:text-blue-700 rounded-md transition-all border-l-2 border-transparent hover:border-blue-600">Kartu Keluarga</a>
                            <a href="#" class="px-4 py-2 hover:bg-blue-50 hover:text-blue-700 rounded-md transition-all border-l-2 border-transparent hover:border-blue-600">KTP Eletronik</a>
                            <a href="#" class="px-4 py-2 hover:bg-blue-50 hover:text-blue-700 rounded-md transition-all border-l-2 border-transparent hover:border-blue-600">Akta Kelahiran</a>
                            <a href="#" class="px-4 py-2 hover:bg-blue-50 hover:text-blue-700 rounded-md transition-all border-l-2 border-transparent hover:border-blue-600">Akta Kematian</a>
                        </div>
                    </div>

                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">
                        Domisili
                    </a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    Statistik <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-48 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Penduduk</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Pendidikan</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    APBDes <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-48 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Anggaran</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Realisasi</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    Laporan <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-56 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Laporan
                        Tahunan</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Laporan
                        Kegiatan</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    PPID <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-52 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Informasi
                        Publik</a>
                </div>
            </div>

            <div class="relative h-full flex items-center" x-data="{ openMenu: false }"
                @mouseenter="openMenu = true" @mouseleave="openMenu = false">
                <button
                    class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                    Berita <span :class="openMenu ? 'rotate-180' : ''"
                        class="inline-block text-xs transition-transform duration-300">▼</span>
                </button>
                <div x-show="openMenu" x-transition
                    class="absolute left-0 top-full w-48 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Berita
                        Desa</a>
                    <a href="#"
                        class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Pengumuman</a>
                </div>
            </div>

        </div>
    </nav>

    {{-- CONTAINER INFO RUNNING TEXT --}}
    <div class="sticky top-[75px] z-[75] w-full bg-white border-b border-gray-200 flex items-center h-10 overflow-hidden shadow-sm">

        <div class="relative z-10 flex items-center h-full px-4 bg-blue-700 text-white font-bold text-sm italic pr-8"
            style="clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);">
            <svg class="w-4 h-4 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
            </svg>
            INFO
        </div>

        <div class="flex-1 overflow-hidden h-full flex items-center bg-gray-50">
            <div class="whitespace-nowrap flex animate-marquee">
                <span class="text-sm font-medium text-gray-700 mx-4">
                    Selamat Datang di Portal Resmi Desa. Gunakan Layanan Mandiri untuk pengurusan KTP, KK, dan Akta secara online.
                </span>
                <span class="text-sm font-medium text-gray-700 mx-4">
                    • Jam Operasional Kantor Desa: Senin - Jumat (08:00 - 15:30 WITA).
                </span>
                <span class="text-sm font-medium text-gray-700 mx-4">
                    • Transparansi Anggaran: Laporan Realisasi APBDes Tahun 2026 sudah dapat diakses di menu APBDes.
                </span>
                <span class="text-sm font-medium text-gray-700 mx-4">
                    Selamat Datang di Portal Resmi Desa. Gunakan Layanan Mandiri untuk pengurusan KTP, KK, dan Akta secara online.
                </span>
            </div>
        </div>
    </div>


</div>

{{-- CSS KHUSUS UNTUK ANIMASI MARQUEE --}}
<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: inline-flex;
        animation: marquee 30s linear infinite;
    }

    .animate-marquee:hover {
        animation-play-state: paused;
        /* Berhenti saat mouse diarahkan ke teks */
    }
</style>