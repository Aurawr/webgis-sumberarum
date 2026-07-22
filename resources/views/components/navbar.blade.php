<header class="bg-tertiary-fixed text-primary sticky top-0 backdrop-blur-md bg-opacity-90 shadow-sm z-50">
    <div class="flex justify-between items-center w-full px-6 max-w-7xl mx-auto h-20">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-3xl">map</span>
            <div class="flex flex-col">
                <span class="font-bold text-xl leading-tight">Desa Sumberarum</span>
                <span class="text-xs opacity-70">Kabupaten Magelang</span>
            </div>
        </div>
        <nav class="hidden md:flex gap-6">
            <a href="{{ url('/') }}" class="font-medium hover:text-secondary transition-colors pb-1">Beranda</a>
            <a href="{{ url('/infografis') }}" class="font-bold text-secondary border-b-2 border-secondary pb-1">Infografis</a>
            <a href="{{ url('/#peta') }}" class="font-medium hover:text-secondary transition-colors pb-1">Peta Desa</a>
            <a href="{{ url('/#layanan') }}" class="font-medium hover:text-secondary transition-colors pb-1">Layanan Informasi</a>
        </nav>
        <button class="md:hidden text-primary">
            <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
    </div>
</header>
