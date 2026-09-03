<footer class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container rounded-t-3xl relative mt-24 overflow-hidden">
    <!-- Aksen dekoratif -->
    <div class="absolute -top-24 -right-24 w-72 h-72 rounded-full bg-secondary-fixed/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-10 pt-16 pb-10 relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-10 md:gap-8">

            <!-- Brand & Deskripsi -->
            <div class="md:col-span-4 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/umum/Logo Kab Magelang 2.png') }}" alt="Logo Kabupaten Magelang" class="w-10 h-10 object-contain">
                    <h3 class="font-headline-lg text-headline-lg text-on-primary dark:text-on-primary-container font-extrabold leading-tight">Desa<br class="hidden sm:block"> Sumberarum</h3>
                </div>
                <p class="font-body-md text-body-md text-on-primary/70 dark:text-on-primary-container/70 max-w-xs">
                    WebGIS Pelayanan Desa Sumberarum, Kabupaten Magelang — menyajikan informasi spasial dan layanan publik desa secara digital.
                </p>
                <div class="flex items-center gap-3 mt-1">
                    <a href="#" aria-label="Instagram" class="flex items-center justify-center w-10 h-10 rounded-full bg-on-primary/10 hover:bg-secondary-fixed hover:text-primary transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                            <path d="M12 2.2c3.2 0 3.6 0 4.9.07 1.2.06 2 .25 2.4.42.6.24 1 .53 1.5 1 .5.5.8 1 1 1.5.17.4.36 1.2.42 2.4.07 1.3.07 1.7.07 4.9s0 3.6-.07 4.9c-.06 1.2-.25 2-.42 2.4-.24.6-.53 1-1 1.5-.5.5-1 .8-1.5 1-.4.17-1.2.36-2.4.42-1.3.07-1.7.07-4.9.07s-3.6 0-4.9-.07c-1.2-.06-2-.25-2.4-.42-.6-.24-1-.53-1.5-1-.5-.5-.8-1-1-1.5-.17-.4-.36-1.2-.42-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.07-4.9c.06-1.2.25-2 .42-2.4.24-.6.53-1 1-1.5.5-.5 1-.8 1.5-1 .4-.17 1.2-.36 2.4-.42C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.15 0-3.5 0-4.75.07-.98.04-1.5.2-1.86.34-.47.18-.8.4-1.15.75-.35.35-.57.68-.75 1.15-.14.36-.3.88-.34 1.86C3.08 8.5 3.08 8.85 3.08 12s0 3.5.07 4.75c.04.98.2 1.5.34 1.86.18.47.4.8.75 1.15.35.35.68.57 1.15.75.36.14.88.3 1.86.34 1.25.07 1.6.07 4.75.07s3.5 0 4.75-.07c.98-.04 1.5-.2 1.86-.34.47-.18.8-.4 1.15-.75.35-.35.57-.68.75-1.15.14-.36.3-.88.34-1.86.07-1.25.07-1.6.07-4.75s0-3.5-.07-4.75c-.04-.98-.2-1.5-.34-1.86-.18-.47-.4-.8-.75-1.15-.35-.35-.68-.57-1.15-.75-.36-.14-.88-.3-1.86-.34C15.5 4 15.15 4 12 4zm0 3.8a4.2 4.2 0 110 8.4 4.2 4.2 0 010-8.4zm0 1.8a2.4 2.4 0 100 4.8 2.4 2.4 0 000-4.8zm4.4-2.6a1 1 0 110 2 1 1 0 010-2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tautan Cepat -->
            <div class="md:col-span-3 flex flex-col gap-3">
                <h4 class="font-headline-md text-headline-md text-tertiary-fixed dark:text-tertiary-fixed-dim font-bold mb-1">Tautan Cepat</h4>
                <a href="{{ url('/') }}" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit">Beranda</a>
                <a href="{{ url('/infografis') }}" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit">Infografis</a>
                <a href="{{ url('/petadesa') }}" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit">Peta Desa</a>
                <a href="{{ url('/jelajah-desa') }}" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit">Jelajah Desa</a>
                <a href="{{ url('/unduh') }}" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit">Unduh Peta</a>
            </div>

            <!-- Tautan Penting -->
            <div class="md:col-span-2 flex flex-col gap-3">
                <h4 class="font-headline-md text-headline-md text-tertiary-fixed dark:text-tertiary-fixed-dim font-bold mb-1">Tautan Penting</h4>
                <a href="#" target="_blank" rel="noopener" class="font-body-md text-body-md text-on-primary/75 hover:text-secondary-fixed transition-all w-fit flex items-center gap-1">
                    Website Kab. Magelang
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                </a>
            </div>

            <!-- Kontak -->
            <div class="md:col-span-3 flex flex-col gap-3">
                <h4 class="font-headline-md text-headline-md text-tertiary-fixed dark:text-tertiary-fixed-dim font-bold mb-1">Kontak</h4>
                <div class="flex items-start gap-2 font-body-md text-body-md text-on-primary/75">
                    <span class="material-symbols-outlined text-lg mt-0.5">location_on</span>
                    <span>Desa Sumberarum, Kec. Tempuran, Kab. Magelang</span>
                </div>
                <div class="flex items-center gap-2 font-body-md text-body-md text-on-primary/75">
                    <span class="material-symbols-outlined text-lg">mail</span>
                    <span>desasumberarum@example.go.id</span>
                </div>
                <div class="flex items-center gap-2 font-body-md text-body-md text-on-primary/75">
                    <span class="material-symbols-outlined text-lg">call</span>
                    <span>(+62) 857-4392-8744</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom bar: kerjasama & copyright -->
    <div class="border-t border-on-primary/15 relative z-10">
        <div class="max-w-7xl mx-auto px-6 md:px-10 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-6">
                    <span class="font-body-md text-sm text-on-primary/60 whitespace-nowrap">Kerjasama dengan</span>
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/umum/Logo Kab Magelang 2.png') }}" alt="Kabupaten Magelang" class="h-9 w-auto object-contain opacity-90">
                        <img src="{{ asset('assets/images/umum/android-chrome-512x512 1.png') }}" alt="UGM" class="h-9 w-auto object-contain opacity-90">
                        <img src="{{ asset('assets/images/umum/Layer 5 1.png') }}" alt="DTK" class="h-9 w-auto object-contain opacity-90">
                    </div>
                </div>

                <div class="flex flex-col md:items-end gap-1 text-center md:text-right">
                    <p class="text-sm text-on-primary/60">WebGIS Pelayanan Desa &copy; Desa Sumberarum {{ date('Y') }}</p>
                    <p class="text-sm text-on-primary/60">Prodi Sistem Informasi Geografis</p>
                </div>
            </div>
        </div>
    </div>
</footer>
