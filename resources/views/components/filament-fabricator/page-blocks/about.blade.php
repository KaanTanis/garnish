@aware(['page'])

<section id="about" class="py-16 md:py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto relative">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Big visual: happy bite moment --}}
                <div class="order-1 lg:order-2" data-about-visual>
                    <div class="relative overflow-hidden rounded-4xl border border-white/15 bg-white/5 backdrop-blur-sm shadow-[0_32px_100px_rgba(0,0,0,0.85)]">
                        <div class="aspect-5/6 sm:aspect-square bg-no-repeat bg-cover bg-center"
                                style="background-image: url('{{ asset('temp/paket/sinitzel1.jpg') }}');">
                        </div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/65 via-black/30 to-transparent"></div>

                        <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                            <div class="px-3 py-1.5 rounded-full bg-black/60 border border-white/20 text-[11px] font-semibold uppercase tracking-[0.18em] text-orange-100">
                                Mutlu çıtır an
                            </div>
                            <div class="px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-[11px] font-semibold text-orange-100 hidden sm:block">
                                FROCHI · Ev konforunda restoran keyfi
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="px-4 py-3 rounded-2xl bg-black/70 border border-white/15 flex items-center justify-between gap-3">
                                <div>
                                    <div class="text-xs text-orange-200/90 uppercase tracking-[0.16em] mb-1">Hayatın koşturmacası</div>
                                    <p class="text-sm text-zinc-100">
                                        Vakit az olduğunda bile, sofraya koyduğunuz her tabakta aynı güven ve lezzet.
                                    </p>
                                </div>
                                <div class="hidden sm:flex flex-col items-end gap-1 text-right">
                                    <span class="text-xs text-zinc-400">Hazırlık</span>
                                    <span class="text-sm font-semibold text-orange-200">Dakikalar içinde</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Copy --}}
                <div class="order-2 lg:order-1 text-lg text-zinc-400 leading-relaxed space-y-8">
                    <div>
                        <div class="inline-block mb-4 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-500 text-sm font-medium">
                            Hikayemiz
                        </div>
                        <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-4">
                            Hayatın koşturmacasında<br>
                            <span class="text-orange-500">yanınızdayız</span>
                        </h2>
                    </div>

                    <div class="space-y-5">
                        <p>
                            Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...
                        </p>
                        <p>
                            <span class="text-white font-semibold">Frochi olarak amacımız</span>, tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.
                        </p>
                        <p>
                            Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-3 gap-4 pt-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-orange-500"></div>
                            <div>
                                <div class="text-white text-sm font-semibold">Yüksek kaliteli ham maddeler</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-orange-500"></div>
                            <div>
                                <div class="text-white text-sm font-semibold">Şef tarifleri</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-orange-500"></div>
                            <div>
                                <div class="text-white text-sm font-semibold">Temiz içerik yaklaşımı</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
