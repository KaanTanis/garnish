@props([
    'title' => 'Hikayemiz',
    'paragraph_1' => 'Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...',
    'paragraph_2' => 'Frochi olarak amacımız, tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.',
    'paragraph_3' => 'Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.',
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    {{-- Background --}}
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        02
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                {{-- Image Left --}}
                <div class="lg:col-span-5">
                    <div class="relative aspect-[3/4] rounded-3xl overflow-hidden border border-white/10">
                        <img 
                            src="{{ asset('temp/paket/tenders2.jpg') }}" 
                            alt="FROCHI" 
                            class="h-full w-full object-cover"
                        >
                        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                    </div>
                </div>
                
                {{-- Content Right --}}
                <div class="lg:col-span-7 lg:col-start-6">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                            <span class="block text-white">{{ $title }}</span>
                        </h2>
                    </div>
                    
                    <div class="space-y-8 text-lg md:text-xl text-zinc-300 leading-relaxed">
                        <p class="text-xl md:text-2xl">
                            {{ $paragraph_1 }}
                        </p>
                        
                        <div class="pl-6 border-l-2 border-orange-500/50">
                            <p class="text-xl md:text-2xl font-semibold text-white">
                                {{ $paragraph_2 }}
                            </p>
                        </div>
                        
                        <p class="text-lg md:text-xl">
                            {{ $paragraph_3 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

