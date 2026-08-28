<header class="fixed top-0 left-0 right-0 z-50 pt-4 px-6 md:px-12 lg:px-16" id="main-header">
    <div class="transition-all duration-500 ease-in-out rounded-full max-w-7xl mx-auto border-2" id="navbar-bg">
        <div class="flex justify-between items-center w-full px-6 md:px-8 lg:px-10 h-16 md:h-18">

            <!-- Logo Section -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-80 transition-opacity duration-300">
                <img src="{{ asset('assets/images/umum/Logo Kab Magelang 2.png') }}" alt="Logo Kab Magelang" class="w-10 h-10 object-contain" />
                <div class="flex flex-col">
                    <span class="font-headline-lg text-primary dark:text-on-primary-fixed leading-tight text-[20px] md:text-[24px] font-bold">Desa Sumberarum</span>
                    <span class="font-label-lg text-label-lg text-primary/70 dark:text-on-primary-fixed/70 text-[12px]">Kabupaten Magelang</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-1">
                <a href="{{ url('/') }}"
                    class="relative px-4 py-2 text-[15px] {{ request()->is('/') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80' }} hover:text-secondary dark:hover:text-secondary-fixed transition-all duration-300 group">
                    <span class="relative z-10">Beranda</span>
                    @if(request()->is('/'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full group-hover:w-12 transition-all duration-300"></span>
                    @endif
                </a>

                <a href="{{ url('/infografis') }}"
                    class="relative px-4 py-2 text-[15px] {{ request()->is('infografis') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80' }} hover:text-secondary dark:hover:text-secondary-fixed transition-all duration-300 group">
                    <span class="relative z-10">Infografis</span>
                    @if(request()->is('infografis'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full group-hover:w-12 transition-all duration-300"></span>
                    @endif
                </a>

                <a href="{{ url('/petadesa') }}"
                    class="relative px-4 py-2 text-[15px] {{ request()->is('petadesa') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80' }} hover:text-secondary dark:hover:text-secondary-fixed transition-all duration-300 group">
                    <span class="relative z-10">Peta Desa</span>
                    @if(request()->is('petadesa'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full group-hover:w-12 transition-all duration-300"></span>
                    @endif
                </a>

                <a href="{{ url('/layanan-informasi') }}"
                    class="relative px-4 py-2 text-[15px] {{ request()->is('layanan-informasi') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80' }} hover:text-secondary dark:hover:text-secondary-fixed transition-all duration-300 group">
                    <span class="relative z-10">Layanan Informasi</span>
                    @if(request()->is('layanan-informasi'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full group-hover:w-12 transition-all duration-300"></span>
                    @endif
                </a>

                <a href="{{ url('/unduh') }}"
                    class="relative px-4 py-2 text-[15px] {{ request()->is('unduh') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80' }} hover:text-secondary dark:hover:text-secondary-fixed transition-all duration-300 group">
                    <span class="relative z-10">Unduh Peta</span>
                    @if(request()->is('unduh'))
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-12 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full"></span>
                    @else
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-secondary dark:bg-secondary-fixed rounded-full group-hover:w-12 transition-all duration-300"></span>
                    @endif
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-primary dark:text-on-primary-fixed hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-300 p-2"
                id="mobile-menu-button"
                aria-label="Toggle menu">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="lg:hidden fixed inset-0 top-20 bg-white/95 dark:bg-primary/95 backdrop-blur-xl transform -translate-x-full transition-transform duration-300 ease-in-out"
        id="mobile-menu">
        <nav class="flex flex-col p-6 gap-1">
            <a href="{{ url('/') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('/') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80 hover:text-secondary dark:hover:text-secondary-fixed' }} hover:bg-secondary/10 dark:hover:bg-secondary-fixed/10 rounded-lg transition-all duration-200">
                Beranda
            </a>
            <a href="{{ url('/infografis') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('infografis') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80 hover:text-secondary dark:hover:text-secondary-fixed' }} hover:bg-secondary/10 dark:hover:bg-secondary-fixed/10 rounded-lg transition-all duration-200">
                Infografis
            </a>
            <a href="{{ url('/petadesa') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('petadesa') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80 hover:text-secondary dark:hover:text-secondary-fixed' }} hover:bg-secondary/10 dark:hover:bg-secondary-fixed/10 rounded-lg transition-all duration-200">
                Peta Desa
            </a>
            <a href="{{ url('/layanan-informasi') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('layanan-informasi') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80 hover:text-secondary dark:hover:text-secondary-fixed' }} hover:bg-secondary/10 dark:hover:bg-secondary-fixed/10 rounded-lg transition-all duration-200">
                Layanan Informasi
            </a>
            <a href="{{ url('/unduh') }}"
                class="px-4 py-4 text-[16px] {{ request()->is('unduh') ? 'font-semibold text-secondary dark:text-secondary-fixed' : 'font-medium text-primary/80 dark:text-on-primary-fixed/80 hover:text-secondary dark:hover:text-secondary-fixed' }} hover:bg-secondary/10 dark:hover:bg-secondary-fixed/10 rounded-lg transition-all duration-200">
                Unduh Peta
            </a>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Navbar Scroll Effect - Glassmorphism Transition
        const navbarBg = document.getElementById('navbar-bg');

        if (navbarBg) {
            function updateNavbarOnScroll() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > 50) {
                    // Scrolled state - Apply glassmorphism with contrasting border
                    navbarBg.classList.add(
                        'bg-white/70',
                        'dark:bg-primary/80',
                        'backdrop-blur-xl',
                        'shadow-lg',
                        'shadow-black/10'
                    );
                    navbarBg.classList.remove('border-transparent');
                    navbarBg.classList.add('border-primary/30', 'dark:border-white/30');
                } else {
                    // Top state - Transparent/flat with subtle border
                    navbarBg.classList.remove(
                        'bg-white/70',
                        'dark:bg-primary/80',
                        'backdrop-blur-xl',
                        'shadow-lg',
                        'shadow-black/10',
                        'border-primary/30',
                        'dark:border-white/30'
                    );
                    navbarBg.classList.add('border-transparent');
                }
            }

            // Initial check
            updateNavbarOnScroll();

            // Listen to scroll events with throttling for performance
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                if (scrollTimeout) {
                    window.cancelAnimationFrame(scrollTimeout);
                }
                scrollTimeout = window.requestAnimationFrame(function() {
                    updateNavbarOnScroll();
                });
            }, { passive: true });
        }

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                const isOpen = !mobileMenu.classList.contains('-translate-x-full');

                if (isOpen) {
                    mobileMenu.classList.add('-translate-x-full');
                    mobileMenuButton.querySelector('.material-symbols-outlined').textContent = 'menu';
                    document.body.style.overflow = '';
                } else {
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

        // Smooth scroll behavior for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href.length > 1) {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        const headerHeight = 80;
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
