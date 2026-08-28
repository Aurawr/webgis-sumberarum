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
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto flex flex-col items-center gap-6">
            <h1 class="font-display-lg font-bold text-[65px] md:text-[80px] text-tertiary-fixed drop-shadow-lg">Desa
                Sumberarum</h1>
            <button
                class="bg-tertiary-fixed text-on-tertiary-fixed px-8 py-3 rounded-full font-label-lg text-[16px] flex items-center gap-2 hover:bg-white transition-all shadow-lg">
                Jelajahi Desa
                <span class="material-symbols-outlined">expand_more</span>
            </button>
        </div>
    </section>

    <section class="bg-primary-container text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="profil">
        <div class="max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
                <div class="md:col-span-7 flex flex-col gap-6">
                    <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed">Profil Desa</h2>
                    <p class="font-body-lg text-body-lg text-on-primary/90 leading-relaxed">
                        Selamat datang di portal informasi resmi Desa Sumberarum. Kami menyediakan layanan berbasis spasial
                        (WebGIS) untuk mempermudah akses informasi geografis, batas wilayah, serta potensi desa secara
                        transparan dan akurat.
                    </p>
                </div>
                <div class="md:col-span-5 flex flex-col items-center justify-center mt-12 md:mt-0">
                    <div
                        class="relative w-64 h-64 md:w-80 md:h-80 rounded-full border-4 border-tertiary-fixed overflow-hidden shadow-2xl">
                        <img class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ9MHOhNPfG1Sxi-y4qBG11GZN4d9GTt4z6MbbntXR9_KfrdAzIxi8ouv9v1PuudxQ5-s8i0tki-5FEQJaDWfWxYPt0SLDM25NIdMIsGaN__JiIStnbI3QK70X7MQkxEXxQVpI7HwLEhF6tk2LC4ja1TrIuPWpmIoF2neKoYAXQh5ZrCNyK5bFQ4kszUC0id1iFn0PtC-DhiFbBscHgdY3mDAuHDEwxtljdWENh0mqxZ-KBBjBm3VyIRkjtLTPmurQ_Kvhrk1YglDs" />
                    </div>
                    <div
                        class="bg-surface/10 backdrop-blur-md border border-white/20 mt-6 px-6 py-3 rounded-xl text-center">
                        <h3 class="font-label-lg text-label-lg font-bold text-tertiary-fixed">Kepala Desa</h3>
                        <p class="font-body-md text-body-md text-on-primary">Bapak Kepala Desa</p>
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

    <section class="bg-primary text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="sejarah">
        <div class="max-w-3xl mx-auto flex flex-col gap-6">
            <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed text-center font-bold">Sejarah Desa</h2>
            <p class="font-body-lg text-body-lg text-on-primary/90 leading-relaxed text-justify">
                Desa Sumberarum merupakan penggabungan tiga Desa, Yaitu Desa Dimajar, Sumber, dan Sadegan. Dinamakan
                Sumberarum karena terdapat Sumber mata air di salah satu dusun di Desa Sumberarum, tepatnya di dusun Teluk.
                Diharapkan Desa Sumberarum kedepan akan menjadi baik dan lebih baik sehingga akan harum sesuai namanya, maka
                terangkai nama Sumberarum.
                <br><br>
                Desa Sumberarum merupakan salah satu desa di Kecamatan Tempuran, Kabupaten Magelang, Provinsi Jawa Tengah,
                yang memiliki luas wilayah 445,565 hektare dan secara geografis terletak pada koordinat 7°46'33" hingga
                7°50'00" LS serta 110°39'12" BT. Wilayah desa ini berbatasan dengan Desa Tempurejo di sebelah utara,
                Kecamatan Mertoyudan di sebelah timur, Desa Ringinanom di sebelah selatan, dan Desa Sidoagung di sebelah
                barat. Secara administratif, Desa Sumberarum terbagi menjadi 15 dusun, 17 Rukun Warga, dan 57 Rukun
                Tetangga, dengan tipologi kawasan yang meliputi area persawahan, perladangan, kerajinan dan industri kecil,
                serta sektor jasa dan perdagangan.
            </p>
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
                                    alt="Wisata {{ $i }}" class="w-full h-full object-cover pointer-events-none">
                            </div>
                            <div class="px-2 pb-2 pt-4 text-primary">
                                <h3 class="font-headline-lg text-[22px] font-bold mb-2">Destinasi Wisata {{ $i }}
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // GSAP ScrollTrigger for Destinasi Wisata 3D Stack
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

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
