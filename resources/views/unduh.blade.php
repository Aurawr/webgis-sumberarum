@extends('layouts.app')

@section('content')
<x-navbar />

@php
    // Daftar peta PDF. Taruh file PDF-nya di: public/dokumen/peta-unduh/
    // lalu isi 'file' dengan nama file tersebut.
    $dokumenPeta = [
        [
            'judul' => 'Peta Foto Udara Sumberarum',
            'deskripsi' => 'Peta citra satelit dan foto udara resolusi tinggi wilayah Desa Sumberarum tahun 2025.',
            'file' => 'Sumberarum_Dasar_Peta_Citra.pdf',
        ],
        [
            'judul' => 'Peta Penggunaan Lahan Sumberarum',
            'deskripsi' => 'Peta tematik yang menunjukkan klasifikasi penggunaan lahan dan vegetasi.',
            'file' => 'Sumberarum_Dasar_Peta_Penggunaan_Lahan.pdf',
        ],
        [
            'judul' => 'Peta Bangunan Sumberarum',
            'deskripsi' => 'Peta persebaran dan lokasi bangunan yang terdapat di wilayah Desa Sumberarum.',
            'file' => 'Sumberarum_Dasar_Peta_Bangunan.pdf',
        ],
        [
            'judul' => 'Peta Sarana dan Prasarana Sumberarum',
            'deskripsi' => 'Peta persebaran sarana dan prasarana yang tersedia di wilayah Desa Sumberarum.',
            'file' => 'Sumberarum_Dasar_Peta_Sarana_dan_Prasarana.pdf',
        ],
    ];
@endphp

<!-- Wrapper dengan warna hijau tua (primary) -->
<section class="bg-primary min-h-screen pt-28 pb-16 md:pt-36 md:pb-20 px-margin-mobile md:px-gutter">
    <div class="max-w-container-max mx-auto">

        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-5xl md:text-6xl font-extrabold text-tertiary-fixed border-b-4 border-tertiary-fixed inline-block pb-3 mb-4">
                Unduh Peta
            </h1>
            <p class="text-lg text-tertiary-fixed/80">Koleksi peta tematik dan dokumen yang dapat Anda lihat serta unduh.</p>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($dokumenPeta as $doc)
            @php
                $fileUrl = asset('dokumen/peta-unduh/' . $doc['file']);
            @endphp
            <!-- Kartu dengan warna krem (tertiary-fixed) -->
            <div class="bg-tertiary-fixed rounded-2xl overflow-hidden shadow-xl flex flex-col border border-white/20 transform transition-transform duration-300 hover:-translate-y-1">

                <!-- Preview Halaman 1 PDF (di-render otomatis oleh PDF.js) & Efek Hover -->
                <a href="{{ $fileUrl }}" target="_blank" rel="noopener" class="pdf-thumb-wrap relative group aspect-[4/3] overflow-hidden bg-gray-100 cursor-pointer block">
                    <canvas class="pdf-thumb absolute inset-0 w-full h-full object-contain transition-transform duration-700 group-hover:scale-110" data-pdf-url="{{ $fileUrl }}"></canvas>

                    <!-- Fallback ikon, muncul kalau render PDF gagal -->
                    <div class="pdf-thumb-fallback hidden absolute inset-0 items-center justify-center bg-primary/10">
                        <span class="material-symbols-outlined text-primary/40" style="font-size:72px;">picture_as_pdf</span>
                    </div>

                    <!-- Overlay Gelap saat di-hover -->
                    <div class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white backdrop-blur-[2px]">
                        <span class="font-extrabold text-xl mb-4 text-center px-4 drop-shadow-md">{{ $doc['judul'] }}</span>
                        <div class="w-14 h-14 rounded-full border-2 border-white/50 bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">zoom_in</span>
                        </div>
                    </div>
                </a>

                <!-- Informasi & Tombol Aksi -->
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-primary mb-2">{{ $doc['judul'] }}</h3>
                    <p class="text-sm text-primary/80 mb-6 flex-grow leading-relaxed">{{ $doc['deskripsi'] }}</p>

                    <div class="flex flex-col gap-3 mt-auto">
                        <!-- Tombol Unduh (Outline Putih/Krem Transparan) -->
                        <a href="{{ $fileUrl }}" download
                           class="w-full py-2.5 px-4 bg-white/40 hover:bg-white text-primary border border-primary/20 font-bold rounded-xl transition-all duration-300 flex justify-center items-center gap-2 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">download</span> Unduh Data
                        </a>

                        <!-- Tombol Lihat Dokumen (Solid Hijau) -->
                        <a href="{{ $fileUrl }}" target="_blank" rel="noopener"
                           class="w-full py-2.5 px-4 bg-primary/10 hover:bg-primary hover:text-white text-primary font-bold rounded-xl transition-all duration-300 flex justify-center items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">visibility</span> Lihat Dokumen
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
<x-footer />

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    function renderPdfThumb(canvas) {
        const url = canvas.dataset.pdfUrl;

        pdfjsLib.getDocument(url).promise
            .then((pdf) => pdf.getPage(1))
            .then((page) => {
                const wrap = canvas.closest('.pdf-thumb-wrap');
                const scale = wrap.clientWidth / page.getViewport({ scale: 1 }).width;
                const viewport = page.getViewport({ scale });

                canvas.width = viewport.width;
                canvas.height = viewport.height;

                const ctx = canvas.getContext('2d');
                return page.render({ canvasContext: ctx, viewport }).promise;
            })
            .catch((err) => {
                console.error('Gagal memuat preview PDF:', url, err);
                canvas.classList.add('hidden');
                canvas.closest('.pdf-thumb-wrap')
                    .querySelector('.pdf-thumb-fallback')
                    .classList.remove('hidden');
                canvas.closest('.pdf-thumb-wrap')
                    .querySelector('.pdf-thumb-fallback')
                    .classList.add('flex');
            });
    }

    // Render tiap thumbnail hanya saat kartunya masuk viewport (hemat kinerja)
    const thumbObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                renderPdfThumb(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '200px' });

    document.querySelectorAll('.pdf-thumb').forEach((canvas) => thumbObserver.observe(canvas));
</script>
@endpush
@endsection
