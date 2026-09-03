@extends('layouts.app')

@section('content')
<x-navbar />

    <!-- HERO SECTION: Jelajah Desa -->
    <section class="bg-primary text-on-primary pt-36 pb-20 px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto text-center flex flex-col items-center gap-4">
            <span class="material-symbols-outlined text-tertiary-fixed text-6xl">explore</span>
            <h1 class="font-display-lg text-headline-xl md:text-display-lg text-tertiary-fixed">Jelajah Desa Sumberarum</h1>
            <p class="font-body-lg text-on-primary/90 max-w-2xl">
                Temukan potensi, profil, serta dokumentasi kegiatan dari masing-masing dusun yang ada di wilayah Desa Sumberarum.
            </p>
        </div>
    </section>

    <!-- SECTION LIST DUSUN -->
    <section class="bg-primary-container text-on-primary py-section-padding px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <div>
                    <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold">Daftar Padukuhan / Dusun</h2>
                    <p class="text-on-primary/80 text-sm mt-1">Menampilkan 15 wilayah dusun di Desa Sumberarum</p>
                </div>
            </div>

            @php
                $dusunList = [
                    'Boto', 'Desekan', 'Dimanjar 1', 'Dimanjar 2', 'Dimanjar 3', 
                    'Gunung Bakal', 'Kasuran', 'Kerban', 'Pakeron', 'Sadegan', 
                    'Sumber', 'Tegalsari', 'Teluk', 'Tepungsari', 'Wareng'
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @foreach ($dusunList as $dusun)
                    <div class="bg-surface-container rounded-3xl p-6 flex flex-col gap-5 text-on-surface shadow-lg border border-white/10 hover:translate-y-[-4px] transition-all justify-between">
                        <div>
                            <!-- Header Card: Nama Dusun & Badge -->
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-2xl bg-tertiary-fixed/20 flex items-center justify-center text-primary shrink-0">
                                        <span class="material-symbols-outlined text-2xl">location_on</span>
                                    </div>
                                    <h3 class="font-headline-lg text-xl text-primary font-bold">Dusun {{ $dusun }}</h3>
                                </div>
                                <span class="bg-primary/10 text-primary text-xs font-semibold px-2.5 py-1 rounded-full">Dusun</span>
                            </div>

                            <p class="font-body-md text-on-surface-variant text-sm mb-4">
                                Informasi profil wilayah, potensi lokal, serta dokumentasi kegiatan warga Dusun {{ $dusun }}.
                            </p>

                            <!-- YouTube Embed Preview (Placeholder Frame) -->
                            <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-surface-variant/40 border border-white/10 mb-4 flex flex-col items-center justify-center text-center p-4">
                                <span class="material-symbols-outlined text-4xl text-primary/40 mb-1">play_circle</span>
                                <span class="text-xs text-on-surface-variant font-medium">Preview Video YouTube</span>
                                <span class="text-[10px] text-on-surface-variant/70">(Dalam Persiapan)</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-2 pt-2 border-t border-on-surface/10">
                            <!-- Link Website Dusun -->
                            <a href="#" onclick="alert('Website Dusun {{ $dusun }} sedang dalam tahap penyiapan.'); return false;" class="flex-1 bg-primary text-on-primary py-2.5 px-4 rounded-xl font-medium text-xs hover:bg-primary/90 transition-all flex items-center justify-center gap-1.5 shadow-sm">
                                <span class="material-symbols-outlined text-base">language</span>
                                Website Dusun
                            </a>

                            <!-- Link YouTube Dusun -->
                            <a href="#" onclick="alert('Channel/Video YouTube Dusun {{ $dusun }} sedang dalam tahap penyiapan.'); return false;" class="flex-1 bg-surface-variant text-on-surface-variant py-2.5 px-4 rounded-xl font-medium text-xs hover:bg-surface-variant/80 transition-all flex items-center justify-center gap-1.5 border border-white/10">
                                <span class="material-symbols-outlined text-base text-red-500">smart_display</span>
                                YouTube
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<x-footer />
@endsection