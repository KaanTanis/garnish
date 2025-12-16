@aware(['page'])

<section id="products" class="py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block mb-6 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-500 text-sm font-medium">
                Ürün Gamı
            </div>
            <h2 class="text-5xl md:text-7xl font-bold mb-6">Ürünlerimiz</h2>
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto">
                Kaliteli ham maddeler ve şef tarifleriyle hazırlanan premium tavuk ürünleri
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            {{-- Tenders --}}
            <div class="group relative overflow-hidden rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                <div class="aspect-square bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                    <div class="text-8xl font-black text-white/10">TENDERS</div>
                </div>
                <div class="p-8">
                    <h3 class="text-3xl font-bold mb-4">Tenders</h3>
                    <p class="text-zinc-400 text-lg">
                        Çıtır doku, sulu iç yapı, dengeli baharat. Her lokmada restoran kalitesi.
                    </p>
                </div>
                <div class="absolute inset-0 bg-linear-to-t from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/20 group-hover:to-transparent transition-all duration-500 pointer-events-none"></div>
            </div>

            {{-- Schnitzel --}}
            <div class="group relative overflow-hidden rounded-3xl bg-linear-to-br from-white/5 to-white/0 border border-white/10 hover:border-orange-500/50 transition-all duration-500">
                <div class="aspect-square bg-linear-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center">
                    <div class="text-7xl font-black text-white/10">ŞİNİTZEL</div>
                </div>
                <div class="p-8">
                    <h3 class="text-3xl font-bold mb-4">Şinitzel</h3>
                    <p class="text-zinc-400 text-lg">
                        Kaliteli kaplama, gerçekçi doku, doyurucu lezzet. Premium şef reçetesi.
                    </p>
                </div>
                <div class="absolute inset-0 bg-linear-to-t from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/20 group-hover:to-transparent transition-all duration-500 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>
