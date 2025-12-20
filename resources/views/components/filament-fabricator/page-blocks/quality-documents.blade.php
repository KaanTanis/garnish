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

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-black to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">{{ $title }}</h2>
                <p class="text-xl text-zinc-400 max-w-2xl mx-auto">{{ $description }}</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($documents as $document)
                    <a href="{{ $document['url'] ?? '#' }}" target="_blank" class="group relative p-8 rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 hover:bg-white/10 transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-br from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/20 group-hover:to-transparent rounded-3xl transition-all duration-500"></div>
                        <div class="relative text-center">
                            <div class="w-20 h-20 rounded-2xl bg-orange-500/10 flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500">
                                @if(($document['icon'] ?? '') === 'certificate')
                                    <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                @elseif(($document['icon'] ?? '') === 'shield')
                                    <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                @else
                                    <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                @endif
                            </div>
                            <p class="text-lg font-semibold mb-2">{{ $document['title'] ?? 'Belge' }}</p>
                            <p class="text-sm text-zinc-400 group-hover:text-orange-400 transition-colors">İndir</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

