@props([
    'title' => 'Hikayemiz',
    'paragraph_1' => 'Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...',
    'paragraph_2' => 'Frochi olarak amacımız, tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.',
    'paragraph_3' => 'Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.',
])

@aware(['page'])

<section class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center">{{ $title }}</h2>
            <div class="space-y-6 text-lg text-zinc-400 leading-relaxed">
                <p>{{ $paragraph_1 }}</p>
                <p class="text-white font-semibold">{{ $paragraph_2 }}</p>
                <p>{{ $paragraph_3 }}</p>
            </div>
        </div>
    </div>
</section>

