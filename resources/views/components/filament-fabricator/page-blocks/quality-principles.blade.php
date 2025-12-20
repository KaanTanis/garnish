@props([
    'title' => 'Kalite Prensiplerimiz',
    'principles' => [
        [
            'title' => 'Temiz İçerik',
            'description' => 'Ürünlerimizde yalnızca özenle seçilmiş yüksek kaliteli ham maddeler kullanırız. MDM içermez, doğal içerik tercih ederiz.',
        ],
        [
            'title' => 'Yüksek Hijyen',
            'description' => 'Modern tesisimizde kesintisiz hijyen standartları ve kalite kontrol süreçleriyle üretim yapıyoruz.',
        ],
        [
            'title' => 'İzlenebilir Üretim',
            'description' => 'Her ürünün üretim sürecini takip edebilir, şeffaf süreçlerle güvenilir kalite sunuyoruz.',
        ],
        [
            'title' => 'Şeffaf Süreçler',
            'description' => 'Alerjen, içerik ve üretim süreçlerini açıkça paylaşır, gıda güvenliği standartlarına bağlı kalırız.',
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
                @foreach($principles as $index => $principle)
                    <div class="group relative p-8 rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                        <div class="absolute inset-0 bg-linear-to-br from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/10 group-hover:to-amber-500/10 rounded-3xl transition-all duration-500"></div>
                        <div class="relative">
                            <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                                <div class="text-2xl font-black text-orange-500">{{ $index + 1 }}</div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">{{ $principle['title'] }}</h3>
                            <p class="text-zinc-400 leading-relaxed">{{ $principle['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

