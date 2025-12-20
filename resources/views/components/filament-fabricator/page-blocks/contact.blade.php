@props([
    'badge' => 'İletişim',
    'title' => 'Bize Ulaşın',
    'subtitle' => 'Sorularınız, işbirliği talepleriniz ve toplu satış başvurularınız için',
    'address' => "Kurbanlı Mah. OSB 1013 Sk. No: 5\nTarsus / Mersin",
    'email' => 'info@garnishgida.com',
    'phone' => '+90 XXX XXX XX XX',
])

@aware(['page'])

<section id="contact" class="relative min-h-screen flex items-center overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 bg-zinc-950"></div>
    
    {{-- Large decorative number --}}
    <div class="absolute top-1/2 right-0 -translate-y-1/2 text-[30rem] font-black text-white/5 leading-none select-none">
        07
    </div>
    
    <div class="relative container mx-auto px-6 py-20 md:py-32">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12 lg:mb-16">
                <div class="w-16 h-px bg-linear-to-r from-orange-500 to-transparent mb-6"></div>
                <div class="inline-block mb-6 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-orange-300 text-sm font-medium uppercase tracking-wider">
                    {{ $badge }}
                </div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block text-white">{{ $title }}</span>
                </h2>
                <p class="text-xl md:text-2xl text-zinc-300 max-w-2xl">
                    {{ $subtitle }}
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">
                {{-- Contact Info Left --}}
                <div class="lg:col-span-5">
                    <div class="space-y-6">
                        <div class="group">
                            <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2 text-white">Adres</h3>
                                    <p class="text-zinc-300 whitespace-pre-line leading-relaxed">{{ $address }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2 text-white">E-posta</h3>
                                    <a href="mailto:{{ $email }}" class="text-zinc-300 hover:text-orange-400 transition-colors">{{ $email }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex items-start gap-4 p-6 rounded-2xl border border-white/10 hover:border-orange-500/50 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2 text-white">Telefon</h3>
                                    <a href="tel:{{ $phone }}" class="text-zinc-300 hover:text-orange-400 transition-colors">{{ $phone }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form Right --}}
                <div class="lg:col-span-7 lg:col-start-6">
                    <div class="p-8 rounded-3xl border border-white/10 bg-linear-to-br from-white/5 to-white/0">
                        <h3 class="text-2xl font-bold mb-8 text-white">Mesaj Gönderin</h3>
                        {{-- <livewire:contact-form /> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
