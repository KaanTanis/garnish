@props([
    'badge' => 'Toplu Satış',
    'title' => 'GARNISH',
    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Tavuk Ürünleri',
    'description' => 'Restoran, kafe, otel ve toplu yemek hizmeti sunan mutfaklara; yüksek performans, devamlı kalite ve maliyet avantajı sağlar.',
])

@aware(['page'])

<section class="py-16 md:py-32 relative min-h-[60vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-orange-600 via-amber-600 to-orange-700"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjEiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-30"></div>
    <div class="relative container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <div class="inline-block mb-6 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-sm font-medium">
                {{ $badge }}
            </div>
            <div class="text-6xl md:text-7xl font-black mb-6 text-white">{{ $title }}</div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">{{ $subtitle }}</h2>
            <p class="text-xl mb-12 opacity-90 leading-relaxed text-white">
                {{ $description }}
            </p>
        </div>
    </div>
</section>

