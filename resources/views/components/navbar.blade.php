{{-- ================= TOP BAR ================= --}}
<div x-data="{ scrolled: false, open: false }" x-init="scrolled = window.scrollY > 20"
    @scroll.window="scrolled = window.scrollY > 20" class="sticky top-0 z-50 w-full h-14 transition-all duration-300"
    :class="scrolled ? 'bg-gray-100 border-b border-gray-300' : 'bg-transparent'">

    <div x-show="!scrolled" x-transition.opacity.duration.500ms class="absolute inset-0 -z-10 backdrop-blur-md"
        style="background-color: rgba(255, 255, 255, 0.3); 
                mask-image: linear-gradient(to right, white 0%, transparent 15%, transparent 85%, white 100%);
                -webkit-mask-image: linear-gradient(to right, white 0%, transparent 15%, transparent 85%, white 100%);">
    </div>

    <div x-data="{ open: false }" class="relative">
        <div class="flex items-center justify-between h-14 w-full relative bg-white z-30">
            <div class="flex items-center w-full">
                <button @click="open = true"
                    class="w-14 h-14 bg-gray-700 flex items-center justify-center hover:bg-gray-800 transition shrink-0">
                    <div class="grid grid-cols-3 gap-1 w-7 h-7">
                        <template x-for="i in 9">
                            <span class="bg-white w-full h-full block"></span>
                        </template>
                    </div>
                </button>

                <div class="flex items-center gap-3 ml-4 overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="w-8 h-10 object-contain shrink-0">
                    <span class="text-gray-800 text-[18px] font-bold truncate">
                        Website Resmi Desa Camplong 2
                    </span>
                </div>
            </div>

            <div class="flex items-center gap-4 px-6 shrink-0">
                <div class="hidden md:block">
                    <input type="text" placeholder="Cari Artikel"
                        class="px-4 py-1 rounded-full bg-gray-200 text-gray-700 border border-gray-300 focus:outline-none">
                </div>
                <div
                    class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                    🔒</div>
                <div
                    class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                    📊</div>
                <div
                    class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:bg-gray-300">
                    🔔</div>
            </div>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
            x-transition:leave="transition ease-in duration-500" x-transition:leave-start="translate-y-0"
            x-transition:leave-end="-translate-y-full"
            class="fixed inset-0 w-full h-screen bg-white z-[100] overflow-y-auto p-0">

            <div
                class="w-full bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 border-b-4 border-yellow-500 shadow-xl sticky top-0 z-20">
                <div class="flex justify-between items-center w-full p-4 md:p-6 lg:px-16">
                    <div class="flex items-center gap-3 md:gap-4">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}"
                            class="w-12 h-12 md:w-20 md:h-20 lg:w-24 lg:h-24 object-contain animate-flip">
                        <div class="text-white">
                            <h2
                                class="text-lg md:text-2xl lg:text-3xl font-bold uppercase tracking-wider leading-tight">
                                Desa Camplong 2
                            </h2>
                            <p
                                class="text-blue-100 text-[10px] md:text-sm lg:text-base opacity-90 uppercase tracking-tighter">
                                Kecamatan Fatuleu, Kab. Kupang
                            </p>
                        </div>
                    </div>
                    <button @click="open = false"
                        class="text-white hover:text-yellow-400 transition-all transform hover:rotate-90">
                        <span class="text-3xl md:text-5xl lg:text-6xl font-light">✕</span>
                    </button>
                </div>
            </div>

            <div
                class="w-full bg-gray-50 border-b border-gray-200 py-3 px-4 md:px-16 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="w-full md:flex-1 md:max-w-md">
                    <div class="relative">
                        <input type="text" placeholder="Cari Artikel..."
                            class="w-full px-4 py-2 rounded-full bg-white text-gray-700 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm md:text-base">
                        <span class="absolute right-4 top-2">🔍</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-white shadow-sm flex items-center justify-center cursor-pointer hover:bg-blue-100 transition">
                        🔒</div>
                    <div
                        class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-white shadow-sm flex items-center justify-center cursor-pointer hover:bg-blue-100 transition">
                        📊</div>
                    <div
                        class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-white shadow-sm flex items-center justify-center cursor-pointer hover:bg-blue-100 transition">
                        🔔</div>
                </div>
            </div>

            <div class="p-6 md:p-8 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                    <div class="flex flex-col gap-[4px] md:gap-[8px]">
                        <a href="#"
                            class="group flex items-center gap-[12px] py-[10px] border-l-[3px] border-transparent hover:border-blue-700 pl-[16px] transition-all hover:bg-blue-50/80">
                            <span
                                class="text-[18px] md:text-[22px] font-bold text-gray-800  hover:border-blue-600 group-hover:text-blue-700 tracking-tight">BERANDA</span>
                        </a>

                        <div x-data="{ openSub: false }" class="flex flex-col">
                            <button @click="openSub = !openSub"
                                class="group flex items-center justify-between py-[10px] border-l-[3px] border-transparent hover:border-blue-700 pl-[16px] transition-all hover:bg-blue-50/80">
                                <span
                                    class="text-[18px] md:text-[22px] font-bold text-gray-800  group-hover:text-blue-700 uppercase tracking-tight">Profil</span>
                                <span
                                    class="text-[14px] md:text-[16px] font-bold text-gray-400 group-hover:text-blue-700 transition-transform"
                                    :class="openSub ? 'rotate-180' : ''" x-text="openSub ? '−' : '▼'"></span>
                            </button>
                            <div x-show="openSub" x-collapse
                                class="flex flex-col ml-[28px] md:ml-[36px] border-l border-gray-200 my-[4px]">
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all">Sejarah
                                    Desa</a>
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all">Visi
                                    & Misi</a>
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all">Potensi
                                    Desa</a>
                            </div>
                        </div>

                        <div x-data="{ openSub: false }" class="flex flex-col">
                            <button @click="openSub = !openSub"
                                class="group flex items-center justify-between py-[10px] border-l-[3px] border-transparent hover:border-blue-700 pl-[16px] transition-all hover:bg-blue-50/80">
                                <span
                                    class="text-[18px] md:text-[22px] font-bold text-gray-800 group-hover:text-blue-700 uppercase tracking-tight">Pemerintah</span>
                                <span
                                    class="text-[14px] md:text-[16px] font-bold text-gray-400 group-hover:text-blue-700 transition-transform"
                                    :class="openSub ? 'rotate-180' : ''" x-text="openSub ? '−' : '▼'"></span>
                            </button>
                            <div x-show="openSub" x-collapse
                                class="flex flex-col ml-[28px] md:ml-[36px] border-l border-gray-200 my-[4px]">
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600">Kepala
                                    Desa</a>
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600">Perangkat
                                    Desa</a>
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600">BPD</a>
                            </div>
                        </div>

                        <div x-data="{ openSub: false }" class="flex flex-col">
                            <button @click="openSub = !openSub"
                                class="group flex items-center justify-between py-[10px] border-l-[3px] border-transparent hover:border-blue-700 pl-[16px] transition-all hover:bg-blue-50/80">
                                <span
                                    class="text-[18px] md:text-[22px] font-bold text-gray-800 group-hover:text-blue-700 uppercase tracking-tight">Layanan</span>
                                <span
                                    class="text-[14px] md:text-[16px] font-bold text-gray-400 group-hover:text-blue-700"
                                    x-text="openSub ? '−' : '▼'"></span>
                            </button>
                            <div x-show="openSub" x-collapse
                                class="flex flex-col ml-[28px] md:ml-[36px] border-l border-gray-200 my-[4px]">
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600">Surat
                                    Keterangan</a>
                                <a href="#"
                                    class="py-[8px] pl-[20px] text-[15px] md:text-[16px] font-semibold text-gray-600  hover:border-blue-600 hover:text-blue-600">Kependudukan
                                    (KTP/KK)</a>
                            </div>
                        </div>

                        <a href="#"
                            class="group flex items-center gap-[12px] py-[10px] border-l-[3px] border-transparent hover:border-blue-700 pl-[16px] transition-all hover:bg-blue-50/80">
                            <span
                                class="text-[18px] md:text-[22px] font-bold text-gray-800 group-hover:text-blue-700 uppercase tracking-tight">Berita
                                Desa</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ================= HERO HEADER ================= --}}
        <div
            class="relative min-h-[250px] lg:h-[250px] w-full px-6 flex items-center justify-between py-10 lg:py-0 transition-all duration-500">
            <img src="{{ Vite::asset('resources/images/hedaer.png') }}"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-900/60"></div>

            <div class="relative z-10 container mx-auto px-4 lg:px-6 h-full flex items-center text-white">
                <div
                    class="flex flex-col lg:flex-row justify-between items-center w-full gap-8 lg:gap-0 transition-all">

                    <div class="flex flex-col lg:flex-row items-center text-center lg:text-left gap-4 lg:gap-6">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}"
                            class="w-20 h-20 lg:w-24 lg:h-24 object-contain animate-flip">
                        <div>
                            <h1 class="text-3xl lg:text-4xl font-bold tracking-tight">Desa Camplong 2</h1>
                            <p class="text-base lg:text-lg">Kec. Fatuleu, Kab. Kupang</p>
                            <p class="text-xs lg:text-sm opacity-80 mt-1">Motto Desa: Maju Digital, Transparan & Modern
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center text-center bg-black/30 
            lg:bg-transparent p-5 lg:p-0 rounded-2xl backdrop-blur-md lg:backdrop-blur-none border border-white/10 lg:border-none shadow-xl lg:shadow-none"
                        x-data="clock()" x-init="startClock()">
                        <p class="text-sm lg:text-base mb-1" x-text="date"></p>
                        <p class="text-3xl lg:text-4xl font-bold text-cyan-300 drop-shadow-lg" x-text="time"></p>
                    </div>

                </div>
            </div>
        </div>

        {{-- ================= NAVBAR (DENGAN DETEKSI OVERFLOW) ================= --}}
        <div x-data="{ 
        isOverflow: false,
        check() {
            this.isOverflow = $refs.ghostMenu.scrollWidth > window.innerWidth;
        }
     }" x-init="$nextTick(() => check()); window.addEventListener('resize', () => check());"
            class="relative bg-[rgba(29,78,216,0.3)] backdrop-blur-md transition-all duration-300 w-full z-40 border-b border-white/20 shadow-sm">

            <div x-ref="ghostMenu" class="absolute opacity-0 pointer-events-none whitespace-nowrap flex items-center">
                <span class="px-4 py-3 text-[18px] font-semibold">Beranda</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Profil ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Pemerintah ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Lembaga ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Layanan ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Statistik ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">APBDes ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Laporan ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">PPID ▼</span>
                <span class="px-4 py-3 text-[18px] font-semibold">Berita ▼</span>
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
                            class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
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
                            class="flex items-center gap-1 px-4 py-3 text-[18px] font-semibold transition-all border-l-4 border-transparent  hover:bg-blue-800/40 text-black h-full">
                            Layanan <span :class="openMenu ? 'rotate-180' : ''"
                                class="inline-block text-xs transition-transform duration-300">▼</span>
                        </button>
                        <div x-show="openMenu" x-transition
                            class="absolute left-0 top-full w-48 bg-white text-gray-800 rounded-b-xl shadow-xl p-2 z-[60] flex flex-col border border-gray-100">
                            <a href="#"
                                class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Surat
                                Pengantar</a>
                            <a href="#"
                                class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">KTP
                                / KK</a>
                            <a href="#"
                                class="px-4 py-2 border-l-4 border-transparent hover:border-blue-600 hover:bg-blue-50 rounded-r-md transition-all">Domisili</a>
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
        </div>

        <script type="module" src="https://cdn.jsdelivr.net/npm/@webawesome/ui/dist/webawesome.js"></script>