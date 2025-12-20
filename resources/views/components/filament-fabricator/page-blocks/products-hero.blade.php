@props([
    'badge' => 'Ürünlerimiz',
    'title' => 'Premium Tavuk Ürünleri',
    'subtitle' => 'Kaliteli ham maddeler ve şef tarifleriyle hazırlanan premium tavuk ürünleri. Her ürün yüksek lezzet, dengeli beslenme ve pratik kullanım sunar.',
])

@aware(['page'])

<section class="py-16 md:py-32 relative min-h-[60vh] flex items-center">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-500 text-sm font-medium">
                {{ $badge }}
            </div>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold mb-6 leading-tight">
                {{ $title }}
            </h1>
            <p class="text-xl sm:text-2xl text-zinc-300 max-w-2xl mx-auto">
                {{ $subtitle }}
            </p>
        </div>
    </div>
</section>

