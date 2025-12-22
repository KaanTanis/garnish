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

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        02
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">
                {{-- Content Left --}}
                <div class="lg:col-span-7">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                            <span class="block text-white">{{ $title }}</span>
                        </h2>
                    </div>
                    
                    <p class="text-lg md:text-xl text-zinc-300 leading-relaxed mb-12 max-w-2xl">
                        {{ $description }}
                    </p>
                    
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-white mb-8">Markanıza Sağladığı Avantajlar</h3>
                        <div class="space-y-4">
                            @foreach($advantages as $advantage)
                                <div class="flex items-start gap-4">
                                    <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                                    <span class="text-lg text-zinc-200">{{ $advantage }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <a href="{{ $cta_link }}" class="inline-flex items-center gap-3 px-8 py-4 bg-linear-to-r from-orange-600 to-amber-600 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300">
                            <span>{{ $cta_text }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                {{-- Visual Right --}}
                <div class="lg:col-span-5 lg:col-start-8">
                    <div class="sticky top-20">
                        <div class="aspect-3/4 rounded-3xl overflow-hidden border border-white/10 bg-linear-to-br from-white/5 to-white/0">
                            <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                                <img src="{{ asset('temp/tenders/3.jpeg') }}" alt="" class="object-cover w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

