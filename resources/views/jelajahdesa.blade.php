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
                // Daftar Dusun dengan ID YouTube dan Link
                // Biarkan Pakeron bernilai null, nanti tinggal diisi ID dan linknya.
                $dusunList = [
                    ['name' => 'Boto', 'yt_id' => 'UF89s-ro0TA', 'yt_link' => 'https://youtu.be/UF89s-ro0TA'],
                    ['name' => 'Desekan', 'yt_id' => '4bF9l-9NU0A', 'yt_link' => 'https://youtu.be/4bF9l-9NU0A'],
                    ['name' => 'Dimanjar 1', 'yt_id' => 'K0IUjH28IMo', 'yt_link' => 'https://youtu.be/K0IUjH28IMo'],
                    ['name' => 'Dimanjar 2', 'yt_id' => 'n-8HkMcfnKE', 'yt_link' => 'https://youtu.be/n-8HkMcfnKE'],
                    ['name' => 'Dimanjar 3', 'yt_id' => 'BCNJI6dKkxM', 'yt_link' => 'https://youtu.be/BCNJI6dKkxM'],
                    ['name' => 'Gunung Bakal', 'yt_id' => 'Gbp0adyFRYI', 'yt_link' => 'https://youtu.be/Gbp0adyFRYI'],
                    ['name' => 'Kasuran', 'yt_id' => 'PYQ9H0DnDc0', 'yt_link' => 'https://youtu.be/PYQ9H0DnDc0'],
                    ['name' => 'Kerban', 'yt_id' => 'o4JDLOp_86o', 'yt_link' => 'https://youtu.be/o4JDLOp_86o'],
                    ['name' => 'Pakeron', 'yt_id' => null, 'yt_link' => null], // <-- Nanti isi di sini
                    ['name' => 'Sadegan', 'yt_id' => 'mrG9MZU3vfM', 'yt_link' => 'https://youtu.be/mrG9MZU3vfM'],
                    ['name' => 'Sumber', 'yt_id' => 'G9N_vgMIHWQ', 'yt_link' => 'https://youtu.be/G9N_vgMIHWQ'],
                    ['name' => 'Tegalsari', 'yt_id' => 'oKzBF7VWUOQ', 'yt_link' => 'https://youtu.be/oKzBF7VWUOQ'],
                    ['name' => 'Teluk', 'yt_id' => 'yeAJzXDqOss', 'yt_link' => 'https://youtu.be/yeAJzXDqOss'],
                    ['name' => 'Tepungsari', 'yt_id' => 'NNVfwArPlBI', 'yt_link' => 'https://youtu.be/NNVfwArPlBI'],
                    ['name' => 'Wareng', 'yt_id' => 'uHyTlpqizT4', 'yt_link' => 'https://youtu.be/uHyTlpqizT4'],
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
                                    <h3 class="font-headline-lg text-xl text-primary font-bold">Dusun {{ $dusun['name'] }}</h3>
                                </div>
                                <span class="bg-primary/10 text-primary text-xs font-semibold px-2.5 py-1 rounded-full">Dusun</span>
                            </div>

                            <p class="font-body-md text-on-surface-variant text-sm mb-4">
                                Informasi profil wilayah, potensi lokal, serta dokumentasi kegiatan warga Dusun {{ $dusun['name'] }}.
                            </p>

                            <!-- YouTube Embed Preview -->
                            @if($dusun['yt_id'])
                                <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-surface-variant border border-white/10 mb-4">
                                    <!-- Menambahkan loading="lazy" agar browser tidak memuat 14 video sekaligus -->
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full" 
                                        src="https://www.youtube.com/embed/{{ $dusun['yt_id'] }}" 
                                        title="YouTube video player untuk Dusun {{ $dusun['name'] }}" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        referrerpolicy="strict-origin-when-cross-origin" 
                                        loading="lazy"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            @else
                                <!-- Placeholder untuk Pakeron (Video belum ada) -->
                                <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-surface-variant/40 border border-white/10 mb-4 flex flex-col items-center justify-center text-center p-4">
                                    <span class="material-symbols-outlined text-4xl text-primary/40 mb-1">videocam_off</span>
                                    <span class="text-xs text-on-surface-variant font-medium">Video Belum Tersedia</span>
                                </div>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-2 pt-2 border-t border-on-surface/10">
                            @if($dusun['yt_link'])
                                <!-- Link Buka di YouTube -->
                                <a href="{{ $dusun['yt_link'] }}" target="_blank" rel="noopener noreferrer" class="w-full bg-surface-variant text-on-surface-variant py-2.5 px-4 rounded-xl font-medium text-xs hover:bg-surface-variant/80 transition-all flex items-center justify-center gap-1.5 border border-white/10">
                                    <span class="material-symbols-outlined text-base text-red-500">smart_display</span>
                                    Buka di YouTube
                                </a>
                            @else
                                <!-- Button Disabled (Pakeron) -->
                                <button onclick="alert('Video YouTube Dusun {{ $dusun['name'] }} belum tersedia saat ini.');" class="w-full bg-surface-variant/50 text-on-surface-variant/60 py-2.5 px-4 rounded-xl font-medium text-xs cursor-not-allowed flex items-center justify-center gap-1.5 border border-white/5">
                                    <span class="material-symbols-outlined text-base text-red-500/50">smart_display</span>
                                    Belum Tersedia
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<x-footer />
@endsection