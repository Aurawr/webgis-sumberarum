@extends('layouts.app')

@section('content')
<x-navbar />

    <section class="bg-primary text-on-primary py-16 px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto text-center flex flex-col items-center gap-4">
            <span class="material-symbols-outlined text-tertiary-fixed text-6xl">info</span>
            <h1 class="font-display-lg text-headline-xl md:text-display-lg text-tertiary-fixed">Layanan Informasi Desa</h1>
            <p class="font-body-lg text-on-primary/90 max-w-2xl">
                Pusat informasi pelayanan publik, pengurusan surat administrasi, serta konsultasi tata ruang dan informasi geografis Desa Sumberarum.
            </p>
        </div>
    </section>

    <section class="bg-primary-container text-on-primary py-section-padding px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto">
            <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed mb-10 text-center">Kategori Layanan</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <div class="bg-surface-container rounded-3xl p-6 flex flex-col gap-4 text-on-surface shadow-lg border border-white/10 hover:translate-y-[-4px] transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-tertiary-fixed/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">badge</span>
                    </div>
                    <h3 class="font-headline-lg text-headline-lg text-primary font-bold">Administrasi Desa</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Pelayanan pembuatan Surat Keterangan Usaha (SKU), Surat Keterangan Domisili, Pengantar Nikah, dan surat pengantar administrasi lainnya.
                    </p>
                </div>

                <div class="bg-surface-container rounded-3xl p-6 flex flex-col gap-4 text-on-surface shadow-lg border border-white/10 hover:translate-y-[-4px] transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-tertiary-fixed/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">map_search</span>
                    </div>
                    <h3 class="font-headline-lg text-headline-lg text-primary font-bold">Informasi Spasial / GIS</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Informasi zonasi wilayah, pengecekan tata ruang desa, peta batas RT/RW, serta potensi lahan usaha & investasi desa.
                    </p>
                </div>

                <div class="bg-surface-container rounded-3xl p-6 flex flex-col gap-4 text-on-surface shadow-lg border border-white/10 hover:translate-y-[-4px] transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-tertiary-fixed/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">campaign</span>
                    </div>
                    <h3 class="font-headline-lg text-headline-lg text-primary font-bold">Pengaduan Masyarakat</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Fasilitas penyampaian aspirasi warga, laporan kerusakan fasilitas umum, saran pembangunan, dan keluhan layanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary text-on-primary py-section-padding px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto">
            <h2 class="font-headline-xl text-headline-xl text-tertiary-fixed mb-12 text-center">Alur Pengurusan Layanan</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-surface-container p-6 rounded-2xl text-on-surface text-center flex flex-col items-center gap-3">
                    <span class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg">1</span>
                    <h4 class="font-bold text-primary">Lengkapi Berkas</h4>
                    <p class="text-sm text-on-surface-variant">Siapkan KTP, KK, dan berkas pendukung sesuai kebutuhan layanan.</p>
                </div>
                <div class="bg-surface-container p-6 rounded-2xl text-on-surface text-center flex flex-col items-center gap-3">
                    <span class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg">2</span>
                    <h4 class="font-bold text-primary">Datang Ke Balai Desa</h4>
                    <p class="text-sm text-on-surface-variant">Kunjungi Kantor Desa Sumberarum pada jam kerja operational.</p>
                </div>
                <div class="bg-surface-container p-6 rounded-2xl text-on-surface text-center flex flex-col items-center gap-3">
                    <span class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg">3</span>
                    <h4 class="font-bold text-primary">Verifikasi Petugas</h4>
                    <p class="text-sm text-on-surface-variant">Petugas memproses berkas atau melakukan validasi lokasi GIS.</p>
                </div>
                <div class="bg-surface-container p-6 rounded-2xl text-on-surface text-center flex flex-col items-center gap-3">
                    <span class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg">4</span>
                    <h4 class="font-bold text-primary">Selesai</h4>
                    <p class="text-sm text-on-surface-variant">Dokumen atau permohonan selesai diproses dan siap digunakan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary-container py-12 px-margin-mobile md:px-gutter">
        <div class="max-w-container-max mx-auto bg-surface-container rounded-3xl p-8 md:p-12 text-on-surface flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div>
                <h3 class="font-headline-lg text-2xl text-primary font-bold mb-2">Jam Operasional Kantor Desa</h3>
                <p class="text-on-surface-variant">Senin - Kamis: 08.00 - 15.00 WIB | Jumat: 08.00 - 11.00 WIB</p>
            </div>
            <a href="https://wa.me/628123456789" target="_blank" class="bg-tertiary-fixed text-on-tertiary-fixed px-6 py-3 rounded-full font-bold hover:bg-white transition-all shadow-md flex items-center gap-2 shrink-0">
                <span class="material-symbols-outlined">chat</span>
                Hubungi WhatsApp Pelayanan
            </a>
        </div>
    </section>

    <footer
        class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container full-width rounded-t-lg relative mt-12">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin-mobile md:px-section-padding py-section-padding max-w-container-max mx-auto relative z-10">
            <div class="flex flex-col gap-6">
                <h3
                    class="font-headline-xl text-headline-xl text-on-primary dark:text-on-primary-container font-extrabold mb-4">
                    Desa<br />Sumberarum</h3>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-headline-lg text-headline-lg text-tertiary-fixed dark:text-tertiary-fixed-dim mb-2">Tautan
                    Penting</h4>
                <a class="font-body-md text-body-md text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-all"
                    href="#">Website Kabupaten Magelang</a>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-headline-lg text-headline-lg text-tertiary-fixed dark:text-tertiary-fixed-dim mb-2">Sosial
                    Media</h4>
                <a class="font-body-md text-body-md text-on-primary/80 dark:text-on-primary-container/80 hover:text-secondary-fixed transition-all"
                    href="#">Instagram</a>
            </div>
        </div>
    </footer>
@endsection
