@props([
    'title' => 'Belgelerimiz',
    'description' => 'Kalitemizin ve güvenilirliğimizin kanıtı olan belgelerimiz',
    'documents' => [
        ['title' => 'Kalite Belgesi', 'url' => '/belgeler/belge-1.pdf', 'icon' => 'certificate'],
        ['title' => 'Hijyen Belgesi', 'url' => '/belgeler/belge-2.pdf', 'icon' => 'shield'],
        ['title' => 'ISO Sertifikası', 'url' => '/belgeler/belge-3.pdf', 'icon' => 'star'],
    ],
])

@aware(['page'])

<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        03
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12 lg:mb-16">
                <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-4 leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
                <p class="text-xl md:text-2xl text-zinc-400 max-w-2xl">{{ $description }}</p>
            </div>
            
            {{-- Documents - Horizontal Layout --}}
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                @foreach($documents as $index => $document)
                    <a href="{{ $document['url'] ?? '#' }}" target="_blank" class="group relative">
                        <div class="relative p-8 rounded-3xl border border-white/10 bg-linear-to-br from-white/5 to-white/0 hover:border-orange-500/50 transition-all duration-500">
                            <div class="mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                                    @if(($document['icon'] ?? '') === 'certificate')
                                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    @elseif(($document['icon'] ?? '') === 'shield')
                                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    @endif
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">{{ $document['title'] ?? 'Belge' }}</h3>
                                <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir →</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

