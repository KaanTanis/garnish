@props([
    'title' => 'Başlıca Ürünlerimiz',
    'products' => [
        [
            'name' => 'Tenders',
            'description' => 'Çıtır doku, sulu iç yapı, dengeli baharat.',
            'features' => ['Çıtır doku', 'Sulu iç yapı', 'Dengeli baharat'],
        ],
        [
            'name' => 'Şinitzel',
            'description' => 'Kaliteli kaplama, gerçekçi doku, doyurucu lezzet.',
            'features' => ['Kaliteli kaplama', 'Gerçekçi doku', 'Doyurucu lezzet'],
        ],
    ],
])

@aware(['page'])

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-center">{{ $title }}</h2>
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($products as $index => $product)
                    <div class="group relative overflow-hidden rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                        <div class="aspect-square bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                            <div class="font-black text-white/10 h-full w-full">
                                <img src="{{ asset('temp/paket/' . strtolower($product['name']) . ($index === 0 ? '2' : '2') . '.jpg') }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover">
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-3xl font-bold mb-4">{{ $product['name'] }}</h3>
                            <p class="text-zinc-400 text-lg mb-6">{{ $product['description'] }}</p>
                            @if(!empty($product['features']))
                                <div class="space-y-2">
                                    @foreach($product['features'] as $feature)
                                        <div class="flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-orange-500"></div>
                                            <span class="text-zinc-300 text-sm">{{ is_array($feature) ? ($feature[0] ?? '') : $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="absolute inset-0 bg-linear-to-t from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/20 group-hover:to-transparent transition-all duration-500 pointer-events-none"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

