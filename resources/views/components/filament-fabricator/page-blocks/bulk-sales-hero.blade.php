@props([
    'badge' => 'Toplu Satış',
    'title' => 'GARNISH',
    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Tavuk Ürünleri',
    'description' => 'Restoran, kafe, otel ve toplu yemek hizmeti sunan mutfaklara; yüksek performans, devamlı kalite ve maliyet avantajı sağlar.',
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden pt-8">
    {{-- Orange gradient background --}}
    <div class="absolute inset-0 bg-linear-to-br from-orange-600 via-amber-600 to-orange-700"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(0,0,0,0.1),transparent_70%)]"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/10 leading-none select-none">
        01
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Text Content --}}
                <div>
                    <div class="inline-block mb-8 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-sm font-medium uppercase tracking-wider">
                        {{ $badge }}
                    </div>
                    
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 leading-[0.9] text-white">
                        {{ $title }}
                    </h1>
                    
                    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white/90">
                        {{ $subtitle }}
                    </h2>
                    
                    <p class="text-xl md:text-2xl text-white/80 leading-relaxed max-w-xl">
                        {{ $description }}
                    </p>
                </div>
                
                {{-- Visual Element --}}
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden border border-white/20 bg-white/10 backdrop-blur-sm">
                        <div class="h-full w-full bg-linear-to-br from-white/20 to-white/10 flex items-center justify-center">
                            <div class="text-center p-12">
                                <div class="text-6xl mb-4">🍽️</div>
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

