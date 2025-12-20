@props([
    'title' => 'FROCHI → GARNISH',
    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Çözümler',
    'description' => 'Restoran, kafe, otel ve catering mutfakları için özel geliştirilen Garnish markamız. Gerçek tavuk göğsü, düşük fire, stabil pişirme performansı ve premium kaplama teknolojisi.',
    'stat_1_value' => 'Yüksek',
    'stat_1_label' => 'Performans',
    'stat_2_value' => 'Stabil',
    'stat_2_label' => 'Kalite',
    'stat_3_value' => 'Düşük',
    'stat_3_label' => 'Fire Oranı',
    'cta_text' => 'Toplu Satış Bilgi Al',
    'cta_link' => '#contact',
])

@aware(['page'])

<section id="garnish" class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    {{-- Orange gradient background --}}
    <div class="absolute inset-0 bg-linear-to-br from-orange-600 via-amber-600 to-orange-700"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(0,0,0,0.1),transparent_70%)]"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/10 leading-none select-none">
        04
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Content Left --}}
                <div>
                    <div class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 text-white leading-[0.9]">
                        {{ $title }}
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-6 text-white">{{ $subtitle }}</h3>
                    <p class="text-xl md:text-2xl mb-12 text-white/90 leading-relaxed max-w-xl">
                        {{ $description }}
                    </p>

                    <div class="grid grid-cols-3 gap-4 mb-12">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-center">
                            <div class="text-3xl md:text-4xl font-bold mb-2 text-white">{{ $stat_1_value }}</div>
                            <div class="text-xs md:text-sm text-white/80 uppercase tracking-wider">{{ $stat_1_label }}</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-center">
                            <div class="text-3xl md:text-4xl font-bold mb-2 text-white">{{ $stat_2_value }}</div>
                            <div class="text-xs md:text-sm text-white/80 uppercase tracking-wider">{{ $stat_2_label }}</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-center">
                            <div class="text-3xl md:text-4xl font-bold mb-2 text-white">{{ $stat_3_value }}</div>
                            <div class="text-xs md:text-sm text-white/80 uppercase tracking-wider">{{ $stat_3_label }}</div>
                        </div>
                    </div>

                    <a href="{{ $cta_link }}" class="inline-flex items-center gap-3 px-8 py-4 bg-zinc-950 text-white rounded-full font-bold text-lg hover:scale-105 transition-all duration-300">
                        <span>{{ $cta_text }}</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                {{-- Visual Right --}}
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden border border-white/20 bg-white/10 backdrop-blur-sm">
                        <div class="h-full w-full bg-linear-to-br from-white/20 to-white/10 flex items-center justify-center">
                            <div class="text-center p-12">
                                <div class="text-6xl mb-4">✨</div>
                                <div class="text-white/80 text-sm uppercase tracking-wider">Garnish</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Floating accent --}}
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-white/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>
