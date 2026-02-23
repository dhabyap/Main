<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DHABY.DEV | Web Developer')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    @yield('extra_js_head')

    <style>
        :root {
            --bg-concrete: #E6E6E6;
            --text-rebar: #1A1A1A;
            --safety-orange: #FF3300;
            --beam-black: #000000;
        }

        body {
            background-color: var(--bg-concrete);
            color: var(--text-rebar);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            cursor: crosshair;
        }

        .font-tech {
            font-family: 'Space Mono', monospace;
        }

        /* The Grain - Analog Noise */
        .noise-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.08;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            mix-blend-mode: overlay;
        }

        /* Border Utilities */
        .border-beam {
            border: 2px solid var(--beam-black);
        }

        .border-beam-b {
            border-bottom: 2px solid var(--beam-black);
        }

        .border-beam-r {
            border-right: 2px solid var(--beam-black);
        }

        .border-beam-t {
            border-top: 2px solid var(--beam-black);
        }

        .border-beam-l {
            border-left: 2px solid var(--beam-black);
        }

        /* Responsive Borders */
        @media (min-width: 1024px) {
            .lg\:border-beam-r {
                border-right: 2px solid var(--beam-black);
            }

            .lg\:border-b-0 {
                border-bottom: 0;
            }
        }

        .tracking-tight-custom {
            letter-spacing: -0.04em;
        }

        /* Image Processing */
        .brutalist-img {
            filter: grayscale(100%) contrast(110%);
            transition: filter 0.1s linear;
        }

        .brutalist-img:hover {
            filter: grayscale(0%) contrast(100%);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            background: var(--bg-concrete);
            border-left: 1px solid black;
        }

        ::-webkit-scrollbar-thumb {
            background: black;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        @yield('extra_css')
    </style>
</head>

<body class="antialiased selection:bg-[#FF3300] selection:text-white pb-0">

    <!-- The Grain -->
    <div class="noise-overlay"></div>

    @include('partials.navbar')

    <!-- Spacer for Fixed Nav -->
    <div class="h-[74px] lg:h-20 w-full"></div>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Mobile Menu Script -->
    <script>
        const menuBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        let isMenuOpen = false;

        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
                menuIcon.setAttribute('icon', 'solar:close-square-linear');
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                document.body.style.overflow = '';
                menuIcon.setAttribute('icon', 'solar:hamburger-menu-linear');
            }
        }

        if (menuBtn) {
            menuBtn.addEventListener('click', toggleMenu);
        }

        // Close menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', toggleMenu);
        });
    </script>

    @yield('extra_js')

</body>

</html>