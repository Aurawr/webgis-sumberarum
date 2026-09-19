@php
    // $doc: ['judul', 'deskripsi', 'file', 'dusun' => opsional]
    $fileUrl  = asset('dokumen/peta-unduh/' . $doc['file']);
    $isDusun  = !empty($doc['dusun']);
    $label    = $isDusun ? 'Dusun ' . $doc['dusun'] : 'Desa Sumberarum';
@endphp

<div id="{{ $isDusun ? 'dusun-' . Str::slug($doc['dusun']) : Str::slug($doc['judul']) }}"
     @if ($isDusun) data-dusun="{{ Str::lower($doc['dusun']) }}" @endif
     class="scroll-mt-32 bg-tertiary-fixed rounded-2xl overflow-hidden shadow-xl flex flex-col border border-white/20">

    <a href="{{ $fileUrl }}" target="_blank" rel="noopener"
       class="pdf-thumb-wrap relative group aspect-[4/3] overflow-hidden bg-gray-100 block">

        <canvas class="pdf-thumb absolute inset-0 w-full h-full object-contain"
                data-pdf-url="{{ $fileUrl }}"></canvas>

        {{-- Penanda wilayah: hijau solid untuk dusun, krem untuk peta se-desa --}}
        <span class="absolute top-3 left-3 z-10 px-3 py-1.5 rounded-full text-sm font-extrabold shadow-md
                     {{ $isDusun ? 'bg-primary text-white' : 'bg-tertiary-fixed text-primary border border-primary/20' }}">
            {{ $label }}
        </span>

        {{-- Muncul kalau render PDF gagal --}}
        <div class="pdf-thumb-fallback hidden absolute inset-0 items-center justify-center bg-primary/10">
            <span class="material-symbols-outlined text-primary/40" style="font-size:72px;">picture_as_pdf</span>
        </div>

        <div class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 focus-visible:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white backdrop-blur-[2px]">
            <span class="font-extrabold text-xl mb-4 text-center px-4 drop-shadow-md">{{ $doc['judul'] }}</span>
            <span class="w-14 h-14 rounded-full border-2 border-white/50 bg-white/20 flex items-center justify-center">
                <span class="material-symbols-outlined text-3xl">zoom_in</span>
            </span>
        </div>
    </a>

    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-xl font-bold text-primary mb-2">
            {{ $doc['judul'] }}@if ($isDusun) <span class="block text-base font-semibold text-primary/70">Dusun {{ $doc['dusun'] }}</span>@endif
        </h3>
        <p class="text-sm text-primary/80 mb-6 flex-grow leading-relaxed">{{ $doc['deskripsi'] }}</p>

        <div class="flex flex-col gap-3 mt-auto">
            <a href="{{ $fileUrl }}" download
               class="w-full py-2.5 px-4 bg-white/40 hover:bg-white text-primary border border-primary/20 font-bold rounded-xl transition-colors flex justify-center items-center gap-2 shadow-sm">
                <span class="material-symbols-outlined text-[20px]">download</span> Unduh PDF
            </a>

            <a href="{{ $fileUrl }}" target="_blank" rel="noopener"
               class="w-full py-2.5 px-4 bg-primary/10 hover:bg-primary hover:text-white text-primary font-bold rounded-xl transition-colors flex justify-center items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">visibility</span> Lihat peta
            </a>
        </div>
    </div>
</div>
