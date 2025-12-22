<form action="" class="{{ $classes }}" wire:submit="save">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

        {{-- Ad Soyad --}}
        <input
            type="text"
            wire:model="name"
            placeholder="@lang('Adınız')"
            @class([
                'w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500',
                'input-error' => $errors->has('name')
            ])
        />

        {{-- Telefon --}}
        <input
            type="text"
            wire:model="phone"
            placeholder="@lang('Telefon Numaranız')"
            @class([
                'w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500',
                'input-error' => $errors->has('phone')
            ])
        />

        {{-- Email --}}
        <input
            type="text"
            wire:model="email"
            placeholder="@lang('E-posta Adresiniz')"
            class="md:col-span-2 w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500 {{ $errors->has('email') ? 'input-error' : '' }}"
        />

        {{-- Mesaj --}}
        <textarea
            wire:model="message"
            rows="6"
            placeholder="@lang('Proje Detayları')"
            class="md:col-span-2 w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20 transition-all text-white placeholder-zinc-500 {{ $errors->has('message') ? 'textarea-error' : '' }}"
        ></textarea>

        {{-- GDPR + Button --}}
        <div class="md:col-span-2 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

            <label class="flex items-center gap-3 cursor-pointer select-none">
                <input
                    type="checkbox"
                    required
                    class="peer hidden"
                />

                <span
                    class="w-5 h-5 rounded-md
                        border border-orange-200
                        bg-orange-100
                        flex items-center justify-center
                        transition-all
                        peer-checked:bg-orange-500
                        peer-checked:border-orange-500
                        peer-focus:ring-2
                        peer-focus:ring-orange-500/30"
                >
                    <svg
                        class="w-3.5 h-3.5 text-white opacity-0 scale-75 transition-all
                            peer-checked:opacity-100
                            peer-checked:scale-100"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.4 7.4a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.1 3.1 6.7-6.7a1 1 0 0 1 1.4 0z"/>
                    </svg>
                </span>

                <span class="text-xs text-zinc-300 leading-snug">
                    <b onclick="privacyModal.showModal()" class="cursor-pointer underline">
                        @lang('Gizlilik Politikasını')
                    </b>
                    @lang('kabul ediyorum')
                </span>
            </label>


            <button type="submit" class="btn btn-primary w-full md:w-44">
                @lang('Gönder')
            </button>
        </div>

    </div>
</form>
