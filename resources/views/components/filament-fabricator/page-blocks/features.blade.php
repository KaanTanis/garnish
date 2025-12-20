@aware(['page'])

{{-- Section 1: Yüksek Kaliteli Ham Maddeler --}}
<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5" data-feature-row>
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        08
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                {{-- Image left --}}
                <div class="lg:col-span-5">
                    <div class="relative aspect-[3/4] rounded-3xl overflow-hidden border border-white/10">
                        <img src="{{ asset('temp/sinitsel/1.jpeg') }}" alt="Temiz İçerik" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-orange-200 uppercase tracking-wider mb-2">
                                Temiz içerik
                            </div>
                            <p class="text-sm text-zinc-100">0% MDM, gerçek tavuk göğsü ile hazırlanan ürünler.</p>
                        </div>
                    </div>
                </div>

                {{-- Copy right --}}
                <div class="lg:col-span-7 lg:col-start-6">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-xs font-semibold uppercase tracking-wider mb-6">
                            Yüksek Kaliteli Ham Maddeler
                        </div>
                    </div>

                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                        <span class="block text-white">Güven veren içerik,</span>
                        <span class="block text-white">net ve açık etiket</span>
                    </h2>

                    <div class="inline-flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-zinc-200">
                            0% MDM
                        </span>
                        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-zinc-200">
                            Seçilmiş ham maddeler
                        </span>
                        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-zinc-200">
                            Doğallığı koruyan üretim
                        </span>
                    </div>

                    <div class="space-y-5 text-lg md:text-xl text-zinc-300 leading-relaxed">
                        <p>Ürünlerimizde yalnızca özenle seçilmiş yüksek kaliteli ham maddeler kullanırız.</p>
                        <p>Tavuk ürünlerimiz MDM (mekanik ayrılmış et) içermez; bunun yerine daha iyi doku, daha temiz içerik ve daha güvenilir bir lezzet sunan tavuk göğsü tercih edilir.</p>
                        <p>Her ürün, malzemenin doğallığını koruyan bir üretim yaklaşımıyla hazırlanır.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 2: Şef Dokunuşu --}}
<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5" data-feature-row>
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        09
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                {{-- Copy left --}}
                <div class="lg:col-span-7">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-xs font-semibold uppercase tracking-wider mb-6">
                            Şef Dokunuşu
                        </div>
                    </div>

                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                        <span class="block text-white">Evde, menüdeki o</span>
                        <span class="block text-white">"favori" lezzet</span>
                    </h2>

                    <div class="space-y-5 text-lg md:text-xl text-zinc-300 leading-relaxed">
                        <p>Her ürün, şeflerimizin özel tarifleri ile hazırlanır. Size sadece ürünlerimizi pişirmek kalır.</p>
                        <p>Bu sayede dışarıda yediğiniz o "restoran lezzetini" evinizde de aynı çıtırlık, aynı tat ve aynı keyifle bulursunuz.</p>
                    </div>
                </div>

                {{-- Image right --}}
                <div class="lg:col-span-5 lg:col-start-8">
                    <div class="relative aspect-[3/4] rounded-3xl overflow-hidden border border-white/10">
                        <img src="{{ asset('temp/sinitsel/2.jpg') }}" alt="Şef Dokunuşu" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                        
                        <div class="absolute top-6 left-6">
                            <div class="px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-orange-200 uppercase tracking-wider">
                                Şef dokunuşu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 3: Güvenli ve Özenli Üretim --}}
<section class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5" data-feature-row>
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        10
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">
                {{-- Content Left --}}
                <div class="lg:col-span-7">
                    <div class="mb-6">
                        <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-xs font-semibold uppercase tracking-wider mb-6">
                            Güvenli ve Özenli Üretim
                        </div>
                    </div>
                    
                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                        <span class="block text-white">Modern tesis,</span>
                        <span class="block text-white">izlenebilir süreçler</span>
                    </h2>

                    <div class="space-y-5 text-lg md:text-xl text-zinc-300 leading-relaxed mb-8">
                        <p>Modern otomasyon sistemleriyle donatılmış üretim tesisimizde; yüksek hijyen standartları, kesintisiz kalite kontrol süreçleri ve güvenli donuk zincir yönetimiyle üretim yapıyoruz.</p>
                        <p>Ürünlerimiz makinelerin sunduğu kalite gücüyle üretilirken, şef reçeteleri, özel kaplama teknikleri ve lezzet dengesi sayesinde artizan ruhunu ve ev yapımı tadını daima korur.</p>
                        <p class="text-xl md:text-2xl font-semibold text-white">
                            Sonuç: Her pakette aynı kalite, aynı lezzet ve aynı güven.
                        </p>
                    </div>
                </div>

                {{-- Images Right --}}
                <div class="lg:col-span-5 lg:col-start-8">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden border border-white/10">
                            <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                                <div class="text-center p-4">
                                    <div class="text-2xl mb-2">📸</div>
                                    <div class="text-zinc-400 text-xs">Tesis</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden border border-white/10">
                            <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                                <div class="text-center p-4">
                                    <div class="text-2xl mb-2">📸</div>
                                    <div class="text-zinc-400 text-xs">Tesis</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden border border-white/10">
                            <div class="h-full w-full bg-linear-to-br from-orange-500/20 to-amber-500/20 flex items-center justify-center">
                                <div class="text-center p-4">
                                    <div class="text-2xl mb-2">📸</div>
                                    <div class="text-zinc-400 text-xs">Tesis</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
