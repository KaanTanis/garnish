@props([
    'title' => 'Değerlerimiz',
    'values' => [
        ['title' => 'Yüksek kaliteli ham maddeler', 'description' => 'Özenle seçilmiş, doğal içerikler'],
        ['title' => 'Şef tarifleri', 'description' => 'Restoran kalitesinde özel reçeteler'],
        ['title' => 'Temiz içerik yaklaşımı', 'description' => 'Şeffaf ve güvenilir üretim'],
    ],
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5 px-4">
    {{-- Background --}}
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        03
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            {{-- Title --}}
            <div class="mb-16 lg:mb-20">
                <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
            </div>
            
            {{-- Values - Vertical Layout --}}
            <div class="space-y-12 lg:space-y-16 max-w-4xl">
                @foreach($values as $index => $value)
                    <div class="relative">
                        {{-- Number Badge --}}
                        <div class="absolute -left-8 top-0 text-6xl md:text-7xl font-black text-white/10 leading-none">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        
                        {{-- Content --}}
                        <div class="pl-12 md:pl-16">
                            <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">
                                {{ $value['title'] }}
                            </h3>
                            <p class="text-lg md:text-xl text-zinc-300 leading-relaxed max-w-2xl">
                                {{ $value['description'] }}
                            </p>
                            
                            {{-- Divider --}}
                            @if($index < count($values) - 1)
                                <div class="mt-8 w-24 h-px bg-linear-to-r from-orange-500/50 to-transparent"></div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

