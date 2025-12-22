@php
$menu = [
    ['label' => 'Hakkımızda', 'slug' => 'hakkimizda'],
    ['label' => 'Ürünler', 'slug' => 'urunlerimiz'],
    ['label' => 'Üretim Tesisimiz', 'slug' => 'uretim-tesisimiz'],
    ['label' => 'Toplu Satış', 'slug' => 'toplu-satis'],
    ['label' => 'Kalite & Güven', 'slug' => 'kalite-guven'],
    ['label' => 'İletişim', 'slug' => 'iletisim'],
];
@endphp

<nav
    x-data="{ open: false }"
    x-effect="document.body.classList.toggle('overflow-hidden', open)"
    class="fixed inset-x-4 top-4 lg:top-6 lg:left-1/2 lg:-translate-x-1/2 lg:inset-x-auto z-50"
>
    <div class="backdrop-blur-lg bg-zinc-950/70 border border-white/10 rounded-2xl lg:rounded-full px-5 lg:px-10 py-3 lg:py-4 shadow-lg shadow-black/30
+             lg:min-w-[760px] xl:min-w-[900px]">
        <div class="flex items-center justify-between gap-4">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="text-2xl font-bold tracking-wide bg-linear-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent drop-shadow-sm">
                    FROCHI
                </span>
            </a>

            <!-- Desktop menu (SADECE lg+) -->
            <div class="hidden lg:flex items-center gap-6 text-sm">
                @foreach($menu as $item)
                    <a
                        href="{{ route('page', ['filamentFabricatorPage' => $item['slug']]) }}"
                        @class([
                            'hover:text-orange-400 transition-colors',
                            'text-orange-400' => request()->is($item['slug']),
                        ])
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <!-- Hamburger (mobil + tablet) -->
            <button
                type="button"
                class="lg:hidden inline-flex items-center justify-center w-9 h-9 rounded-full border border-white/15 bg-white/5 hover:bg-white/10 transition-colors"
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

        <!-- Mobil / Tablet Menu -->
        <div
            class="lg:hidden origin-top"
            x-cloak
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
        >
            <div class="mt-3 pt-3 border-t border-white/10 flex flex-col gap-1 text-sm">
                @foreach($menu as $item)
                    <a
                        href="{{ route('page', ['filamentFabricatorPage' => $item['slug']]) }}"
                        @class([
                            'px-2 py-2 rounded-lg hover:bg-white/5 hover:text-orange-300 transition-colors',
                            'text-orange-400' => request()->is($item['slug']),
                        ])
                        x-on:click="open = false"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
