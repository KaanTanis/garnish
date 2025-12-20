@props([
    'title' => 'Tarsus OSB',
    'description' => 'Modern üretim tesisimiz, yüksek hijyen standartları ve otomasyon kontrollü üretim hatlarıyla güvenli ve stabil kalite sağlar. Soğuk zincir yönetimi, kalite kontrol süreçleri ve şeffaf üretim yaklaşımıyla tüketicimize güven veririz.',
    'features' => [
        'Modern otomasyon sistemleri',
        'Yüksek hijyen standartları',
        'Kesintisiz kalite kontrol',
        'Güvenli donuk zincir yönetimi',
    ],
    'images' => [
        'temp/facility/facility-1.jpg',
        'temp/facility/facility-2.jpg',
        'temp/facility/facility-3.jpg',
    ],
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        02
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">
                {{-- Features Left --}}
                <div class="lg:col-span-5">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                            <span class="block text-white">{{ $title }}</span>
                        </h2>
                    </div>
                    
                    <p class="text-lg md:text-xl text-zinc-300 leading-relaxed mb-12">
                        {{ $description }}
                    </p>
                    
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-white mb-6">Tesis Özellikleri</h3>
                        @foreach($features as $index => $feature)
                            <div class="flex items-start gap-4">
                                <div class="mt-2 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                                <span class="text-lg text-zinc-200">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Images Right --}}
                <div class="lg:col-span-7 lg:col-start-6">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($images as $image)
                            <div class="relative aspect-[3/4] rounded-2xl overflow-hidden border border-white/10">
                                <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <div class="text-3xl mb-2">📸</div>
                                        <div class="text-zinc-400 text-xs">Tesis</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

