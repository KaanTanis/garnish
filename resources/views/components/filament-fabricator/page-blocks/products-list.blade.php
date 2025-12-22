@props([
    'title' => 'Başlıca Ürünlerimiz',
    'products' => [
        [
            'name' => 'Tenders',
            'description' => 'Çıtır doku, sulu iç yapı, dengeli baharat.',
            'features' => ['Çıtır doku', 'Sulu iç yapı', 'Dengeli baharat'],
            'image' => '/temp/paket/tenders2.jpg',
            'image2' => '/temp/paket/tenders2.jpg',
        ],
        [
            'name' => 'Şinitzel',
            'description' => 'Kaliteli kaplama, gerçekçi doku, doyurucu lezzet.',
            'features' => ['Kaliteli kaplama', 'Gerçekçi doku', 'Doyurucu lezzet'],
            'image' => '/temp/paket/sinitzel2.jpg',
            'image2' => '/temp/paket/tenders2.jpg',
        ],
    ],
])

@aware(['page'])

{{-- Title Section (at the end or beginning) --}}
<div class="relative py-8 md:py-32 border-b border-white/5">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-6">
                <span class="block text-white">{{ $title }}</span>
            </h1>
            <div class="w-32 h-1 bg-linear-to-r from-transparent via-orange-500 to-transparent mx-auto"></div>
        </div>
    </div>
</div>

<section class="relative">


    <div class="absolute inset-0 bg-zinc-950"></div>
    
    @foreach($products as $index => $product)
        @php
            $isEven = $index % 2 === 0;
        @endphp
        
        {{-- Full Width Product Section --}}
        <div class="relative min-h-screen flex items-center overflow-hidden px-2 {{ $index > 0 ? 'border-t border-white/5' : '' }}">
            {{-- Background Image --}}
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-linear-to-r {{ $isEven ? 'from-zinc-950 via-zinc-950/95 to-transparent' : 'from-transparent via-zinc-950/95 to-zinc-950' }}"></div>
                <img 
                    src="{{ asset($product['image2']) }}" 
                    alt="{{ $product['name'] }}" 
                    class="h-full w-full object-cover opacity-30"
                >
            </div>

            {{-- Content Container --}}
            <div class="relative container mx-auto px-6 py-20 md:py-32">
                <div class="max-w-7xl mx-auto">
                    <div class="grid lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                        {{-- Text Content --}}
                        <div class="lg:col-span-5 {{ $isEven ? 'lg:order-1' : 'lg:order-2 lg:col-start-8' }}">
                            {{-- Product Number --}}
                            <div class="text-6xl md:text-8xl font-black text-white/5 mb-4 leading-none">
                                0{{ $index + 1 }}
                            </div>
                            
                            {{-- Product Name --}}
                            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-6 leading-tight">
                                <span class="block text-white">{{ $product['name'] }}</span>
                            </h2>
                            
                            {{-- Description --}}
                            <p class="text-xl md:text-2xl text-zinc-300 mb-8 leading-relaxed">
                                {{ $product['description'] }}
                            </p>

                            {{-- Features --}}
                            @if(!empty($product['features']))
                                <div class="space-y-4 mb-10">
                                    @foreach($product['features'] as $feature)
                                        <div class="flex items-start gap-4">
                                            <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                                            <span class="text-lg text-zinc-200">
                                                {{ is_array($feature) ? ($feature[0] ?? '') : $feature }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            {{-- Divider --}}
                            <div class="w-20 h-px bg-linear-to-r from-orange-500 to-transparent mb-8"></div>
                        </div>

                        {{-- Visual Element --}}
                        <div class="lg:col-span-7 {{ $isEven ? 'lg:order-2' : 'lg:order-1 lg:col-start-1' }}">
                            <div class="relative">
                                {{-- Large Image --}}
                                <div class="relative aspect-[4/5] lg:aspect-square overflow-hidden rounded-2xl">
                                    <img 
                                        src="{{ asset($product['image']) }}" 
                                        alt="{{ $product['name'] }}" 
                                        class="h-full w-full object-cover"
                                    >
                                    <div class="absolute inset-0 bg-linear-to-t from-black/40 via-transparent to-transparent"></div>
                                </div>

                                {{-- Floating Badge --}}
                                <div class="absolute {{ $isEven ? '-bottom-6 -right-6' : '-bottom-6 -left-6' }} px-6 py-4 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl">
                                    <div class="text-xs uppercase tracking-wider text-orange-300 mb-1">Premium</div>
                                    <div class="text-2xl font-black text-white">100%</div>
                                    <div class="text-xs text-zinc-400">Tavuk Göğsü</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section Divider (except last) --}}
            @if($index < count($products) - 1)
                <div class="absolute bottom-0 left-0 right-0 h-px bg-linear-to-r from-transparent via-white/10 to-transparent"></div>
            @endif
        </div>
    @endforeach
</section>


