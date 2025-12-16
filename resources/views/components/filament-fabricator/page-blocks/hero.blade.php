<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-orange-600/20 via-zinc-950 to-amber-600/20"></div>
    {{-- <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjAzIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div> --}}
    <div class="absolute inset-0 bg-no-repeat bg-fixed bg-center opacity-60"
        style="background-image: url({{ asset('temp/hero.jpeg') }})"
    ></div>
    <div class="absolute inset-0 bg-linear-140 from-black/80 via-transparent to-black/70"></div>
    
    <div class="relative container mx-auto px-6 text-center">
        <div class="inline-block mb-6 px-4 py-2 rounded-full bg-orange-500/30 border border-orange-400/60 text-amber-200 text-sm font-medium">
            Premium Tavuk Ürünleri
        </div>
        <h1 class="text-7xl md:text-9xl font-black mb-8 tracking-tight">
            <span class="bg-linear-to-r from-white via-orange-200 to-amber-300 bg-clip-text text-transparent">
                FROCHI
            </span>
        </h1>
        <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto mb-12 leading-relaxed">
            Restoran lezzetini evinize taşıyan, şef tarifleriyle hazırlanan premium tavuk ürünleri
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#products" class="group px-8 py-4 bg-linear-to-r from-orange-600 to-amber-600 rounded-full font-semibold hover:shadow-2xl hover:shadow-orange-500/50 transition-all duration-300 hover:scale-105">
                Ürünleri Keşfet
                <span class="inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
            </a>
            <a href="#about" class="px-8 py-4 bg-white/5 border border-white/10 rounded-full font-semibold hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
                Hakkımızda
            </a>
        </div>
    </div>

    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/20 rounded-full p-1">
            <div class="w-1.5 h-3 bg-orange-500 rounded-full mx-auto animate-pulse"></div>
        </div>
    </div>
</section>
