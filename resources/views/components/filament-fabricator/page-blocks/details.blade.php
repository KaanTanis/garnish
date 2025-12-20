@props([
    'title' => 'Markanıza Sağladığı Avantajlar',
    'advantages' => [
        'Yoğun servis saatlerinde hızlı ve stabil performans',
        'Otel ve restoran mutfaklarında sürdürülebilir kalite',
        'Catering firmalarında daha düşük fire, daha yüksek verim',
        'Premium restoranlar için ideal ürün standardı',
        'Menü standardizasyonu için her lokmada aynı kalite güvencesi',
    ],
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        05
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12 lg:mb-16">
                <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
            </div>
            
            <div class="space-y-4 max-w-4xl">
                @if(!empty($advantages))
                    @foreach($advantages as $advantage)
                        <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                            <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                            <p class="text-lg text-zinc-200">{{ $advantage }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                        <p class="text-lg text-zinc-200">Yoğun servis saatlerinde hızlı ve stabil performans</p>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                        <p class="text-lg text-zinc-200">Otel ve restoran mutfaklarında sürdürülebilir kalite</p>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                        <p class="text-lg text-zinc-200">Catering firmalarında daha düşük fire, daha yüksek verim</p>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                        <p class="text-lg text-zinc-200">Premium restoranlar için ideal ürün standardı</p>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                        <p class="text-lg text-zinc-200">Menü standardizasyonu için her lokmada aynı kalite güvencesi</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
