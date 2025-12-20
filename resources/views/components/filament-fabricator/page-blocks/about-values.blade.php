@props([
    'title' => 'Değerlerimiz',
    'values' => [
        ['title' => 'Yüksek kaliteli ham maddeler', 'description' => 'Özenle seçilmiş, doğal içerikler'],
        ['title' => 'Şef tarifleri', 'description' => 'Restoran kalitesinde özel reçeteler'],
        ['title' => 'Temiz içerik yaklaşımı', 'description' => 'Şeffaf ve güvenilir üretim'],
    ],
])

@aware(['page'])

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-black to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-center">{{ $title }}</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($values as $value)
                    <div class="group relative p-8 rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-br from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/10 group-hover:to-amber-500/10 rounded-3xl transition-all duration-500"></div>
                        <div class="relative">
                            <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">{{ $value['title'] }}</h3>
                            <p class="text-zinc-400 leading-relaxed">{{ $value['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

