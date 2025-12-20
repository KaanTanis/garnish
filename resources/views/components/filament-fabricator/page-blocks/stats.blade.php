@props([
    'stats' => [
        ['value' => '100%', 'label' => 'Tavuk Göğsü'],
        ['value' => '0%', 'label' => 'MDM İçeriği'],
        ['value' => 'Şef', 'label' => 'Tarifleri'],
        ['value' => 'Modern', 'label' => 'Üretim Tesisi'],
    ],
])

@aware(['page'])

<section class="border-y border-white/5 backdrop-blur-sm bg-white/5">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @if(!empty($stats))
                @foreach($stats as $stat)
                    <div>
                        <div class="text-4xl font-bold text-orange-500 mb-2">{{ $stat['value'] ?? '' }}</div>
                        <div class="text-sm text-zinc-400">{{ $stat['label'] ?? '' }}</div>
                    </div>
                @endforeach
            @else
                <div>
                    <div class="text-4xl font-bold text-orange-500 mb-2">100%</div>
                    <div class="text-sm text-zinc-400">Tavuk Göğsü</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-500 mb-2">0%</div>
                    <div class="text-sm text-zinc-400">MDM İçeriği</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-500 mb-2">Şef</div>
                    <div class="text-sm text-zinc-400">Tarifleri</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-500 mb-2">Modern</div>
                    <div class="text-sm text-zinc-400">Üretim Tesisi</div>
                </div>
            @endif
        </div>
    </div>
</section>
