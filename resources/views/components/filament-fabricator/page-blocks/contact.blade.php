@aware(['page'])

<section id="contact" class="py-32 relative">
    <div class="absolute inset-0 bg-linear-to-b from-zinc-950 via-orange-950/10 to-zinc-950"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block mb-6 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-500 text-sm font-medium">
                    İletişim
                </div>
                <h2 class="text-5xl font-bold mb-6">Bize Ulaşın</h2>
                <p class="text-xl text-zinc-400">
                    Sorularınız, işbirliği talepleriniz ve toplu satış başvurularınız için
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                {{-- Contact Info --}}
                <div class="space-y-8">
                    <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Adres</h3>
                                <p class="text-zinc-400">Kurbanlı Mah. OSB 1013 Sk. No: 5<br>Tarsus / Mersin</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">E-posta</h3>
                                <p class="text-zinc-400">info@garnishgida.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Telefon</h3>
                                <p class="text-zinc-400">+90 XXX XXX XX XX</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="p-8 rounded-2xl bg-linear-to-br from-white/5 to-white/0 border border-white/10">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-zinc-400">Ad Soyad</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500" placeholder="Adınızı girin">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-zinc-400">E-posta</label>
                            <input type="email" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500" placeholder="E-posta adresiniz">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-zinc-400">Telefon</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500" placeholder="Telefon numaranız">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-zinc-400">Mesajınız</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500 resize-none" placeholder="Mesajınızı yazın..."></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-4 bg-linear-to-r from-orange-600 to-amber-600 rounded-xl font-semibold hover:shadow-2xl hover:shadow-orange-500/50 transition-all duration-300 hover:scale-105">
                            Gönder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
