@props([
    'title' => 'Garnish Ürünleri',
    'description' => 'Garnish ürünleri, şeflerle birlikte yürütülen kapsamlı Ar-Ge çalışmalarının sonucudur. Her seri, tadı ve dokusu tam doğru kıvamda olacak şekilde standartlaştırılırken; ev yapımı ürünlerin sıcaklığını, doğallığını ve güvenilirliğini korur.',
    'advantages' => [
        'Yoğun servis saatlerinde hızlı ve stabil performans',
        'Otel ve restoran mutfaklarında yüksek ve sürdürülebilir kalite',
        'Catering firmalarında daha düşük fire, daha yüksek verim',
        'Premium burger & tavuk restoranları için ideal ürün standardı',
        'Menü standardizasyonu için her lokmada aynı kalite güvencesi',
    ],
    'cta_text' => 'Toplu Satış Bilgi Al',
    'cta_link' => '/iletisim',
])

@aware(['page'])

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto space-y-12">
            <div class="max-w-3xl">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">{{ $title }}</h2>
                <p class="text-lg text-zinc-400 leading-relaxed">{{ $description }}</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold mb-8">Markanıza Sağladığı Avantajlar</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($advantages as $advantage)
                        <div class="flex gap-4 p-6 rounded-2xl bg-white/5 border border-white/10">
                            <div class="shrink-0 w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center text-xs font-bold">✓</div>
                            <p class="text-zinc-300">{{ $advantage }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ $cta_link }}" class="inline-block px-10 py-5 bg-linear-to-r from-orange-600 to-amber-600 rounded-full font-bold text-lg hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/50 transition-all duration-300">
                    {{ $cta_text }}
                </a>
            </div>
        </div>
    </div>
</section>

