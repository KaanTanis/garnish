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

<section class="py-16 md:py-32 relative">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <h3 class="text-4xl font-bold mb-12">{{ $title }}</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @if(!empty($advantages))
                    @foreach($advantages as $index => $advantage)
                        <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10 {{ $index === count($advantages) - 1 && count($advantages) % 2 === 1 ? 'md:col-span-2' : '' }}">
                            <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                            <p class="text-zinc-300">{{ $advantage }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                        <p class="text-zinc-300">Yoğun servis saatlerinde hızlı ve stabil performans</p>
                    </div>
                    <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                        <p class="text-zinc-300">Otel ve restoran mutfaklarında sürdürülebilir kalite</p>
                    </div>
                    <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                        <p class="text-zinc-300">Catering firmalarında daha düşük fire, daha yüksek verim</p>
                    </div>
                    <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                        <p class="text-zinc-300">Premium restoranlar için ideal ürün standardı</p>
                    </div>
                    <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10 md:col-span-2">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                        <p class="text-zinc-300">Menü standardizasyonu için her lokmada aynı kalite güvencesi</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
