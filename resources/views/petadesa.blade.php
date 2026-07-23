@extends('layouts.app')

@section('content')
<x-navbar />

    <main class="bg-primary text-on-primary py-12 px-margin-mobile md:px-gutter min-h-screen">
        <div class="max-w-container-max mx-auto">
            <div class="mb-8">
                <h1 class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold mb-2">Peta Wilayah Interaktif</h1>
                <p class="font-body-lg text-on-primary/80">Jelajahi batas wilayah, objek penting, serta fasilitas umum yang ada di Desa Sumberarum secara spasial.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-stretch">
                <div class="md:col-span-4 bg-surface-container rounded-3xl p-6 flex flex-col gap-6 text-on-surface">
                    <h2 class="font-headline-lg text-headline-lg text-primary font-bold">Informasi Peta</h2>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Peta ini menampilkan lokasi objek dan fasilitas umum yang ada di wilayah Desa Sumberarum. Anda dapat memperbesar/memperkecil peta dan menekan marker untuk informasi detail.
                    </p>

                    <div class="border-t border-on-surface/10 pt-4 flex flex-col gap-3">
                        <h3 class="font-headline-md text-primary font-semibold">Legenda / Keterangan</h3>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-full bg-red-500 inline-block"></span>
                            <span class="font-body-sm text-sm">Pusat Pemerintahan Desa</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-8 relative rounded-3xl overflow-hidden min-h-[550px] shadow-2xl border border-white/10">
                    <div id="map" class="w-full h-full min-h-[550px] z-0"></div>
                </div>
            </div>
        </div>
    </main>

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
        document.addEventListener('DOMContentLoaded', function() {
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
