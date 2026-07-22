@extends('layouts.app')

@section('content')
    <x-navbar />

    @php
        $data = [
            'demografi' => ['total' => 3542],
            'luas_wilayah' => 450,
            'administrasi' => ['rt' => 18, 'rw' => 6, 'dusun' => 4],
            'lahan' => [
                'pertanian' => 55,
                'pemukiman' => 25,
                'hutan' => 15,
                'fasilitas' => 5,
            ],
            'infrastruktur' => 840,
            'wisata' => 5,
            'sarpras' => [
                'pendidikan' => 4,
                'kesehatan' => 2,
                'ibadah' => 8,
                'olahraga' => 3,
            ],
        ];
    @endphp

    <section
        class="bg-gradient-to-b from-surface-container-low to-surface text-on-surface py-16 px-margin-mobile md:px-gutter min-h-screen relative overflow-hidden"
        id="infografis">

        <div
            class="absolute top-0 left-0 w-64 h-64 bg-primary-fixed/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 z-0">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-fixed/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 z-0">
        </div>

        <div class="max-w-container-max mx-auto relative z-10">

            <div class="text-center max-w-3xl mx-auto mb-16 transform transition-all duration-700 hover:scale-105">
                <span
                    class="text-secondary font-label-lg tracking-wider uppercase bg-secondary-container/50 px-5 py-2 rounded-full shadow-sm">Statistik
                    Wilayah</span>
                <h1 class="font-headline-xl text-headline-xl text-primary mt-6 mb-4 drop-shadow-sm">Infografis Desa
                    Sumberarum</h1>
                <p class="font-body-lg text-on-surface-variant">Gambaran umum data demografi, wilayah administratif, sarana
                    prasarana, dan potensi desa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">

                <div
                    class="group bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white flex flex-col justify-between hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-lg font-bold text-on-surface-variant">Demografi</span>
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-fixed to-primary-container flex items-center justify-center text-primary group-hover:rotate-6 transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform">groups</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-display-lg-mobile font-extrabold text-primary mb-1 counter"
                            data-target="{{ $data['demografi']['total'] }}">0</h3>
                        <p class="text-body-md text-on-surface-variant font-medium">Total Jumlah Penduduk</p>
                    </div>
                </div>

                <div
                    class="group bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white flex flex-col justify-between hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-lg font-bold text-on-surface-variant">Geografis</span>
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-tertiary-fixed to-tertiary-container flex items-center justify-center text-on-tertiary-container group-hover:-rotate-6 transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform">landscape</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-baseline gap-2 mb-1">
                            <h3 class="text-display-lg-mobile font-extrabold text-primary counter"
                                data-target="{{ $data['luas_wilayah'] }}">0</h3>
                            <span class="text-body-md text-on-surface-variant font-bold">Ha</span>
                        </div>
                        <p class="text-body-md text-on-surface-variant font-medium">Total Luas Wilayah</p>
                    </div>
                </div>

                <div
                    class="group bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white flex flex-col justify-between hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-lg font-bold text-on-surface-variant">Administrasi</span>
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-secondary-container to-secondary flex items-center justify-center text-on-secondary-container group-hover:rotate-6 transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform">holiday_village</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-baseline gap-4 mb-1">
                            <span class="text-headline-xl font-extrabold text-primary"><span class="counter"
                                    data-target="{{ $data['administrasi']['rt'] }}">0</span> <span
                                    class="text-body-md text-on-surface-variant font-medium">RT</span></span>
                            <span class="text-headline-xl font-extrabold text-primary"><span class="counter"
                                    data-target="{{ $data['administrasi']['rw'] }}">0</span> <span
                                    class="text-body-md text-on-surface-variant font-medium">RW</span></span>
                        </div>
                        <p class="text-body-md text-on-surface-variant font-medium">Wilayah Rukun Tetangga</p>
                    </div>
                </div>

                <div
                    class="group bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white flex flex-col justify-between hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-lg font-bold text-on-surface-variant">Kewilayahan</span>
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-container to-primary flex items-center justify-center text-tertiary-fixed group-hover:-rotate-6 transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform">location_city</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-display-lg-mobile font-extrabold text-primary mb-1 counter"
                            data-target="{{ $data['administrasi']['dusun'] }}">0</h3>
                        <p class="text-body-md text-on-surface-variant font-medium">Dusun / Padukuhan</p>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter mt-gutter">

                <div
                    class="md:col-span-6 bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white hover:shadow-2xl transition-all duration-500">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="font-headline-lg text-[24px] text-primary font-bold">Penggunaan Lahan</h3>
                            <p class="font-body-md text-on-surface-variant">Persentase pembagian area wilayah desa</p>
                        </div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary animate-bounce">
                            <span class="material-symbols-outlined text-2xl">pie_chart</span>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="group">
                            <div class="flex justify-between text-body-md mb-2">
                                <span class="font-bold text-on-surface flex items-center gap-2"><span
                                        class="w-3 h-3 rounded-full bg-secondary"></span> Lahan Pertanian & Sawah</span>
                                <span class="font-bold text-primary">{{ $data['lahan']['pertanian'] }}%</span>
                            </div>
                            <div class="w-full bg-surface-container-highest rounded-full h-4 overflow-hidden shadow-inner">
                                <div class="bg-gradient-to-r from-secondary to-secondary-container h-4 rounded-full progress-bar transition-all duration-1000 ease-out w-0"
                                    data-width="{{ $data['lahan']['pertanian'] }}"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex justify-between text-body-md mb-2">
                                <span class="font-bold text-on-surface flex items-center gap-2"><span
                                        class="w-3 h-3 rounded-full bg-tertiary-container"></span> Pemukiman Penduduk</span>
                                <span class="font-bold text-primary">{{ $data['lahan']['pemukiman'] }}%</span>
                            </div>
                            <div class="w-full bg-surface-container-highest rounded-full h-4 overflow-hidden shadow-inner">
                                <div class="bg-gradient-to-r from-tertiary-container to-tertiary h-4 rounded-full progress-bar transition-all duration-1000 delay-100 ease-out w-0"
                                    data-width="{{ $data['lahan']['pemukiman'] }}"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex justify-between text-body-md mb-2">
                                <span class="font-bold text-on-surface flex items-center gap-2"><span
                                        class="w-3 h-3 rounded-full bg-primary-container"></span> Hutan & Perkebunan</span>
                                <span class="font-bold text-primary">{{ $data['lahan']['hutan'] }}%</span>
                            </div>
                            <div class="w-full bg-surface-container-highest rounded-full h-4 overflow-hidden shadow-inner">
                                <div class="bg-gradient-to-r from-primary-container to-primary h-4 rounded-full progress-bar transition-all duration-1000 delay-200 ease-out w-0"
                                    data-width="{{ $data['lahan']['hutan'] }}"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex justify-between text-body-md mb-2">
                                <span class="font-bold text-on-surface flex items-center gap-2"><span
                                        class="w-3 h-3 rounded-full bg-outline"></span> Fasilitas Umum & Lainnya</span>
                                <span class="font-bold text-primary">{{ $data['lahan']['fasilitas'] }}%</span>
                            </div>
                            <div class="w-full bg-surface-container-highest rounded-full h-4 overflow-hidden shadow-inner">
                                <div class="bg-gradient-to-r from-outline to-outline-variant h-4 rounded-full progress-bar transition-all duration-1000 delay-300 ease-out w-0"
                                    data-width="{{ $data['lahan']['fasilitas'] }}"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-gutter">

                    <div
                        class="group bg-gradient-to-br from-primary to-primary-container text-on-primary p-card-padding rounded-3xl shadow-xl flex flex-col justify-between hover:scale-[1.02] transition-transform duration-300 cursor-pointer relative overflow-hidden">
                        <div
                            class="absolute -right-4 -top-4 opacity-10 group-hover:scale-150 transition-transform duration-700">
                            <span class="material-symbols-outlined text-[120px]">domain</span>
                        </div>
                        <div class="flex items-center justify-between mb-4 relative z-10">
                            <span class="text-label-lg text-tertiary-fixed font-bold tracking-wider">INFRASTRUKTUR</span>
                            <div class="bg-white/20 p-2 rounded-xl backdrop-blur-sm">
                                <span class="material-symbols-outlined text-tertiary-fixed text-2xl">domain</span>
                            </div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-display-lg-mobile font-extrabold text-tertiary-fixed mb-1"><span
                                    class="counter" data-target="{{ $data['infrastruktur'] }}">0</span>+</h3>
                            <p class="text-body-md text-on-primary/90">Jumlah Bangunan Terdata</p>
                        </div>
                    </div>

                    <div
                        class="group bg-gradient-to-br from-tertiary-fixed to-tertiary-container text-on-tertiary-container p-card-padding rounded-3xl shadow-xl flex flex-col justify-between hover:scale-[1.02] transition-transform duration-300 cursor-pointer relative overflow-hidden">
                        <div
                            class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-45 transition-transform duration-700">
                            <span class="material-symbols-outlined text-[120px]">attractions</span>
                        </div>
                        <div class="flex items-center justify-between mb-4 relative z-10">
                            <span class="text-label-lg font-bold tracking-wider">PARIWISATA</span>
                            <div class="bg-primary/10 p-2 rounded-xl backdrop-blur-sm">
                                <span class="material-symbols-outlined text-2xl text-primary">attractions</span>
                            </div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-display-lg-mobile font-extrabold text-primary mb-1 counter"
                                data-target="{{ $data['wisata'] }}">0</h3>
                            <p class="text-body-md text-primary/80 font-bold">Destinasi Wisata Unggulan</p>
                        </div>
                    </div>

                    <div
                        class="sm:col-span-2 bg-white/60 backdrop-blur-xl p-card-padding rounded-3xl shadow-lg border border-white hover:shadow-2xl transition-all duration-300">
                        <h3 class="font-headline-lg text-[22px] text-primary font-bold mb-6">Fasilitas & Layanan</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">

                            @php
                                $ikonSarpras = [
                                    'pendidikan' => 'school',
                                    'kesehatan' => 'local_hospital',
                                    'ibadah' => 'mosque',
                                    'olahraga' => 'sports_soccer',
                                ];
                            @endphp

                            @foreach ($data['sarpras'] as $kategori => $jumlah)
                                <div
                                    class="group bg-surface hover:bg-primary-fixed/20 p-4 rounded-2xl transition-colors duration-300 border border-transparent hover:border-primary-fixed/50 cursor-pointer">
                                    <div
                                        class="w-12 h-12 mx-auto bg-surface-container-highest group-hover:bg-white rounded-full flex items-center justify-center mb-2 shadow-sm transition-colors duration-300">
                                        <span
                                            class="material-symbols-outlined text-secondary group-hover:scale-110 transition-transform">{{ $ikonSarpras[$kategori] }}</span>
                                    </div>
                                    <h4 class="font-extrabold text-primary text-xl counter"
                                        data-target="{{ $jumlah }}">0</h4>
                                    <p class="text-label-lg text-on-surface-variant text-[13px] capitalize font-semibold">
                                        {{ $kategori }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter')

            const animateCounters = () => {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target')
                    const duration = 2000
                    const increment = target / (duration / 16)
                    let current = 0

                    const updateCounter = () => {
                        current += increment
                        if (current < target) {
                            counter.innerText = Math.ceil(current).toLocaleString('id-ID')
                            requestAnimationFrame(updateCounter)
                        } else {
                            counter.innerText = target.toLocaleString('id-ID')
                        }
                    }
                    updateCounter()
                })
            }

            const progressBars = document.querySelectorAll('.progress-bar')
            const animateProgressBars = () => {
                progressBars.forEach(bar => {
                    const width = bar.getAttribute('data-width')
                    bar.style.width = width + '%'
                })
            }

            setTimeout(() => {
                animateCounters()
                animateProgressBars()
            }, 100)
        })
    </script>
@endpush
