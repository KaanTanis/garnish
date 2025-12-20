@props([
    'badge' => 'Kalite & Güven',
    'title' => 'Kalite & Güven',
    'subtitle' => 'Kalitemizin temeli: temiz içerik, yüksek hijyen, izlenebilir üretim ve şeffaf süreçler. Gıda güvenliği standartlarına bağlı kalarak her ürünün aynı kaliteyi sunmasını sağlarız.',
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-zinc-950"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,153,102,0.05),transparent_70%)]"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        01
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Text Content --}}
                <div>
                    <div class="inline-block mb-8 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-sm font-medium uppercase tracking-wider">
                        {{ $badge }}
                    </div>
                    
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 leading-[0.9]">
                        <span class="block text-white">{{ $title }}</span>
                    </h1>
                    
                    <p class="text-2xl md:text-3xl text-zinc-300 leading-relaxed max-w-xl">
                        {{ $subtitle }}
                    </p>
                </div>
                
                {{-- Visual Element --}}
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden border border-white/10">
                        <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                            <div class="text-center p-12">
                                <div class="text-6xl mb-4">🛡️</div>
                                <div class="text-zinc-400 text-sm uppercase tracking-wider">Kalite</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Floating accent --}}
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-orange-500/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>

