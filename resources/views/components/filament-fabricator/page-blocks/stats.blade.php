@props([
    'stats' => [
        ['value' => '100%', 'label' => 'Tavuk Göğsü'],
        ['value' => '0%', 'label' => 'MDM İçeriği'],
        ['value' => 'Şef', 'label' => 'Tarifleri'],
        ['value' => 'Modern', 'label' => 'Üretim Tesisi'],
    ],
])

@aware(['page'])

<section class="relative py-20 md:py-32 border-y border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
                @if(!empty($stats))
                    @foreach($stats as $stat)
                        <div class="text-center">
                            <div class="text-5xl md:text-6xl lg:text-7xl font-black text-orange-500 mb-3 leading-none">
                                {{ $stat['value'] ?? '' }}
                            </div>
                            <div class="text-sm md:text-base text-zinc-300 uppercase tracking-wider">
                                {{ $stat['label'] ?? '' }}
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl lg:text-7xl font-black text-orange-500 mb-3 leading-none">100%</div>
                        <div class="text-sm md:text-base text-zinc-300 uppercase tracking-wider">Tavuk Göğsü</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl lg:text-7xl font-black text-orange-500 mb-3 leading-none">0%</div>
                        <div class="text-sm md:text-base text-zinc-300 uppercase tracking-wider">MDM İçeriği</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl lg:text-7xl font-black text-orange-500 mb-3 leading-none">Şef</div>
                        <div class="text-sm md:text-base text-zinc-300 uppercase tracking-wider">Tarifleri</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl lg:text-7xl font-black text-orange-500 mb-3 leading-none">Modern</div>
                        <div class="text-sm md:text-base text-zinc-300 uppercase tracking-wider">Üretim Tesisi</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
