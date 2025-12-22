@props([
    'badge' => 'Ürün Gamı',
    'title' => 'Ürünlerimiz',
    'subtitle' => 'Kaliteli ham maddeler ve şef tarifleriyle hazırlanan premium tavuk ürünleri',
    'product_1_name' => 'Tenders',
    'product_1_description' => 'Çıtır doku, sulu iç yapı, dengeli baharat. Her lokmada restoran kalitesi.',
    'product_2_name' => 'Şinitzel',
    'product_2_description' => 'Kaliteli kaplama, gerçekçi doku, doyurucu lezzet. Premium şef reçetesi.',
])

@aware(['page'])

<section id="products" class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        03
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            {{-- Title --}}
            <div class="mb-16 lg:mb-20 text-center">
                <div class="inline-block mb-6 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-sm font-medium uppercase tracking-wider">
                    {{ $badge }}
                </div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
                <p class="text-xl md:text-2xl text-zinc-300 max-w-2xl mx-auto">
                    {{ $subtitle }}
                </p>
            </div>

            {{-- Products --}}
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
                {{-- Tenders --}}
                <div class="group relative">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden border border-white/10">
                        <img src="{{ asset('temp/paket/tenders2.jpg') }}" alt="{{ $product_1_name }}" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-4xl md:text-5xl font-black text-white mb-3">{{ $product_1_name }}</h3>
                            <p class="text-lg text-zinc-200">
                                {{ $product_1_description }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Schnitzel --}}
                <div class="group relative">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden border border-white/10">
                        <img src="{{ asset('temp/paket/sinitzel2.jpg') }}" alt="{{ $product_2_name }}" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-4xl md:text-5xl font-black text-white mb-3">{{ $product_2_name }}</h3>
                            <p class="text-lg text-zinc-200">
                                {{ $product_2_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
