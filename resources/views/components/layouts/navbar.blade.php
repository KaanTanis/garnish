<nav
    x-data="{ open: false }"
    class="fixed inset-x-4 top-4 md:top-6 md:left-1/2 md:-translate-x-1/2 md:inset-x-auto z-50"
>
    <div class="backdrop-blur-xl bg-zinc-950/70 border border-white/10 rounded-2xl md:rounded-full px-5 md:px-8 py-3 md:py-4 shadow-lg shadow-black/30">
        <div class="flex items-center justify-between gap-4">
            <a href="#hero" class="flex items-center gap-2">
                <span class="text-xl font-bold bg-linear-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent">
                    FROCHI
                </span>
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm">
                <a href="#" class="hover:text-orange-400 transition-colors">Ana Sayfa</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Hakkımızda</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Ürünler</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Üretim Tesisimiz</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Toplu Satış</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Kalite & Güven</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Bize Ulaşın</a>
            </div>

            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-full border border-white/15 bg-white/5 hover:bg-white/10 transition-colors"
                x-on:click="open = !open"
                aria-label="Menü"
            >
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                          d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div
            class="md:hidden origin-top transition-all duration-200 ease-out"
            x-cloak
            x-show="open"
            x-transition.scale.y
        >
            <div class="mt-3 pt-3 border-t border-white/10 flex flex-col gap-1 text-sm">
                <a href="#hero" class="px-1 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors" x-on:click="open = false">
                    Ana Sayfa
                </a>
                <a href="#about" class="px-1 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors" x-on:click="open = false">
                    Hakkımızda
                </a>
                <a href="#products" class="px-1 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors" x-on:click="open = false">
                    Ürünler
                </a>
                <a href="#garnish" class="px-1 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors" x-on:click="open = false">
                    Garnish
                </a>
                <a href="#contact" class="px-1 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors" x-on:click="open = false">
                    İletişim
                </a>
            </div>
        </div>
    </div>
</nav>
