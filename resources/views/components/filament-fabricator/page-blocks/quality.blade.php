@props([
    'title' => 'Kalite & Güven',
    'description' => 'Kalitemizin temeli: temiz içerik, yüksek hijyen, izlenebilir üretim ve şeffaf süreçler. Gıda güvenliği standartlarına bağlı kalarak her ürünün aynı kaliteyi sunmasını sağlarız.',
    'documents' => [
        ['title' => 'Kalite Belgesi', 'url' => '/belgeler/belge-1.pdf'],
        ['title' => 'Hijyen Belgesi', 'url' => '/belgeler/belge-2.pdf'],
        ['title' => 'ISO Sertifikası', 'url' => '/belgeler/belge-3.pdf'],
    ],
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        06
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12 lg:mb-16 text-center">
                <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mx-auto mb-6"></div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
                <p class="text-xl md:text-2xl text-zinc-300 max-w-3xl mx-auto">
                    {{ $description }}
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12 max-w-5xl mx-auto">
                @if(!empty($documents))
                    @foreach($documents as $document)
                        <a href="{{ $document['url'] ?? '#' }}" target="_blank" class="group relative p-8 rounded-3xl border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                            <div class="w-16 h-16 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">{{ $document['title'] ?? 'Belge' }}</h3>
                            <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir →</p>
                        </a>
                    @endforeach
                @else
                    <a href="/belgeler/belge-1.pdf" target="_blank" class="group relative p-8 rounded-3xl border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                        <div class="w-16 h-16 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Kalite Belgesi</h3>
                        <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir →</p>
                    </a>
                    <a href="/belgeler/belge-2.pdf" target="_blank" class="group relative p-8 rounded-3xl border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                        <div class="w-16 h-16 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Hijyen Belgesi</h3>
                        <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir →</p>
                    </a>
                    <a href="/belgeler/belge-3.pdf" target="_blank" class="group relative p-8 rounded-3xl border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                        <div class="w-16 h-16 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">ISO Sertifikası</h3>
                        <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir →</p>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
