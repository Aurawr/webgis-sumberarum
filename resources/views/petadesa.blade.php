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

    <x-footer />
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
