@extends('layouts.app')

@section('content')
    <!-- TopNavBar -->
    <header
        class="bg-tertiary-fixed dark:bg-tertiary-container text-primary dark:text-on-primary-fixed docked full-width top-0 sticky backdrop-blur-md bg-opacity-80 dark:bg-opacity-90 shadow-sm z-50">
        <div class="flex justify-between items-center w-full px-margin-mobile md:px-gutter max-w-container-max mx-auto h-20">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">map</span>
                <div class="flex flex-col">
                    <span
                        class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary dark:text-on-primary-fixed leading-tight text-[20px] md:text-[24px]">Desa
                        Sumberarum</span>
                    <span class="font-label-lg text-label-lg text-primary/70 text-[12px]">Kabupaten Magelang</span>
                </div>
            </div>
            <nav class="hidden md:flex gap-6">
                <a class="text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary pb-1"
                    href="#profil">Profil Desa</a>
                <a class="text-primary font-medium hover:text-secondary pb-1"
                    href="{{ url('/infografis') }}">Infografis</a>
                <a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1"
                    href="#peta">Peta Desa</a>
                <a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1"
                    href="#layanan">Layanan Informasi</a>
                <a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1"
                    href="#unduh">Unduh Peta</a>
                <a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1"
                    href="#kontak">Kontak</a>
            </nav>
            <button class="md:hidden text-primary">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[819px] w-full flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <div class="bg-cover bg-center w-full h-full"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAwZn-lCdQov9xM2BPXuM9-RLU-FWou9KiX_l5N1jz-O_CAHwv4sHcqeZnMmNEv6xckX7339G7yFvjFAVcUWjFBI-6kmo1oz8ndBXvGlx5VndidSEFG-CAAlNcH-ZnzpbcOiI0KcCag10scU5qFmauypbtGkC7c2gsBzaLYAOFqCg3aohvdkmv2QPPQTreHRk4b4xB7Mdx-odtJpN49NhtN20PJxPyRE3fS5H47ITsKxUCf_tTe1WK_ebrqhDEwjU0RwFJC6RmDOxhC')">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto flex flex-col items-center gap-6">
            <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-tertiary-fixed drop-shadow-lg">Desa
                Sumberarum</h1>
            <button
                class="bg-tertiary-fixed text-on-tertiary-fixed px-8 py-3 rounded-full font-label-lg text-label-lg flex items-center gap-2 hover:bg-white transition-all shadow-lg">
                Jelajahi Desa
                <span class="material-symbols-outlined">expand_more</span>
            </button>
        </div>
    </section>

    <!-- Profil Desa Section -->
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

<!-- Sejarah Desa Section -->
<section class="bg-primary text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="sejarah">
<div class="max-w-3xl mx-auto flex flex-col gap-6">
<h2 class="font-headline-xl text-headline-xl text-tertiary-fixed text-left font-bold">Sejarah Desa</h2>
<p class="font-body-lg text-body-lg text-on-primary/90 leading-relaxed text-justify">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in est euismod, tincidunt libero id, fermentum orci. Praesent enim magna, facilisis nec commodo eu, finibus nec erat. Pellentesque porta purus nec nulla mattis molestie. Nulla et enim eget est commodo mattis eu sed nulla. Proin in lorem ex. Duis eget velit sed velit fringilla hendrerit in non diam. In mattis erat ac mauris vulputate gravida.
<br><br>
Ut in lorem vel felis rhoncus egestas. Duis porta dolor ut convallis consectetur. Quisque tincidunt lobortis diam eu iaculis. Fusce ac ex a lorem auctor interdum quis non lectus.
</p>
</div>
</section>

<!-- Destinasi Wisata Section (GSAP Vertical Scroll) -->
<section class="bg-primary-container text-on-primary relative w-full h-[300vh]" id="destinasi-wrapper">
    <!-- Pinned Container -->
    <div class="sticky top-0 h-screen w-full overflow-hidden flex flex-col pt-20 pb-10" id="destinasi-pinned">

        <!-- Header Section -->
        <div class="px-margin-mobile md:px-gutter max-w-container-max mx-auto w-full z-50 absolute top-24 left-1/2 -translate-x-1/2 text-center md:text-left pointer-events-none">
            <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold pointer-events-auto drop-shadow-md">Destinasi Wisata</h2>
            <p class="font-body-lg text-body-lg text-on-primary/90 mt-4 max-w-2xl mx-auto md:mx-0 pointer-events-auto">Jelajahi keindahan tersembunyi yang ditawarkan oleh Desa Sumberarum melalui tur virtual vertikal ini.</p>
        </div>

        <!-- 3D Card Stack Area -->
        <div class="relative w-full h-full flex items-center justify-center mt-12 md:mt-16" id="cards-container">
            @for ($i = 1; $i <= 3; $i++)
            <!-- Card {{ $i }} -->
            <div class="destinasi-card absolute top-1/2 left-1/2 w-[280px] md:w-[340px]" id="destinasi-card-{{ $i }}">
                <div class="h-full flex flex-col relative bg-[#FFF9E6] rounded-[1.5rem] p-5 shadow-2xl border border-white/20">
                    <!-- Sparkles -->
                    <svg class="sparkle absolute -top-8 -right-8 w-14 h-14 text-[#FFF9E6] z-30 drop-shadow-lg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                    </svg>
                    <svg class="sparkle absolute -bottom-8 -left-8 w-16 h-16 text-[#FFF9E6] z-30 drop-shadow-lg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                    </svg>

                    <div class="rounded-xl overflow-hidden h-[280px] md:h-[320px] w-full shrink-0 shadow-inner relative bg-black/10">
                        <img src="https://picsum.photos/seed/wisatabaru{{$i}}/600/500" alt="Wisata {{ $i }}" class="w-full h-full object-cover pointer-events-none">
                    </div>
                    <div class="px-2 pb-2 pt-4 text-primary">
                        <h3 class="font-headline-lg text-[22px] font-bold mb-2">Destinasi Wisata {{ $i }}</h3>
                        <p class="font-body-md text-sm text-primary/80">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <!-- Progress Indicators -->
        <div class="absolute right-6 top-1/2 -translate-y-1/2 flex flex-col gap-4 z-50">
            @for ($i = 1; $i <= 3; $i++)
            <div class="w-3 h-3 rounded-full bg-[#FFF9E6]/30 dest-dot" id="dest-dot-{{ $i }}"></div>
            @endfor
        </div>
    </div>
</section>

<!-- Peta Wilayah Section -->
<section class="bg-primary text-on-primary py-section-padding px-margin-mobile md:px-gutter overflow-hidden" id="peta">
<div class="max-w-container-max mx-auto">
<h2 class="font-headline-xl text-headline-xl text-tertiary-fixed mb-12">Peta Wilayah Interaktif</h2>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-stretch">
<div class="md:col-span-4 bg-surface-container rounded-3xl p-6 flex flex-col gap-6 text-on-surface">
<h3 class="font-headline-lg text-headline-lg text-primary">Informasi Peta</h3>
<p class="font-body-md text-on-surface-variant">Peta ini menampilkan lokasi objek dan fasilitas umum yang ada di wilayah Desa Sumberarum.</p>
</div>

                <div class="md:col-span-8 relative rounded-3xl overflow-hidden min-h-[450px] shadow-2xl">
                    <!-- Wadah Peta Interaktif -->
                    <div id="map" class="w-full h-full min-h-[450px] z-0"></div>
                </div>
            </div>
        </div>
    </section>

<!-- Layanan dan Informasi Section -->
<section class="bg-gradient-to-b from-primary to-primary-container text-on-primary py-section-padding px-margin-mobile md:px-gutter" id="layanan">
<div class="max-w-container-max mx-auto">
<h2 class="font-headline-xl text-headline-xl text-tertiary-fixed mb-12 font-bold">Layanan dan Informasi</h2>

<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<div class="md:col-span-8 flex flex-col">
@for ($i = 1; $i <= 5; $i++)
<a href="#" class="group flex items-center justify-between py-6 border-b border-on-primary/20 hover:border-tertiary-fixed transition-colors">
<div class="flex flex-col gap-1 pr-4">
<h3 class="font-headline-lg text-[20px] font-bold text-on-primary group-hover:text-tertiary-fixed transition-colors">Lorem Ipsum {{ $i }}</h3>
<p class="font-body-md text-on-primary/70">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
</div>
<span class="material-symbols-outlined text-4xl text-on-primary/50 group-hover:text-tertiary-fixed transition-colors shrink-0">chevron_right</span>
</a>
@endfor
</div>
<div class="hidden md:flex md:col-span-4 items-end pb-6 pl-8">
<p class="font-body-md text-on-primary/70 text-sm leading-relaxed">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container full-width rounded-t-lg relative mt-24">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin-mobile md:px-section-padding py-section-padding max-w-container-max mx-auto relative z-10">
<div class="flex flex-col gap-6">
<h3 class="font-headline-xl text-headline-xl text-on-primary dark:text-on-primary-container font-extrabold mb-4">Desa<br/>Sumberarum</h3>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-headline-lg text-headline-lg text-tertiary-fixed dark:text-tertiary-fixed-dim mb-2">Tautan Penting</h4>
<a class="font-body-md text-body-md text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-all" href="#">Website Kabupaten Magelang</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-headline-lg text-headline-lg text-tertiary-fixed dark:text-tertiary-fixed-dim mb-2">Sosial Media</h4>
<a class="font-body-md text-body-md text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-all" href="#">Instagram</a>
</div>
</div>

<!-- Kerjasama dengan Section -->
<div class="border-t border-on-primary/20 mt-12 w-full">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-section-padding py-8 flex flex-col md:flex-row justify-between items-end gap-6">
<div class="flex flex-col gap-4 w-full md:w-auto text-center md:text-left">
<h4 class="font-headline-md text-headline-md text-on-primary font-bold">Kerjasama dengan</h4>
<div class="flex gap-4 items-center justify-center md:justify-start">
<div class="w-14 h-14 rounded-full bg-white flex items-center justify-center overflow-hidden">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Lambang_Kabupaten_Magelang.png/300px-Lambang_Kabupaten_Magelang.png" alt="Logo Magelang" class="w-10 h-10 object-contain">
</div>
<div class="w-14 h-14 rounded-full bg-white flex items-center justify-center overflow-hidden">
<img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/50/Lambang_Universitas_Gadjah_Mada.png/300px-Lambang_Universitas_Gadjah_Mada.png" alt="Logo UGM" class="w-10 h-10 object-contain">
</div>
<div class="w-14 h-14 rounded-full bg-white flex items-center justify-center overflow-hidden">
<span class="font-bold text-primary text-sm">DTK</span>
</div>
</div>
</div>
<div class="flex flex-col text-center md:text-right text-on-primary/60 text-sm w-full md:w-auto">
<p class="font-bold">WebGIS Pelayanan Desa - Desa Sumberarum © 2024</p>
<p>Pusat Sistem Informasi Geografis</p>
</div>
</div>
</div>
</footer>
@endsection

@push('scripts')
    <script>
        // Inisialisasi Peta Leaflet sederhana
        document.addEventListener('DOMContentLoaded', function() {
            // Koordinat sementara (Magelang / Sumberarum)
            var map = L.map('map').setView([-7.5500, 110.2200], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

        L.marker([-7.5500, 110.2200]).addTo(map)
            .bindPopup('<b>Desa Sumberarum</b><br>Pusat Pemerintahan Desa.')
            .openPopup();

        // GSAP ScrollTrigger for Destinasi Wisata 3D Stack
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            const cards = gsap.utils.toArray('.destinasi-card');
            const dots = gsap.utils.toArray('.dest-dot');

            // Center all cards absolutely via GSAP
            gsap.set(cards, { xPercent: -50, yPercent: -50, transformOrigin: "center center" });

            if (cards.length === 3) {
                // Determine offset based on screen size
                const getOffset = () => window.innerWidth > 768 ? 450 : 310;

                // Initial State
                gsap.set(cards[0], { opacity: 1, scale: 1, x: 0, y: 0, filter: "blur(0px)", zIndex: 30 });
                gsap.set(cards[1], { opacity: 0.4, scale: 0.85, x: getOffset(), y: 0, filter: "blur(5px)", zIndex: 20 });
                gsap.set(cards[2], { opacity: 0.15, scale: 0.7, x: getOffset() * 2, y: 0, filter: "blur(10px)", zIndex: 10 });

                gsap.set(dots[0], { backgroundColor: "#FFF9E6", scale: 1.3 });
                gsap.set([dots[1], dots[2]], { backgroundColor: "rgba(255, 249, 230, 0.3)", scale: 1 });

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#destinasi-wrapper",
                        start: "top top",
                        end: "bottom bottom",
                        scrub: 1, // Smooth scrubbing
                        invalidateOnRefresh: true
                    }
                });

                // --- Transition 1: Card 1 moves left, Card 2 moves to center ---
                tl.to(cards[0], { opacity: 0.4, scale: 0.85, x: () => -getOffset(), filter: "blur(5px)", duration: 1, ease: "power1.inOut" }, 0);
                tl.to(cards[1], { opacity: 1, scale: 1, x: 0, filter: "blur(0px)", duration: 1, ease: "power1.inOut" }, 0);
                tl.to(cards[2], { opacity: 0.4, scale: 0.85, x: () => getOffset(), filter: "blur(5px)", duration: 1, ease: "power1.inOut" }, 0);

                tl.to(dots[0], { backgroundColor: "rgba(255, 249, 230, 0.3)", scale: 1, duration: 0.5 }, 0.25);
                tl.to(dots[1], { backgroundColor: "#FFF9E6", scale: 1.3, duration: 0.5 }, 0.25);

                // --- Hold state for a brief moment ---
                tl.to({}, {duration: 0.3});

                // --- Transition 2: Card 2 moves left, Card 3 moves to center ---
                const t2Start = 1.3;
                tl.to(cards[0], { opacity: 0.15, scale: 0.7, x: () => -getOffset() * 2, filter: "blur(10px)", duration: 1, ease: "power1.inOut" }, t2Start);
                tl.to(cards[1], { opacity: 0.4, scale: 0.85, x: () => -getOffset(), filter: "blur(5px)", duration: 1, ease: "power1.inOut" }, t2Start);
                tl.to(cards[2], { opacity: 1, scale: 1, x: 0, filter: "blur(0px)", duration: 1, ease: "power1.inOut" }, t2Start);

                tl.to(dots[1], { backgroundColor: "rgba(255, 249, 230, 0.3)", scale: 1, duration: 0.5 }, t2Start + 0.25);
                tl.to(dots[2], { backgroundColor: "#FFF9E6", scale: 1.3, duration: 0.5 }, t2Start + 0.25);

                // --- Hold state at the end ---
                tl.to({}, {duration: 0.3});
            }
        }

    });
</script>
@endpush
