@props([
    'badge_1' => 'FROCHI · Mutlu çıtır anlar',
    'badge_2' => 'Restoran kalitesinde tavuk',
    'badge_3' => 'Mutlu çıtır ısırık',
    'title_1' => 'Hayatın koşturmacasında',
    'title_2' => 'çıtır mutluluk molası',
    'subtitle' => 'Restoran lezzetini eve taşıyan, şef tarifleriyle hazırlanan premium tavuk ürünleri. Hızlı, güvenilir ve her lokmada aynı çıtırlık.',
    'image_text' => 'Tam göğüs, tam çıtırlık',
    'image_text_2' => 'Şef reçetesi · Temiz içerik · Modern üretim',
    'image_quality' => 'Tavuk göğsü · Düşük fire · Stabil performans'
])

<section id="hero" class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-zinc-950"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.08),transparent_45%),radial-gradient(circle_at_80%_0%,rgba(255,153,102,0.2),transparent_35%),radial-gradient(circle_at_60%_70%,rgba(255,255,255,0.04),transparent_40%)]"></div>
    <div class="pointer-events-none absolute inset-y-0 right-0 w-full sm:w-full scale-x-[-1] md:scale-0 lg:w-[55%] bg-no-repeat bg-cover bg-center blur-none 2xl:blur-3xl" style="background-image: url({{ asset('temp/hero.jpeg') }})"></div>
    <div class="absolute inset-0 bg-linear-to-r from-zinc-950/60 via-zinc-950/80 to-transparent"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none hidden lg:block">
        01
    </div>

    <div class="relative container mx-auto px-6 pt-28 pb-16 lg:py-28">
        <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-10 lg:gap-14 items-center">
            <div class="space-y-6 lg:space-y-8 max-w-3xl" data-hero-copy>
                <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                    <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm font-semibold text-orange-300">{{ $badge_1 }}</span>
                    <span class="px-4 py-2 rounded-full bg-orange-500/15 border border-orange-500/30 text-sm font-semibold text-orange-100">{{ $badge_2 }}</span>
                </div>

                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl xl:text-7xl font-black leading-tight tracking-tight">
                        <span class="block text-orange-200">{{ $title_1 }}</span>
                        <span class="block bg-linear-to-r from-white via-amber-100 to-orange-200 bg-clip-text text-transparent text-3xl sm:text-4xl xl:text-6xl">
                            {{ $title_2 }}
                        </span>
                    </h1>
                    <p class="text-lg sm:text-xl text-zinc-200/90 leading-relaxed max-w-2xl">
                        {{ $subtitle }}
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex flex-wrap gap-3 sm:gap-4" data-hero-ctas>
                        <a href="#products" class="group inline-flex items-center gap-2 px-7 py-4 rounded-full bg-linear-to-r from-orange-600 to-amber-500 font-semibold shadow-lg shadow-orange-900/40 transition-all duration-300 hover:scale-[1.02] hover:shadow-orange-700/40">
                            Ürünleri Keşfet
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="#garnish" class="inline-flex items-center gap-2 px-7 py-4 rounded-full bg-white/5 border border-white/10 font-semibold text-white/90 hover:bg-white/10 hover:border-orange-400/60 transition-all duration-300">
                            Garnish · Toplu Satış
                        </a>
                        <button type="button" data-scroll-target="#about" class="inline-flex items-center gap-2 px-5 py-4 rounded-full bg-transparent border border-white/10 font-semibold text-orange-200/80 hover:text-orange-100 hover:border-orange-400/60 transition-all duration-300">
                            ↓ Daha fazla keşfet
                        </button>
                    </div>

                    <div class="grid grid-cols-2 gap-3 max-w-md">
                        <div class="rounded-2xl bg-white/5 border border-white/10 px-4 py-3 backdrop-blur-xl">
                            <div class="text-xs text-zinc-200 uppercase tracking-[0.16em] mb-1">İçerik</div>
                            <div class="text-sm font-semibold text-orange-200">100% tavuk göğsü</div>
                            <div class="text-xs text-zinc-200">0% MDM · Temiz içerik</div>
                        </div>
                        <div class="rounded-2xl bg-white/5 border border-white/10 px-4 py-3 backdrop-blur-xl">
                            <div class="text-xs text-zinc-200 uppercase tracking-[0.16em] mb-1">Kullanım</div>
                            <div class="text-sm font-semibold text-orange-200">Dakikalar içinde hazır</div>
                            <div class="text-xs text-zinc-200">Ev & profesyonel mutfak uyumlu</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative hidden lg:block" data-hero-visual>
                <div class="absolute -top-12 -left-12 w-44 h-44 bg-orange-500/25 blur-3xl rounded-full"></div>
                <div class="absolute -bottom-16 -right-12 w-32 h-32 bg-amber-400/25 blur-3xl rounded-full"></div>

                <div class="relative overflow-hidden rounded-4xl border border-white/15 bg-white/5 backdrop-blur-sm shadow-[0_40px_120px_rgba(0,0,0,0.8)]">
                    <div class="aspect-4/5 bg-no-repeat bg-cover bg-center" style="background-image: url({{ asset('temp/hero.jpeg') }})">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/20 to-transparent"></div>
                        <div class="absolute top-6 left-6 px-4 py-2 rounded-full bg-white/15 text-xs font-semibold uppercase tracking-[0.15em] text-orange-100/90 border border-white/20">
                            {{ $badge_3 }}
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="p-4 rounded-2xl bg-black/50 border border-white/10 backdrop-blur">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <div class="text-sm text-orange-200/90 mb-1">FROCHI</div>
                                        <div class="text-xl font-semibold">{{ $image_text }}</div>
                                        <p class="text-sm text-zinc-300 mt-2">{{ $image_text_2 }}</p>
                                    </div>
                                    <div class="px-3 py-2 rounded-xl bg-orange-500/20 text-orange-100 text-xs font-semibold border border-orange-500/30">
                                        0% MDM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute -right-4 -bottom-10 w-52 rounded-3xl bg-white/10 border border-white/20 backdrop-blur-xl p-4 shadow-xl shadow-black/40" data-parallax data-speed="12">
                    <div class="text-5xl font-black text-orange-300 leading-none mb-1">100%</div>
                    <div class="text-xs text-zinc-300">{{ $image_quality }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
