@extends('layouts.app')

@section('content')
    <x-navbar />

    <section class="relative h-[819px] w-full flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                <source src="{{ asset('assets/videos/Landing_page.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-6 max-w-4xl mx-auto flex flex-col items-center justify-center gap-6 py-12">

            <!-- Judul Hero (Ukuran Proposional & Elegant Gradient) -->
            <h1
                class="font-display-lg text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-b from-white via-tertiary-fixed to-tertiary-fixed/80 drop-shadow-lg leading-tight">
                Desa Sumberarum
            </h1>

            <!-- Subtitle Minimalis -->
            <p class="text-sm sm:text-base md:text-lg text-white/80 max-w-xl font-normal leading-relaxed drop-shadow-sm">
                Sistem Informasi Geografis & Eksplorasi Potensi Wilayah
            </p>

            <!-- Tombol Aesthetic Glassmorphism -->
            <button
                class="group relative inline-flex items-center gap-2.5 bg-white/15 hover:bg-white/25 active:scale-95 text-white border border-white/30 backdrop-blur-md px-7 py-3.5 rounded-full font-semibold text-sm md:text-base transition-all duration-300 shadow-lg hover:shadow-emerald-500/10 hover:border-white/50">
                <span>Jelajahi Desa</span>
                <span
                    class="material-symbols-outlined text-xl transition-transform duration-300 group-hover:translate-y-1 text-emerald-300">
                    expand_more
                </span>
            </button>
        </div>
    </section>

    <section class="bg-primary-container text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="profil">
        <div class="max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">

                <div class="md:col-span-7 relative flex flex-col gap-6">
                    <svg class="absolute -top-6 -left-6 md:-left-8 w-24 h-24 md:w-32 md:h-32 text-tertiary-fixed/15 pointer-events-none select-none -z-0"
                        fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>

                    <div class="relative z-10 flex flex-col items-center gap-6">
                        <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed text-center">Sambutan Kepala Desa
                        </h2>
                        <p class="font-body-lg text-body-lg text-on-primary/90 leading-relaxed text-justify w-full">
                            Assalamu'alaikum Warahmatullahi Wabarakaatuh
                            <br><br>
                            Segala puji dan syukur marilah kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, atas
                            limpahan rahmat dan karunia Nya sehingga kita dapat terus menjalankan amanah dalam
                            penyelenggaraan pemerintahan, pembangunan, dan pelayanan kepada masyarakat Desa Sumberarum.
                            Dalam upaya mewujudkan pelayanan publik yang semakin baik, kami menyadari bahwa masih diperlukan
                            berbagai langkah pengembangan, termasuk menghadirkan sistem informasi yang terpadu sebagai
                            jembatan penyampaian informasi secara cepat, terbuka, dan mudah diakses oleh seluruh masyarakat.
                            <br><br>
                            Melalui Website Pemerintah Desa Sumberarum, kami berharap tercipta ruang informasi yang mampu
                            mempererat komunikasi antara pemerintah desa dan masyarakat, sekaligus menjadi sarana
                            partisipasi bersama dalam mendukung pembangunan desa yang sejalan dengan amanat Undang Undang
                            Nomor 6 Tahun 2014 tentang Desa. Kami juga mengharapkan kritik dan saran yang membangun demi
                            pengembangan website ini agar dapat terus memberikan informasi yang bermanfaat dan
                            berkesinambungan bagi seluruh warga. Semoga Allah SWT senantiasa memberikan kemudahan dan
                            keberkahan dalam setiap ikhtiar kita. Aamiin.
                            <br><br>
                            Wassalamu'alaikum Warahmatullahi Wabarakaatuh
                        </p>
                    </div>
                </div>

                <div class="md:col-span-5 flex flex-col items-center justify-center mt-12 md:mt-0">
                    <div
                        class="relative w-64 h-64 md:w-80 md:h-80 rounded-full border-4 border-tertiary-fixed overflow-hidden shadow-2xl group">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ9MHOhNPfG1Sxi-y4qBG11GZN4d9GTt4z6MbbntXR9_KfrdAzIxi8ouv9v1PuudxQ5-s8i0tki-5FEQJaDWfWxYPt0SLDM25NIdMIsGaN__JiIStnbI3QK70X7MQkxEXxQVpI7HwLEhF6tk2LC4ja1TrIuPWpmIoF2neKoYAXQh5ZrCNyK5bFQ4kszUC0id1iFn0PtC-DhiFbBscHgdY3mDAuHDEwxtljdWENh0mqxZ-KBBjBm3VyIRkjtLTPmurQ_Kvhrk1YglDs"
                            alt="Muhzen Fanani Kepala Desa Sumberarum" />
                    </div>
                    <div
                        class="bg-surface/10 backdrop-blur-md border border-white/20 mt-6 px-8 py-3.5 rounded-xl text-center shadow-lg">
                        <h3 class="font-bold text-lg md:text-xl text-tertiary-fixed tracking-wide">Muhzen Fanani</h3>
                        <p class="font-medium text-xs md:text-sm text-on-primary/80 mt-0.5">Kepala Desa Sumberarum</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION STATISTIK DESA (Di antara Profil Desa dan Peta Spasial) -->
    <section
        class="bg-gradient-to-b from-primary-container via-primary to-primary text-on-primary py-16 px-margin-mobile md:px-gutter relative z-10"
        id="statistik-desa">
        <div class="max-w-container-max mx-auto">
            <!-- Header Section Statistik Minimalis -->
            <div class="text-center max-w-xl mx-auto mb-10 md:mb-12">
                <div
                    class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 text-tertiary-fixed text-xs font-semibold uppercase tracking-wider mb-3 backdrop-blur-sm shadow-sm">
                    <span class="material-symbols-outlined text-sm">analytics</span>
                    <span>Sekilas Data Desa</span>
                </div>
                <h2 class="font-headline-lg text-2xl sm:text-3xl md:text-4xl font-bold text-tertiary-fixed">
                    Statistik Desa Sumberarum
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Kartu 1: Populasi Penduduk (Ikon Pengguna) -->
                <div
                    class="stat-card-item bg-white/5 hover:bg-white/10 backdrop-blur-md border border-white/10 hover:border-tertiary-fixed/40 transition-all duration-300 rounded-2xl p-6 md:p-8 flex flex-col items-center text-center shadow-lg hover:shadow-emerald-500/10 group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-tertiary-fixed/10 border border-tertiary-fixed/20 flex items-center justify-center mb-5 text-tertiary-fixed group-hover:scale-110 group-hover:bg-tertiary-fixed/20 transition-all duration-300 shadow-inner">
                        <span class="material-symbols-outlined text-3xl">groups</span>
                    </div>
                    <div
                        class="font-display-lg text-3xl sm:text-4xl md:text-5xl font-extrabold text-tertiary-fixed tracking-tight">
                        <span class="stat-counter" data-target="15000" data-suffix="+">0+</span>
                    </div>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-on-primary/75 mt-2">
                        Populasi Penduduk
                    </p>
                    <div
                        class="w-10 h-0.5 bg-tertiary-fixed/30 rounded-full mt-4 group-hover:w-16 group-hover:bg-tertiary-fixed transition-all duration-300">
                    </div>
                </div>

                <!-- Kartu 2: Luas Wilayah (Ikon Luas Area) -->
                <div
                    class="stat-card-item bg-white/5 hover:bg-white/10 backdrop-blur-md border border-white/10 hover:border-tertiary-fixed/40 transition-all duration-300 rounded-2xl p-6 md:p-8 flex flex-col items-center text-center shadow-lg hover:shadow-emerald-500/10 group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-tertiary-fixed/10 border border-tertiary-fixed/20 flex items-center justify-center mb-5 text-tertiary-fixed group-hover:scale-110 group-hover:bg-tertiary-fixed/20 transition-all duration-300 shadow-inner">
                        <span class="material-symbols-outlined text-3xl">crop_free</span>
                    </div>
                    <div
                        class="font-display-lg text-3xl sm:text-4xl md:text-5xl font-extrabold text-tertiary-fixed tracking-tight">
                        <span class="stat-counter" data-target="445" data-suffix=" Hektare">0 Hektare</span>
                    </div>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-on-primary/75 mt-2">
                        Luas Wilayah
                    </p>
                    <div
                        class="w-10 h-0.5 bg-tertiary-fixed/30 rounded-full mt-4 group-hover:w-16 group-hover:bg-tertiary-fixed transition-all duration-300">
                    </div>
                </div>

                <!-- Kartu 3: Total Dusun (Ikon Pemukiman/Rumah) -->
                <div
                    class="stat-card-item bg-white/5 hover:bg-white/10 backdrop-blur-md border border-white/10 hover:border-tertiary-fixed/40 transition-all duration-300 rounded-2xl p-6 md:p-8 flex flex-col items-center text-center shadow-lg hover:shadow-emerald-500/10 group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-tertiary-fixed/10 border border-tertiary-fixed/20 flex items-center justify-center mb-5 text-tertiary-fixed group-hover:scale-110 group-hover:bg-tertiary-fixed/20 transition-all duration-300 shadow-inner">
                        <span class="material-symbols-outlined text-3xl">holiday_village</span>
                    </div>
                    <div
                        class="font-display-lg text-3xl sm:text-4xl md:text-5xl font-extrabold text-tertiary-fixed tracking-tight">
                        <span class="stat-counter" data-target="15" data-suffix=" Dusun">0 Dusun</span>
                    </div>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-on-primary/75 mt-2">
                        Total Dusun
                    </p>
                    <div
                        class="w-10 h-0.5 bg-tertiary-fixed/30 rounded-full mt-4 group-hover:w-16 group-hover:bg-tertiary-fixed transition-all duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary text-on-primary py-16 px-margin-mobile md:px-gutter">
        <div
            class="max-w-container-max mx-auto bg-white/5 border border-white/10 rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 backdrop-blur-sm">
            <div class="flex flex-col gap-3 max-w-2xl">
                <div class="flex items-center gap-2 text-tertiary-fixed font-bold">
                    <span class="material-symbols-outlined">map</span>
                    <span class="uppercase tracking-wider text-sm">WebGIS Desa</span>
                </div>
                <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold">Peta Spasial Desa Sumberarum
                </h2>
                <p class="font-body-lg text-on-primary/80">
                    Jelajahi pemetaan batas wilayah, fasilitas umum, serta objek penting desa secara interaktif melalui
                    halaman peta khusus kami.
                </p>
            </div>
            <a href="{{ url('/petadesa') }}"
                class="bg-tertiary-fixed text-on-tertiary-fixed px-8 py-4 rounded-full font-label-lg font-bold flex items-center gap-3 hover:bg-white transition-all shadow-lg shrink-0">
                <span>Buka Peta Interaktif</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </section>

    <!-- SECTION SEJARAH DESA (2 Kolom 60:40 di Desktop, Max-width 65ch Teks, Placeholder Lanskap rounded-2xl shadow-lg) -->
    <section class="bg-primary text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="sejarah">
        <div class="max-w-container-max mx-auto">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-center justify-between">
                <!-- Kolom Kiri: 60% Teks Sejarah dengan max-w-[65ch] dan jarak antar paragraf yang lega -->
                <div id="sejarah-text" class="w-full lg:w-[60%] flex flex-col gap-6 max-w-[65ch]">
                    <div class="flex items-center gap-2 text-tertiary-fixed">
                        <span class="material-symbols-outlined text-xl">history_edu</span>
                        <span class="text-xs uppercase tracking-widest font-bold">Asal Usul & Wilayah</span>
                    </div>
                    <h2 class="font-headline-xl text-3xl sm:text-4xl md:text-5xl font-bold text-tertiary-fixed">
                        Sejarah Desa
                    </h2>

                    <div
                        class="space-y-4 font-body-lg text-body-lg text-on-primary/90 leading-relaxed text-justify md:text-left">
                        <p>
                            Desa Sumberarum merupakan penggabungan dari tiga desa, yaitu Desa Dimajar, Sumber, dan Sadegan.
                            Dinamakan Sumberarum karena terdapat sumber mata air di salah satu dusun di Desa Sumberarum,
                            tepatnya di Dusun Teluk. Diharapkan Desa Sumberarum ke depan akan menjadi baik dan lebih baik
                            sehingga akan senantiasa harum sesuai dengan namanya, maka terangkai nama Sumberarum.
                        </p>
                        <p>
                            Desa Sumberarum merupakan salah satu desa di Kecamatan Tempuran, Kabupaten Magelang, Provinsi
                            Jawa Tengah, yang memiliki luas wilayah 445,565 hektare dan secara geografis terletak pada
                            koordinat 7°46'33" hingga 7°50'00" LS serta 110°39'12" BT. Wilayah desa ini berbatasan dengan
                            Desa Tempurejo di sebelah utara, Kecamatan Mertoyudan di sebelah timur, Desa Ringinanom di
                            sebelah selatan, dan Desa Sidoagung di sebelah barat.
                        </p>
                        <p>
                            Secara administratif, Desa Sumberarum terbagi menjadi 15 dusun, 17 Rukun Warga, dan 57 Rukun
                            Tetangga, dengan tipologi kawasan yang meliputi area persawahan, perladangan, kerajinan dan
                            industri kecil, serta sektor jasa dan perdagangan.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: 40% Placeholder Gambar / Foto Lanskap Desa (rounded-2xl, shadow-lg) -->
                <div id="sejarah-image" class="w-full lg:w-[40%] flex justify-center">
                    <div
                        class="relative w-full max-w-lg lg:max-w-none group overflow-hidden rounded-2xl shadow-lg border border-white/10 bg-primary-container aspect-[4/3] sm:aspect-[16/11]">
                        <!-- Foto Lanskap Desa -->
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1000&q=80"
                            alt="Lanskap Desa Sumberarum"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>

                        <!-- Overlay Keterangan Lanskap -->
                        <div
                            class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20">
                            <div
                                class="flex items-center gap-2 text-tertiary-fixed text-xs font-bold uppercase tracking-wider mb-1">
                                <span class="material-symbols-outlined text-base">landscape</span>
                                <span>Lanskap Desa Sumberarum</span>
                            </div>
                            <p class="text-white text-xs sm:text-sm font-medium">Panorama Alam, Persawahan & Keindahan
                                Wilayah Tempuran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary-container text-on-primary relative w-full h-[300vh]" id="destinasi-wrapper">
        <div class="sticky top-0 h-screen w-full overflow-hidden flex flex-col pt-20 pb-10" id="destinasi-pinned">

            <div
                class="px-margin-mobile md:px-gutter max-w-container-max mx-auto w-full z-50 absolute top-24 left-1/2 -translate-x-1/2 text-center md:text-left pointer-events-none">
                <h2
                    class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold pointer-events-auto drop-shadow-md">
                    Destinasi Wisata</h2>
                <p class="font-body-lg text-body-lg text-on-primary/90 mt-4 max-w-2xl mx-auto md:mx-0 pointer-events-auto">
                    Jelajahi keindahan tersembunyi yang ditawarkan oleh Desa Sumberarum melalui tur virtual vertikal ini.
                </p>
            </div>

            <div class="relative w-full h-full flex items-center justify-center mt-12 md:mt-16" id="cards-container">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="destinasi-card absolute top-1/2 left-1/2 w-[280px] md:w-[340px]"
                        id="destinasi-card-{{ $i }}">
                        <div
                            class="h-full flex flex-col relative bg-[#FFF9E6] rounded-[1.5rem] p-5 shadow-2xl border border-white/20">
                            <svg class="sparkle absolute -top-8 -right-8 w-14 h-14 text-[#FFF9E6] z-30 drop-shadow-lg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                            </svg>
                            <svg class="sparkle absolute -bottom-8 -left-8 w-16 h-16 text-[#FFF9E6] z-30 drop-shadow-lg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                            </svg>

                            <div
                                class="rounded-xl overflow-hidden h-[280px] md:h-[320px] w-full shrink-0 shadow-inner relative bg-black/10">
                                <img src="https://picsum.photos/seed/wisatabaru{{ $i }}/600/500"
                                    alt="Wisata {{ $i }}"
                                    class="w-full h-full object-cover pointer-events-none">
                            </div>
                            <div class="px-2 pb-2 pt-4 text-primary">
                                <h3 class="font-headline-lg text-[22px] font-bold mb-2">Destinasi Wisata
                                    {{ $i }}
                                </h3>
                                <p class="font-body-md text-sm text-primary/80">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="absolute right-6 top-1/2 -translate-y-1/2 flex flex-col gap-4 z-50">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="w-3 h-3 rounded-full bg-[#FFF9E6]/30 dest-dot" id="dest-dot-{{ $i }}"></div>
                @endfor
            </div>
        </div>
    </section>
    <x-footer />
@endsection

@push('scripts')
    <style>
        .stat-card-item {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .stat-card-item.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Counter & Fade-in Animation for Statistik Desa
            const statSection = document.getElementById('statistik-desa');
            if (statSection) {
                const cards = statSection.querySelectorAll('.stat-card-item');
                let animated = false;

                const triggerStatistik = () => {
                    if (animated) return;
                    animated = true;

                    // Reveal cards with stagger
                    cards.forEach((card, idx) => {
                        setTimeout(() => {
                            card.classList.add('is-visible');
                        }, idx * 120);
                    });

                    // Animate number counters
                    const counters = statSection.querySelectorAll('.stat-counter');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'), 10);
                        const suffix = counter.getAttribute('data-suffix') || '';
                        const prefix = counter.getAttribute('data-prefix') || '';
                        const duration = 1600;
                        const startTime = performance.now();

                        function updateCounter(now) {
                            const elapsed = now - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                            const current = Math.floor(ease * target);
                            counter.textContent = prefix + current.toLocaleString('id-ID') + suffix;

                            if (progress < 1) {
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = prefix + target.toLocaleString('id-ID') + suffix;
                            }
                        }
                        requestAnimationFrame(updateCounter);
                    });
                };

                if ('IntersectionObserver' in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                triggerStatistik();
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.1
                    });
                    observer.observe(statSection);
                } else {
                    triggerStatistik();
                }
            }

            // GSAP ScrollTrigger for Destinasi Wisata 3D Stack & Fade-in
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // Fade-in Sejarah Section
                gsap.fromTo("#sejarah-text", {
                    opacity: 0,
                    x: -30
                }, {
                    opacity: 1,
                    x: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#sejarah",
                        start: "top 80%",
                    }
                });

                gsap.fromTo("#sejarah-image", {
                    opacity: 0,
                    x: 30
                }, {
                    opacity: 1,
                    x: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#sejarah",
                        start: "top 80%",
                    }
                });

                const cards = gsap.utils.toArray('.destinasi-card');
                const dots = gsap.utils.toArray('.dest-dot');

                // Center all cards absolutely via GSAP
                gsap.set(cards, {
                    xPercent: -50,
                    yPercent: -50,
                    transformOrigin: "center center"
                });

                if (cards.length === 3) {
                    const getOffset = () => window.innerWidth > 768 ? 450 : 310;

                    // Initial State
                    gsap.set(cards[0], {
                        opacity: 1,
                        scale: 1,
                        x: 0,
                        y: 0,
                        filter: "blur(0px)",
                        zIndex: 30
                    });
                    gsap.set(cards[1], {
                        opacity: 0.4,
                        scale: 0.85,
                        x: getOffset(),
                        y: 0,
                        filter: "blur(5px)",
                        zIndex: 20
                    });
                    gsap.set(cards[2], {
                        opacity: 0.15,
                        scale: 0.7,
                        x: getOffset() * 2,
                        y: 0,
                        filter: "blur(10px)",
                        zIndex: 10
                    });

                    gsap.set(dots[0], {
                        backgroundColor: "#FFF9E6",
                        scale: 1.3
                    });
                    gsap.set([dots[1], dots[2]], {
                        backgroundColor: "rgba(255, 249, 230, 0.3)",
                        scale: 1
                    });

                    const tl = gsap.timeline({
                        scrollTrigger: {
                            trigger: "#destinasi-wrapper",
                            start: "top top",
                            end: "bottom bottom",
                            scrub: 1,
                            invalidateOnRefresh: true
                        }
                    });

                    // --- Transition 1: Card 1 moves left, Card 2 moves to center ---
                    tl.to(cards[0], {
                        opacity: 0.4,
                        scale: 0.85,
                        x: () => -getOffset(),
                        filter: "blur(5px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, 0);
                    tl.to(cards[1], {
                        opacity: 1,
                        scale: 1,
                        x: 0,
                        filter: "blur(0px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, 0);
                    tl.to(cards[2], {
                        opacity: 0.4,
                        scale: 0.85,
                        x: () => getOffset(),
                        filter: "blur(5px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, 0);

                    tl.to(dots[0], {
                        backgroundColor: "rgba(255, 249, 230, 0.3)",
                        scale: 1,
                        duration: 0.5
                    }, 0.25);
                    tl.to(dots[1], {
                        backgroundColor: "#FFF9E6",
                        scale: 1.3,
                        duration: 0.5
                    }, 0.25);

                    tl.to({}, {
                        duration: 0.3
                    });

                    // --- Transition 2: Card 2 moves left, Card 3 moves to center ---
                    const t2Start = 1.3;
                    tl.to(cards[0], {
                        opacity: 0.15,
                        scale: 0.7,
                        x: () => -getOffset() * 2,
                        filter: "blur(10px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, t2Start);
                    tl.to(cards[1], {
                        opacity: 0.4,
                        scale: 0.85,
                        x: () => -getOffset(),
                        filter: "blur(5px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, t2Start);
                    tl.to(cards[2], {
                        opacity: 1,
                        scale: 1,
                        x: 0,
                        filter: "blur(0px)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, t2Start);

                    tl.to(dots[1], {
                        backgroundColor: "rgba(255, 249, 230, 0.3)",
                        scale: 1,
                        duration: 0.5
                    }, t2Start + 0.25);
                    tl.to(dots[2], {
                        backgroundColor: "#FFF9E6",
                        scale: 1.3,
                        duration: 0.5
                    }, t2Start + 0.25);

                    tl.to({}, {
                        duration: 0.3
                    });
                }
            }
        });
    </script>
@endpush
