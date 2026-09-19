@extends('layouts.app')

@section('content')
<x-navbar />

@php
    // ────────────────────────────────────────────────────────────────
    // 1. PETA SKALA DESA
    // ────────────────────────────────────────────────────────────────
    $petaDesa = [
        ['judul' => 'Peta Foto Udara',            'file' => 'Sumberarum_Dasar_Peta_Citra.pdf',                  'deskripsi' => 'Citra satelit dan foto udara resolusi tinggi wilayah Desa Sumberarum tahun 2025.'],
        ['judul' => 'Peta Penggunaan Lahan',      'file' => 'Sumberarum_Dasar_Peta_Penggunaan_Lahan.pdf',       'deskripsi' => 'Klasifikasi penggunaan lahan dan vegetasi se-Desa Sumberarum.'],
        ['judul' => 'Peta Bangunan',              'file' => 'Sumberarum_Dasar_Peta_Bangunan.pdf',               'deskripsi' => 'Persebaran dan lokasi bangunan di wilayah Desa Sumberarum.'],
        ['judul' => 'Peta Sarana dan Prasarana',  'file' => 'Sumberarum_Dasar_Peta_Sarana_dan_Prasarana.pdf',   'deskripsi' => 'Persebaran sarana dan prasarana yang tersedia di Desa Sumberarum.'],
    ];

    // ────────────────────────────────────────────────────────────────
    // 2. PETA PER DUSUN
    // ────────────────────────────────────────────────────────────────
    $fileDusun = [
        'Boto'          => 'Boto_A1.pdf',
        'Dasekan'       => 'Dasekan_A1.pdf',
        'Dimajar 1'     => 'Dimajar1_A1.pdf',
        'Dimajar 2'     => 'Dimajar2_A1.pdf',
        'Dimajar 3'     => 'Dimajar3_A1.pdf',
        'Gunung Bakal'  => 'GunungBakal_A1.pdf',
        'Kasuran'       => 'Kasuran_A1.pdf',
        'Kerban'        => 'Kerban_A1.pdf',
        'Pakeron'       => 'Pakeron_A1.pdf',
        'Sadegan'       => 'Sadegan_A1.pdf',
        'Sumber'        => 'Sumber_A1.pdf',
        'Tegalsari'     => 'Tegalsari_A1.pdf',
        'Teluk'         => 'Teluk_A1.pdf',
        'Tepungsari'    => 'Tepungsari_A1.pdf',
        'Wareng'        => 'Wareng_A1.pdf',
    ];

    $petaDusun = collect($fileDusun)
        ->map(fn ($file, $nama) => [
            'judul'     => 'Peta Penutup dan Penggunaan Lahan',
            'deskripsi' => "Persebaran dan jenis penutup serta penggunaan lahan di wilayah Dusun {$nama}.",
            'file'      => $file,
            'dusun'     => $nama,
        ])
        ->values()
        ->all();
@endphp

<section class="bg-primary min-h-screen pt-28 pb-16 md:pt-36 md:pb-20 px-margin-mobile md:px-gutter">
    <div class="max-w-container-max mx-auto">

        <header class="mb-14">
            <h1 class="text-5xl md:text-6xl font-extrabold text-tertiary-fixed border-b-4 border-tertiary-fixed inline-block pb-3 mb-4">
                Unduh Peta
            </h1>
        </header>

        {{-- ══════════════ BAGIAN 1: PETA SE-DESA ══════════════ --}}
        <div class="flex items-baseline gap-4 mb-6">
            <h2 class="text-2xl md:text-3xl font-extrabold text-tertiary-fixed">Peta Seluruh Desa</h2>
            <span class="text-tertiary-fixed/60 text-sm">{{ count($petaDesa) }} peta</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @foreach ($petaDesa as $doc)
                @include('components.kartu-peta', ['doc' => $doc])
            @endforeach
        </div>

        {{-- ══════════════ BAGIAN 2: PETA PER DUSUN ══════════════ --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-tertiary-fixed">Peta Per Dusun</h2>
                <p class="text-tertiary-fixed/70 text-sm mt-1">Nama dusun tercantum di pojok kiri atas tiap peta.</p>
            </div>

            <label class="relative w-full md:w-72">
                <span class="sr-only">Cari dusun</span>
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-tertiary-fixed/60 text-[20px]">search</span>
                <input id="cariDusun" type="search" autocomplete="off" placeholder="Ketik nama dusun…"
                       class="w-full pl-11 pr-4 py-2.5 rounded-xl bg-tertiary-fixed/10 border border-tertiary-fixed/30 text-tertiary-fixed placeholder-tertiary-fixed/50 focus:outline-none focus:ring-2 focus:ring-tertiary-fixed/60">
            </label>
        </div>

        {{-- Pintasan: lompat ke kartu dusun tertentu --}}
        <div class="flex flex-wrap gap-2 mb-8">
            @foreach ($petaDusun as $doc)
                <a href="#dusun-{{ Str::slug($doc['dusun']) }}"
                   class="px-3 py-1.5 rounded-full text-sm font-semibold bg-tertiary-fixed/10 text-tertiary-fixed border border-tertiary-fixed/30 hover:bg-tertiary-fixed hover:text-primary transition-colors">
                    {{ $doc['dusun'] }}
                </a>
            @endforeach
        </div>

        <div id="gridDusun" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($petaDusun as $doc)
                @include('components.kartu-peta', ['doc' => $doc])
            @endforeach
        </div>

        <p id="dusunKosong" class="hidden text-tertiary-fixed/70 py-10">
            Tidak ada dusun dengan nama itu. Coba kata yang lebih pendek, misalnya “dim”.
        </p>

    </div>
</section>

<x-footer />

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    function renderPdfThumb(canvas) {
        const url  = canvas.dataset.pdfUrl;
        const wrap = canvas.closest('.pdf-thumb-wrap');

        pdfjsLib.getDocument(url).promise
            .then((pdf) => pdf.getPage(1))
            .then((page) => {
                const dpr      = Math.min(window.devicePixelRatio || 1, 2);
                const scale    = (wrap.clientWidth / page.getViewport({ scale: 1 }).width) * dpr;
                const viewport = page.getViewport({ scale });

                canvas.width  = viewport.width;
                canvas.height = viewport.height;

                return page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
            })
            .catch((err) => {
                console.error('Gagal memuat preview PDF:', url, err);
                canvas.classList.add('hidden');
                wrap.querySelector('.pdf-thumb-fallback').classList.replace('hidden', 'flex');
            });
    }

    // Render pratinjau hanya saat kartu mendekati layar
    const thumbObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            renderPdfThumb(entry.target);
            observer.unobserve(entry.target);
        });
    }, { rootMargin: '200px' });

    document.querySelectorAll('.pdf-thumb').forEach((c) => thumbObserver.observe(c));

    // Pencarian dusun
    const input  = document.getElementById('cariDusun');
    const kartu  = Array.from(document.querySelectorAll('#gridDusun [data-dusun]'));
    const kosong = document.getElementById('dusunKosong');

    input?.addEventListener('input', () => {
        const q = input.value.trim().toLowerCase();
        let terlihat = 0;

        kartu.forEach((el) => {
            const cocok = el.dataset.dusun.includes(q);
            el.classList.toggle('hidden', !cocok);
            if (cocok) terlihat++;
        });

        kosong.classList.toggle('hidden', terlihat > 0);
    });
</script>
@endpush
@endsection
