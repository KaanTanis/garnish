@props([
    'title' => 'FROCHI → GARNISH',
    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Çözümler',
    'description' => 'Restoran, kafe, otel ve catering mutfakları için özel geliştirilen Garnish markamız. Gerçek tavuk göğsü, düşük fire, stabil pişirme performansı ve premium kaplama teknolojisi.',
    'stat_1_value' => 'Yüksek',
    'stat_1_label' => 'Performans',
    'stat_2_value' => 'Stabil',
    'stat_2_label' => 'Kalite',
    'stat_3_value' => 'Düşük',
    'stat_3_label' => 'Fire Oranı',
    'cta_text' => 'Toplu Satış Bilgi Al',
    'cta_link' => '#contact',
])

@aware(['page'])

<section id="garnish" class="py-16 md:py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-orange-600 via-amber-600 to-orange-700"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjEiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-30"></div>
    
    <div class="relative container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <div class="text-7xl font-black mb-6">{{ $title }}</div>
            <h3 class="text-3xl md:text-4xl font-bold mb-6">{{ $subtitle }}</h3>
            <p class="text-xl mb-12 opacity-90 leading-relaxed">
                {{ $description }}
            </p>

            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-2">{{ $stat_1_value }}</div>
                    <div class="text-sm opacity-80">{{ $stat_1_label }}</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-2">{{ $stat_2_value }}</div>
                    <div class="text-sm opacity-80">{{ $stat_2_label }}</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold mb-2">{{ $stat_3_value }}</div>
                    <div class="text-sm opacity-80">{{ $stat_3_label }}</div>
                </div>
            </div>

            <a href="{{ $cta_link }}" class="inline-block px-10 py-5 bg-zinc-950 text-white rounded-full font-bold text-lg hover:scale-105 hover:shadow-2xl hover:shadow-black/50 transition-all duration-300">
                {{ $cta_text }}
            </a>
        </div>
    </div>
</section>
