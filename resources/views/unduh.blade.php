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
            'image' => 'https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=800&auto=format&fit=crop',
            'file' => 'Sumberarum_Dasar_Peta_Citra.pdf',
        ],
        [
            'judul' => 'Peta Penggunaan Lahan Sumberarum',
            'deskripsi' => 'Peta tematik yang menunjukkan klasifikasi penggunaan lahan dan vegetasi.',
            'image' => 'https://images.unsplash.com/photo-1614725585098-9040ebde1fb4?q=80&w=800&auto=format&fit=crop',
            'file' => 'Sumberarum_Dasar_Peta_Penggunaan_Lahan.pdf',
        ],
        [
            'judul' => 'Peta Bangunan Sumberarum',
            'deskripsi' => 'Peta persebaran dan lokasi bangunan yang terdapat di wilayah Desa Sumberarum.',
            'image' => 'https://images.unsplash.com/photo-1581404176156-324c44243641?q=80&w=800&auto=format&fit=crop',
            'file' => 'Sumberarum_Dasar_Peta_Bangunan.pdf',
        ],
        [
            'judul' => 'Peta Sarana dan Prasarana Sumberarum',
            'deskripsi' => 'Peta persebaran sarana dan prasarana yang tersedia di wilayah Desa Sumberarum.',
            'image' => 'https://images.unsplash.com/photo-1596720426673-e4e14290f0cc?q=80&w=800&auto=format&fit=crop',
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

                <!-- Preview Gambar & Efek Hover -->
                <a href="{{ $fileUrl }}" target="_blank" rel="noopener" class="relative group aspect-[4/3] overflow-hidden bg-gray-200 cursor-pointer block">
                    <img src="{{ $doc['image'] }}" alt="{{ $doc['judul'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

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
@endsection
