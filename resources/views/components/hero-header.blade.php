{{-- ================= HERO HEADER ================= --}}
<div class="relative min-h-[250px] lg:h-[250px] w-full px-6 flex items-center justify-between py-10 lg:py-0 transition-all duration-500 overflow-hidden">
    <img src="{{ Vite::asset('resources/images/hedaer.png') }}"
        class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-blue-900/60"></div>

    <div class="relative z-10 container mx-auto px-4 lg:px-6 h-full flex items-center text-white">
        <div class="flex flex-col lg:flex-row justify-between items-center w-full gap-8 lg:gap-0 transition-all">

            <div class="flex flex-col lg:flex-row items-center text-center lg:text-left gap-4 lg:gap-6">
                <img src="{{ Vite::asset('resources/images/logo.png') }}"
                    class="w-20 h-20 lg:w-24 lg:h-24 object-contain animate-flip">
                <div>
                    <h1 class="text-3xl lg:text-4xl font-bold tracking-tight">Desa Camplong 2</h1>
                    <p class="text-base lg:text-lg">Kec. Fatuleu, Kab. Kupang</p>
                    <p class="text-xs lg:text-sm opacity-80 mt-1 italic">
                        "Maju Digital, Transparan & Modern"
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center text-center bg-black/30 lg:bg-transparent p-5 lg:p-0 rounded-2xl backdrop-blur-md lg:backdrop-blur-none border border-white/10 lg:border-none shadow-xl lg:shadow-none"
                x-data="clock()" x-init="startClock()">
                <p class="text-sm lg:text-base mb-1" x-text="date"></p>
                <p class="text-3xl lg:text-4xl font-bold text-cyan-400 drop-shadow-[0_0_10px_rgba(34,211,238,0.8)]" x-text="time"></p>
            </div>

        </div>
    </div>
</div>