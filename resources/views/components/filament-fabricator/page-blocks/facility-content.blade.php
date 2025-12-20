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

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto space-y-12">
            <div class="max-w-3xl">
                <div class="inline-block mb-4 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-500 text-sm font-medium">
                    {{ $title }}
                </div>
                <p class="text-lg text-zinc-400 leading-relaxed">{{ $description }}</p>
            </div>

            <div class="grid md:grid-cols-[1.2fr,1.1fr] gap-10 items-start">
                <div class="space-y-5">
                    <h3 class="text-2xl font-bold mb-4">Tesis Özellikleri</h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        @foreach($features as $feature)
                            <div class="flex items-start gap-3 p-4 rounded-2xl bg-white/5 border border-white/10">
                                <div class="mt-1 w-2 h-2 rounded-full bg-orange-500"></div>
                                <div class="text-zinc-300">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-4">
                    @foreach($images as $image)
                        <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                            <div class="aspect-[4/5] bg-no-repeat bg-cover bg-center"
                                 style="background-image: url('{{ asset($image) }}');">
                            </div>
                            <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/20 to-transparent"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

