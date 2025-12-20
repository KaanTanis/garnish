@props([
    'badge' => 'Hikayemiz',
    'title_1' => 'Hayatın koşturmacasında',
    'title_2' => 'yanınızdayız',
    'paragraph_1' => 'Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...',
    'paragraph_2' => 'tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.',
    'paragraph_3' => 'Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.',
    'feature_1' => 'Yüksek kaliteli ham maddeler',
    'feature_2' => 'Şef tarifleri',
    'feature_3' => 'Temiz içerik yaklaşımı',
])

@aware(['page'])

<section id="about" class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        02
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                {{-- Copy Left --}}
                <div class="lg:col-span-7">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <div class="inline-block mb-6 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-sm font-medium uppercase tracking-wider">
                            {{ $badge }}
                        </div>
                        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight mb-8">
                            <span class="block text-white">{{ $title_1 }}</span>
                            <span class="block text-orange-500">{{ $title_2 }}</span>
                        </h2>
                    </div>

                    <div class="space-y-6 text-lg md:text-xl text-zinc-300 leading-relaxed mb-8">
                        <p>{{ $paragraph_1 }}</p>
                        <p class="text-xl md:text-2xl font-semibold text-white">
                            Frochi olarak amacımız, {{ $paragraph_2 }}
                        </p>
                        <p>{{ $paragraph_3 }}</p>
                    </div>

                    <div class="space-y-3 pt-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                            <span class="text-lg text-zinc-200">{{ $feature_1 }}</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                            <span class="text-lg text-zinc-200">{{ $feature_2 }}</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                            <span class="text-lg text-zinc-200">{{ $feature_3 }}</span>
                        </div>
                    </div>
                </div>

                {{-- Visual Right --}}
                <div class="lg:col-span-5 lg:col-start-8" data-about-visual>
                    <div class="relative aspect-[3/4] rounded-3xl overflow-hidden border border-white/10">
                        <img 
                            src="{{ asset('temp/paket/sinitzel1.jpg') }}" 
                            alt="FROCHI" 
                            class="h-full w-full object-cover"
                        >
                        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                        
                        <div class="absolute top-6 left-6">
                            <div class="px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-orange-200 uppercase tracking-wider">
                                Mutlu çıtır an
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
