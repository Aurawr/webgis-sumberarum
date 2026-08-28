<!-- Full-width to Floating Pill Navbar with Transparent to Glassmorphism Transition -->
<header class="fixed left-0 right-0 z-50 transition-all duration-500 ease-in-out top-0" id="navbar-wrapper">
    <!-- State Awal: TRANSPARAN PENUH (Datar, tanpa background) -->
    <div class="transition-all duration-500 ease-in-out" id="navbar-container">
        <div class="flex justify-between items-center w-full px-6 md:px-8 lg:px-12 h-20 max-w-7xl mx-auto">

            <!-- Logo Section -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-80 transition-opacity duration-300">
                <img src="{{ asset('assets/images/umum/Logo Kab Magelang 2.png') }}" alt="Logo Kab Magelang" class="w-10 h-10 object-contain drop-shadow-lg" />
                <div class="flex flex-col">
                    <span class="font-bold text-[20px] md:text-[22px] leading-tight drop-shadow-lg transition-colors duration-500" id="logo-text">Desa Sumberarum</span>
                    <span class="text-[11px] drop-shadow-md transition-colors duration-500" id="logo-subtitle">Kabupaten Magelang</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-2" id="nav-links">
                <a href="{{ url('/') }}"
                    class="nav-link relative px-4 py-2 text-[15px] {{ request()->is('/') ? 'font-semibold' : 'font-medium' }} transition-all duration-500 group">
                    <span class="relative z-10 drop-shadow-md">Beranda</span>
                    @if(request()->is('/'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 rounded-full nav-underline"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 rounded-full group-hover:w-12 transition-all duration-300 nav-underline"></span>
                    @endif
                </a>

                <a href="{{ url('/infografis') }}"
                    class="nav-link relative px-4 py-2 text-[15px] {{ request()->is('infografis') ? 'font-semibold' : 'font-medium' }} transition-all duration-500 group">
                    <span class="relative z-10 drop-shadow-md">Infografis</span>
                    @if(request()->is('infografis'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 rounded-full nav-underline"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 rounded-full group-hover:w-12 transition-all duration-300 nav-underline"></span>
                    @endif
                </a>

                <a href="{{ url('/petadesa') }}"
                    class="nav-link relative px-4 py-2 text-[15px] {{ request()->is('petadesa') ? 'font-semibold' : 'font-medium' }} transition-all duration-500 group">
                    <span class="relative z-10 drop-shadow-md">Peta Desa</span>
                    @if(request()->is('petadesa'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 rounded-full nav-underline"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 rounded-full group-hover:w-12 transition-all duration-300 nav-underline"></span>
                    @endif
                </a>

                <a href="{{ url('/layanan-informasi') }}"
                    class="nav-link relative px-4 py-2 text-[15px] {{ request()->is('layanan-informasi') ? 'font-semibold' : 'font-medium' }} transition-all duration-500 group">
                    <span class="relative z-10 drop-shadow-md">Layanan Informasi</span>
                    @if(request()->is('layanan-informasi'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 rounded-full nav-underline"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 rounded-full group-hover:w-12 transition-all duration-300 nav-underline"></span>
                    @endif
                </a>

                <a href="{{ url('/unduh') }}"
                    class="nav-link relative px-4 py-2 text-[15px] {{ request()->is('unduh') ? 'font-semibold' : 'font-medium' }} transition-all duration-500 group">
                    <span class="relative z-10 drop-shadow-md">Unduh Peta</span>
                    @if(request()->is('unduh'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 rounded-full nav-underline"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 rounded-full group-hover:w-12 transition-all duration-300 nav-underline"></span>
                    @endif
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden transition-all duration-500 p-2 drop-shadow-lg"
                id="mobile-menu-button"
                aria-label="Toggle menu">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu with Glassmorphism -->
    <div class="lg:hidden fixed inset-0 top-20 bg-white/95 dark:bg-gray-900/95 backdrop-blur-2xl transform -translate-x-full transition-transform duration-300 ease-in-out z-40 border-t border-white/20 dark:border-gray-700/30"
        id="mobile-menu">
        <nav class="flex flex-col p-6 gap-1">
            <a href="{{ url('/') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('/') ? 'font-semibold text-gray-900 dark:text-white bg-gray-900/5 dark:bg-white/10' : 'font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }} hover:bg-gray-900/5 dark:hover:bg-white/10 rounded-lg transition-all duration-200 backdrop-blur-sm">
                Beranda
            </a>
            <a href="{{ url('/infografis') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('infografis') ? 'font-semibold text-gray-900 dark:text-white bg-gray-900/5 dark:bg-white/10' : 'font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }} hover:bg-gray-900/5 dark:hover:bg-white/10 rounded-lg transition-all duration-200 backdrop-blur-sm">
                Infografis
            </a>
            <a href="{{ url('/petadesa') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('petadesa') ? 'font-semibold text-gray-900 dark:text-white bg-gray-900/5 dark:bg-white/10' : 'font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }} hover:bg-gray-900/5 dark:hover:bg-white/10 rounded-lg transition-all duration-200 backdrop-blur-sm">
                Peta Desa
            </a>
            <a href="{{ url('/layanan-informasi') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('layanan-informasi') ? 'font-semibold text-gray-900 dark:text-white bg-gray-900/5 dark:bg-white/10' : 'font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }} hover:bg-gray-900/5 dark:hover:bg-white/10 rounded-lg transition-all duration-200 backdrop-blur-sm">
                Layanan Informasi
            </a>
            <a href="{{ url('/unduh') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('unduh') ? 'font-semibold text-gray-900 dark:text-white bg-gray-900/5 dark:bg-white/10' : 'font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }} hover:bg-gray-900/5 dark:hover:bg-white/10 rounded-lg transition-all duration-200 backdrop-blur-sm">
                Unduh Peta
            </a>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========================================
        // TRANSPARENT TO GLASSMORPHISM TRANSITION
        // State 1: Datar & Transparan
        // State 2: Floating Pill & Glassmorphism
        // ========================================
        const navbarWrapper = document.getElementById('navbar-wrapper');
        const navbarContainer = document.getElementById('navbar-container');
        const logoText = document.getElementById('logo-text');
        const logoSubtitle = document.getElementById('logo-subtitle');
        const navLinks = document.querySelectorAll('.nav-link');
        const navUnderlines = document.querySelectorAll('.nav-underline');
        const mobileBtn = document.getElementById('mobile-menu-button');

        if (navbarWrapper && navbarContainer) {
            function updateNavbarState() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > 50) {
                    // ========================================
                    // STATE 2: FLOATING PILL + GLASSMORPHISM
                    // ========================================

                    // Wrapper: Turun dari atas
                    navbarWrapper.classList.remove('top-0');
                    navbarWrapper.classList.add('top-4');

                    // Container: Glassmorphism pill
                    navbarContainer.classList.add(
                        'bg-white/50',         // Background SANGAT transparan (50%)
                        'dark:bg-gray-900/50',
                        'backdrop-blur-2xl',   // Blur intens
                        'rounded-full',        // Pill shape
                        'shadow-2xl',          // Shadow besar
                        'shadow-gray-900/10',
                        'dark:shadow-black/30',
                        'border',
                        'border-white/20',     // Border subtle
                        'dark:border-gray-700/30',
                        'max-w-5xl',
                        'mx-auto',
                        'w-[90%]'
                    );

                    // Text colors: Gelap untuk kontras dengan background terang
                    logoText.classList.remove('text-white');
                    logoText.classList.add('text-gray-900', 'dark:text-white');

                    logoSubtitle.classList.remove('text-white/90');
                    logoSubtitle.classList.add('text-gray-600', 'dark:text-gray-300');

                    navLinks.forEach(link => {
                        link.classList.remove('text-white', 'hover:text-white/80');
                        link.classList.add('text-gray-700', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
                    });

                    navUnderlines.forEach(underline => {
                        underline.classList.remove('bg-white');
                        underline.classList.add('bg-gray-900', 'dark:bg-white');
                    });

                    mobileBtn.classList.remove('text-white', 'hover:text-white/80');
                    mobileBtn.classList.add('text-gray-900', 'dark:text-white', 'hover:text-gray-700', 'dark:hover:text-gray-300');

                } else {
                    // ========================================
                    // STATE 1: DATAR & TRANSPARAN PENUH
                    // ========================================

                    // Wrapper: Menempel di atas
                    navbarWrapper.classList.remove('top-4');
                    navbarWrapper.classList.add('top-0');

                    // Container: Hapus semua styling (transparan penuh)
                    navbarContainer.classList.remove(
                        'bg-white/50',
                        'dark:bg-gray-900/50',
                        'backdrop-blur-2xl',
                        'rounded-full',
                        'shadow-2xl',
                        'shadow-gray-900/10',
                        'dark:shadow-black/30',
                        'border',
                        'border-white/20',
                        'dark:border-gray-700/30',
                        'max-w-5xl',
                        'mx-auto',
                        'w-[90%]'
                    );

                    // Text colors: Putih untuk kontras dengan background (video/image)
                    logoText.classList.remove('text-gray-900', 'dark:text-white');
                    logoText.classList.add('text-white');

                    logoSubtitle.classList.remove('text-gray-600', 'dark:text-gray-300');
                    logoSubtitle.classList.add('text-white/90');

                    navLinks.forEach(link => {
                        link.classList.remove('text-gray-700', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
                        link.classList.add('text-white', 'hover:text-white/80');
                    });

                    navUnderlines.forEach(underline => {
                        underline.classList.remove('bg-gray-900', 'dark:bg-white');
                        underline.classList.add('bg-white');
                    });

                    mobileBtn.classList.remove('text-gray-900', 'dark:text-white', 'hover:text-gray-700', 'dark:hover:text-gray-300');
                    mobileBtn.classList.add('text-white', 'hover:text-white/80');
                }
            }

            // Initial state check
            updateNavbarState();

            // Scroll listener dengan optimization
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                if (scrollTimeout) {
                    window.cancelAnimationFrame(scrollTimeout);
                }
                scrollTimeout = window.requestAnimationFrame(function() {
                    updateNavbarState();
                });
            }, { passive: true });
        }

        // ========================================
        // MOBILE MENU TOGGLE
        // ========================================
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                const isOpen = !mobileMenu.classList.contains('-translate-x-full');

                if (isOpen) {
                    // Close menu
                    mobileMenu.classList.add('-translate-x-full');
                    mobileMenuButton.querySelector('.material-symbols-outlined').textContent = 'menu';
                    document.body.style.overflow = '';
                } else {
                    // Open menu
                    mobileMenu.classList.remove('-translate-x-full');
                    mobileMenuButton.querySelector('.material-symbols-outlined').textContent = 'close';
                    document.body.style.overflow = 'hidden';
                }
            });

            // Close menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('-translate-x-full');
                    mobileMenuButton.querySelector('.material-symbols-outlined').textContent = 'menu';
                    document.body.style.overflow = '';
                });
            });

            // Close menu on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !mobileMenu.classList.contains('-translate-x-full')) {
                    mobileMenu.classList.add('-translate-x-full');
                    mobileMenuButton.querySelector('.material-symbols-outlined').textContent = 'menu';
                    document.body.style.overflow = '';
                }
            });
        }

        // ========================================
        // SMOOTH SCROLL FOR ANCHOR LINKS
        // ========================================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href.length > 1) {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        const headerHeight = 100;
                        const targetPosition = target.offsetTop - headerHeight;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    });
</script>
