@extends('layouts.app')

@section('content')
<!-- TopNavBar -->
<header class="bg-tertiary-fixed dark:bg-tertiary-container text-primary dark:text-on-primary-fixed docked full-width top-0 sticky backdrop-blur-md bg-opacity-80 dark:bg-opacity-90 shadow-sm z-50">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-gutter max-w-container-max mx-auto h-20">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-3xl">map</span>
<div class="flex flex-col">
<span class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary dark:text-on-primary-fixed leading-tight text-[20px] md:text-[24px]">Desa Sumberarum</span>
<span class="font-label-lg text-label-lg text-primary/70 text-[12px]">Kabupaten Magelang</span>
</div>
</div>
<nav class="hidden md:flex gap-6">
<a class="text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary pb-1" href="#profil">Profil Desa</a>
<a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1" href="#infografis">Infografis</a>
<a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1" href="#peta">Peta Desa</a>
<a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1" href="#layanan">Layanan Informasi</a>
<a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1" href="#unduh">Unduh Data</a>
<a class="text-primary dark:text-on-primary-fixed font-medium hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 pb-1" href="#kontak">Kontak</a>
</nav>
<button class="md:hidden text-primary">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</header>

<!-- Hero Section -->
<section class="relative h-[819px] w-full flex items-center justify-center">
<div class="absolute inset-0 z-0">
<div class="bg-cover bg-center w-full h-full" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAwZn-lCdQov9xM2BPXuM9-RLU-FWou9KiX_l5N1jz-O_CAHwv4sHcqeZnMmNEv6xckX7339G7yFvjFAVcUWjFBI-6kmo1oz8ndBXvGlx5VndidSEFG-CAAlNcH-ZnzpbcOiI0KcCag10scU5qFmauypbtGkC7c2gsBzaLYAOFqCg3aohvdkmv2QPPQTreHRk4b4xB7Mdx-odtJpN49NhtN20PJxPyRE3fS5H47ITsKxUCf_tTe1WK_ebrqhDEwjU0RwFJC6RmDOxhC')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
</div>
<div class="relative z-10 text-center px-4 max-w-4xl mx-auto flex flex-col items-center gap-6">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-tertiary-fixed drop-shadow-lg">Desa Sumberarum</h1>
<button class="bg-tertiary-fixed text-on-tertiary-fixed px-8 py-3 rounded-full font-label-lg text-label-lg flex items-center gap-2 hover:bg-white transition-all shadow-lg">
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
                        Selamat datang di portal informasi resmi Desa Sumberarum. Kami menyediakan layanan berbasis spasial (WebGIS) untuk mempermudah akses informasi geografis, batas wilayah, serta potensi desa secara transparan dan akurat.
                    </p>
</div>
<div class="md:col-span-5 flex flex-col items-center justify-center mt-12 md:mt-0">
<div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full border-4 border-tertiary-fixed overflow-hidden shadow-2xl">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ9MHOhNPfG1Sxi-y4qBG11GZN4d9GTt4z6MbbntXR9_KfrdAzIxi8ouv9v1PuudxQ5-s8i0tki-5FEQJaDWfWxYPt0SLDM25NIdMIsGaN__JiIStnbI3QK70X7MQkxEXxQVpI7HwLEhF6tk2LC4ja1TrIuPWpmIoF2neKoYAXQh5ZrCNyK5bFQ4kszUC0id1iFn0PtC-DhiFbBscHgdY3mDAuHDEwxtljdWENh0mqxZ-KBBjBm3VyIRkjtLTPmurQ_Kvhrk1YglDs"/>
</div>
<div class="bg-surface/10 backdrop-blur-md border border-white/20 mt-6 px-6 py-3 rounded-xl text-center">
<h3 class="font-label-lg text-label-lg font-bold text-tertiary-fixed">Kepala Desa</h3>
<p class="font-body-md text-body-md text-on-primary">Bapak Kepala Desa</p>
</div>
</div>
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
</footer>
@endsection

@push('scripts')
<script>
    // Inisialisasi Peta Leaflet sederhana
    document.addEventListener('DOMContentLoaded', function () {
        // Koordinat sementara (Magelang / Sumberarum)
        var map = L.map('map').setView([-7.5500, 110.2200], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([-7.5500, 110.2200]).addTo(map)
            .bindPopup('<b>Desa Sumberarum</b><br>Pusat Pemerintahan Desa.')
            .openPopup();
    });
</script>
@endpush
