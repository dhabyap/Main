@extends('layouts.main')

@section('content')
    <!-- A. Hero: The Interface -->
    <section class="w-full border-beam-b grid grid-cols-1 lg:grid-cols-12 min-h-[75vh] lg:min-h-[85vh]">
        <!-- Left: The Visual -->
        <div class="lg:col-span-8 border-beam-b lg:border-b-0 lg:border-beam-r relative overflow-hidden group order-1 h-[40vh] lg:h-auto">
            <div class="absolute inset-0 bg-cover bg-center brutalist-img"
                style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop');">
            </div>
            <div class="absolute top-4 left-4 bg-white border-beam p-2 font-tech text-[10px] lg:text-xs z-10">
                ROLE: WEB DEVELOPER // FULL-STACK
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#1A1A1A]/80 to-transparent pointer-events-none"></div>
        </div>

        <!-- Right: The Introduction -->
        <div class="lg:col-span-4 flex flex-col justify-between bg-[#E6E6E6] p-6 lg:p-10 relative order-2">
            <div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-3 lg:mb-4 flex items-center gap-2">
                    <iconify-icon icon="solar:record-circle-linear" width="12" class="animate-pulse"></iconify-icon>
                    AVAILABLE FOR PROJECTS
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tight-custom leading-[0.85] mb-4 lg:mb-6">
                    Build<br>Your<br>Digital.
                </h1>
                <div class="w-12 h-2 bg-[#FF3300] mb-4 lg:mb-6"></div>
                <p class="font-semibold text-base lg:text-lg leading-snug max-w-sm">
                    Web developer yang bantu bisnis kamu go digital. Dari landing page sampai sistem operasional lengkap.
                </p>
            </div>

            <div class="mt-8 lg:mt-0 space-y-3">
                <a href="https://wa.me/6285156416716?text=Halo%20Dhaby%2C%20saya%20tertarik%20dengan%20jasa%20web%20development%20Anda"
                    target="_blank"
                    class="group block w-full border-beam bg-[#FF3300] hover:bg-black text-white transition-all duration-0 p-4 text-center uppercase font-bold tracking-wider flex justify-between items-center text-sm lg:text-base">
                    <span>Hubungi via WhatsApp</span>
                    <iconify-icon icon="solar:arrow-right-up-linear" width="20"></iconify-icon>
                </a>
                <a href="#services"
                    class="group block w-full border-beam bg-transparent hover:bg-black hover:text-white transition-all duration-0 p-4 text-center uppercase font-bold tracking-wider flex justify-between items-center text-sm lg:text-base">
                    <span>Lihat Layanan</span>
                    <iconify-icon icon="solar:arrow-right-down-linear" width="20"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- B. Services: What I Offer -->
    <section class="w-full border-beam-b" id="services">
        <div class="bg-black text-white px-4 lg:px-6 py-2 font-tech text-[10px] lg:text-xs border-beam-b tracking-widest uppercase flex items-center gap-2">
            <iconify-icon icon="solar:widget-linear" width="14"></iconify-icon> Layanan
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 hover:bg-white transition-colors duration-0 group">
                <div class="font-tech text-[10px] text-[#FF3300] mb-4 tracking-widest">SVC_01</div>
                <h3 class="text-2xl lg:text-3xl font-bold uppercase tracking-tight-custom leading-none mb-3">Landing<br>Page</h3>
                <div class="w-full h-[2px] bg-black mb-4"></div>
                <p class="text-sm font-medium leading-relaxed opacity-80 mb-4">Website statis profesional untuk showcase bisnis, produk, atau jasa. Fast loading, SEO ready, mobile friendly.</p>
                <div class="font-tech text-[10px] text-gray-500 uppercase">Tech: HTML/CSS, Tailwind, Alpine.js</div>
            </div>

            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 hover:bg-white transition-colors duration-0 group">
                <div class="font-tech text-[10px] text-[#FF3300] mb-4 tracking-widest">SVC_02</div>
                <h3 class="text-2xl lg:text-3xl font-bold uppercase tracking-tight-custom leading-none mb-3">Web<br>Application</h3>
                <div class="w-full h-[2px] bg-black mb-4"></div>
                <p class="text-sm font-medium leading-relaxed opacity-80 mb-4">Aplikasi web custom sesuai kebutuhan bisnis. Dashboard, manajemen data, workflow otomatis, integrasi API.</p>
                <div class="font-tech text-[10px] text-gray-500 uppercase">Tech: Laravel, React, Next.js</div>
            </div>

            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 hover:bg-white transition-colors duration-0 group">
                <div class="font-tech text-[10px] text-[#FF3300] mb-4 tracking-widest">SVC_03</div>
                <h3 class="text-2xl lg:text-3xl font-bold uppercase tracking-tight-custom leading-none mb-3">POS<br>System</h3>
                <div class="w-full h-[2px] bg-black mb-4"></div>
                <p class="text-sm font-medium leading-relaxed opacity-80 mb-4">Sistem point of sale lengkap untuk retail, F&B, atau service. Multi-wallet, laporan keuangan, inventory management.</p>
                <div class="font-tech text-[10px] text-gray-500 uppercase">Tech: Laravel, Blade, MySQL</div>
            </div>

            <div class="p-6 lg:p-8 hover:bg-white transition-colors duration-0 group">
                <div class="font-tech text-[10px] text-[#FF3300] mb-4 tracking-widest">SVC_04</div>
                <h3 class="text-2xl lg:text-3xl font-bold uppercase tracking-tight-custom leading-none mb-3">AI &<br>Automation</h3>
                <div class="w-full h-[2px] bg-black mb-4"></div>
                <p class="text-sm font-medium leading-relaxed opacity-80 mb-4">Otomasi proses bisnis dengan AI. Web scraping, data analysis, chatbot, integrasi dengan platform existing.</p>
                <div class="font-tech text-[10px] text-gray-500 uppercase">Tech: Python, FastAPI, AI Agents</div>
            </div>
        </div>
    </section>

    <!-- C. Tech Stack Marquee -->
    <section class="w-full border-beam-b overflow-hidden bg-white" id="stack">
        <div class="bg-black text-white px-4 lg:px-6 py-2 font-tech text-[10px] lg:text-xs border-beam-b tracking-widest uppercase flex items-center gap-2">
            <iconify-icon icon="solar:cpu-linear" width="14"></iconify-icon> Tech Stack
        </div>

        <div class="flex whitespace-nowrap overflow-hidden border-beam-b bg-[#E6E6E6] py-6 lg:py-8">
            <div class="flex animate-marquee">
                @php
                    $stacks = [
                        ['name' => 'Laravel', 'icon' => 'logos:laravel'],
                        ['name' => 'React', 'icon' => 'logos:react'],
                        ['name' => 'Next.js', 'icon' => 'logos:nextjs-icon'],
                        ['name' => 'Vue.js', 'icon' => 'logos:vue'],
                        ['name' => 'Tailwind', 'icon' => 'logos:tailwindcss-icon'],
                        ['name' => 'MySQL', 'icon' => 'logos:mysql-icon'],
                        ['name' => 'Python', 'icon' => 'logos:python-icon'],
                        ['name' => 'Alpine.js', 'icon' => 'skill-icons:alpine-light'],
                        ['name' => 'Node.js', 'icon' => 'logos:nodejs-icon'],
                        ['name' => 'Docker', 'icon' => 'logos:docker-icon'],
                        ['name' => 'TypeScript', 'icon' => 'logos:typescript-icon'],
                        ['name' => 'PHP', 'icon' => 'logos:php-icon'],
                    ];
                    $stacks = array_merge($stacks, $stacks);
                @endphp
                @foreach($stacks as $stack)
                    <div class="flex items-center mx-6 lg:mx-8 gap-3 lg:gap-4 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
                        <iconify-icon icon="{{ $stack['icon'] }}" width="24" class="lg:w-[32px]"></iconify-icon>
                        <span class="font-bold text-lg lg:text-xl uppercase">{{ $stack['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- D. Portfolio: Selected Projects -->
    <section class="w-full border-beam-b bg-[#1A1A1A]" id="work">
        <div class="border-beam-b bg-[#E6E6E6] p-4 flex justify-between items-center sticky top-[74px] lg:top-20 z-30 shadow-md">
            <h2 class="text-lg lg:text-xl font-bold uppercase tracking-tight">Portfolio</h2>
            <span class="font-tech text-[10px] lg:text-xs border border-black px-2 py-1 bg-white">SELECTED WORKS</span>
        </div>

        {{-- ============ PROJECT 1: ZAKU POS ============ --}}
        <a href="https://zaku.abysoft.my.id" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1556740738-b6c6ce8f58aa?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-[#FF3300] text-white font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:case-minimalistic-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Professional
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: POS System // Full-Stack</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">ZAKU<br>POS</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Sistem point of sale lengkap dengan multi-wallet, manajemen transaksi, laporan keuangan real-time, dan role-based access control. REST API dengan JWT authentication.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Laravel 11</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Blade</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">MySQL</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">JWT Auth</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Alpine.js</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    Live Demo <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 2: IDX SAHAM ============ --}}
        <a href="http://idx.abysoft.my.id" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1642790106117-e829e14a795f?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-[#FF3300] text-white font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:case-minimalistic-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Professional
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Stock Dashboard // IDX Indonesia</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">IDX<br>SAHAM</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Dashboard analisis saham Indonesia (IDX). Bandarmologi, broker summary, shareholder analysis, dan automated data pipeline dari scraping.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Laravel</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">FastAPI</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Python</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Vue.js</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">MySQL</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    Live Demo <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 2: RADAR KLIEN ============ --}}
        <a href="https://github.com/dhabyap/google-maps-leads" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Dashboard // Web Scraping</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">RADAR<br>KLIEN</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Dashboard untuk scraping leads bisnis dari Google Maps. Filter berdasarkan kategori, rating, keberadaan website. Otomasi prospek untuk client acquisition.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Laravel</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Google Maps API</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Web Scraping</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Blade</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 3: SAHAM AI ============ --}}
        <a href="https://github.com/dhabyap/saham-ai" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: AI Dashboard // Stock Analysis</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">SAHAM<br>AI</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Platform analisis saham berbasis AI dengan backtesting otomatis, technical indicators, dan signal generation untukIDX Indonesia.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">FastAPI</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Python</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">AI/ML</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Vue.js</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 4: ALPHA TRACKER ============ --}}
        <a href="https://github.com/dhabyap/AlphaTracker" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1621761191319-c6fb62004040?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Crypto Dashboard // Tracking</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">ALPHA<br>TRACKER</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Dashboard tracking token crypto real-time. Integrasikan Birdeye API untuk monitoring harga, volume, dan whale activity.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">HTML/JS</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Birdeye API</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Crypto</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 5: NORELLE BEADS ============ --}}
        <a href="https://github.com/dhabyap/norelle-beads" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1515562141589-67f0d569b986?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: E-Commerce // Jewelry</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">NORELLE<br>BEADS</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Website e-commerce untuk brand jewelry handmade. Katalog produk, shopping cart, dan payment gateway integration.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Laravel</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">E-Commerce</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">MySQL</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 6: STELLAR DAPP ============ --}}
        <a href="https://github.com/dhabyap/stellar-payment-dapp" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1639762681057-407e36bf4b81?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Web3 // Blockchain Payment</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">STELLAR<br>DAPP</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Decentralized application untuk payment via Stellar blockchain. Send/receive XLM dengan wallet integration dan transaction history.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">TypeScript</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Stellar</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Web3</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Next.js</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 7: BOT TRADING IDX ============ --}}
        <a href="https://github.com/dhabyap/Bot-Trading" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Trading Bot // Automation</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">BOT<br>TRADING</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Automated trading bot untuk IDX & crypto. Technical indicators, signal generation, dan Telegram notification real-time.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Python</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Trading Bot</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Telegram Bot</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    View on GitHub <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 8: BIO ============ --}}
        <a href="https://bio.abysoft.my.id" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Personal
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Link-in-Bio // Landing Page</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">PERSONAL<br>BIO</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Link-in-bio personal page dengan animasi interaktif. Centralized links untuk semua platform social media dan portfolio.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Laravel</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Blade</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">CSS Animation</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    Live Demo <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>

        {{-- ============ PROJECT 9: TELEGRAM CHANNEL ============ --}}
        <a href="https://t.me/byb0x_AlphaLab" target="_blank" class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1611605698335-8b1569810432?q=80&w=2340&auto=format&fit=crop');">
            </div>
            <div class="absolute inset-0 bg-[#0088cc]/20 mix-blend-multiply pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20">
                    <div class="bg-[#0088cc] text-white font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        <iconify-icon icon="solar:case-minimalistic-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                        Community
                    </div>
                </div>
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest">TYPE: Content Channel // Crypto & Saham</div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">BY0X<br>ALPHALAB</h3>
                <p class="text-sm text-white/80 mb-4 max-w-md hidden lg:block">Telegram channel untuk share analisis crypto & saham Indonesia. Market update, signal trading, dan research insight.</p>
                <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Crypto</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Saham IDX</span>
                    <span class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">Market Analysis</span>
                </div>
                <div class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#0088cc] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                    Join Channel <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                </div>
            </div>
        </a>
    </section>

    <!-- E. Process: How I Work -->
    <section class="w-full border-beam-b" id="process">
        <div class="bg-black text-white px-4 lg:px-6 py-2 font-tech text-[10px] lg:text-xs border-beam-b tracking-widest uppercase flex items-center gap-2">
            <iconify-icon icon="solar:routing-linear" width="14"></iconify-icon> Proses Kerja
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4">
            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 bg-white hover:bg-[#FF3300] hover:text-white transition-colors duration-0 group">
                <div class="font-tech text-4xl lg:text-5xl font-bold opacity-20 group-hover:opacity-100 mb-4">01</div>
                <h3 class="text-lg font-bold uppercase mb-2">Konsultasi</h3>
                <p class="text-sm opacity-80">Diskusi kebutuhan bisnis, target audience, dan fitur yang dibutuhkan.</p>
            </div>
            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 group">
                <div class="font-tech text-4xl lg:text-5xl font-bold opacity-20 group-hover:opacity-100 mb-4">02</div>
                <h3 class="text-lg font-bold uppercase mb-2">Desain</h3>
                <p class="text-sm opacity-80">Wireframe dan mockup UI/UX sesuai brand identity bisnis kamu.</p>
            </div>
            <div class="border-beam-b md:border-b-0 lg:border-beam-r p-6 lg:p-8 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 group">
                <div class="font-tech text-4xl lg:text-5xl font-bold opacity-20 group-hover:opacity-100 mb-4">03</div>
                <h3 class="text-lg font-bold uppercase mb-2">Development</h3>
                <p class="text-sm opacity-80">Coding full-stack dengan best practices, testing, dan version control.</p>
            </div>
            <div class="p-6 lg:p-8 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 group">
                <div class="font-tech text-4xl lg:text-5xl font-bold opacity-20 group-hover:opacity-100 mb-4">04</div>
                <h3 class="text-lg font-bold uppercase mb-2">Launch</h3>
                <p class="text-sm opacity-80">Deploy, training penggunaan, dan support pascapeluncuran.</p>
            </div>
        </div>
    </section>

    <!-- F. Why Me -->
    <section class="w-full border-beam-b bg-[#E6E6E6]">
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="border-beam-b lg:border-b-0 lg:border-beam-r p-6 lg:p-10 bg-white">
                <div class="font-tech text-[10px] text-[#FF3300] mb-3 tracking-widest">ADVANTAGE_01</div>
                <h3 class="text-xl font-bold uppercase mb-3">Full-Stack</h3>
                <p class="text-sm leading-relaxed opacity-80">Backend sampai frontend, semuanya dikerjain sendiri. Gak perlu koordinasi banyak orang, lebih cepat dan konsisten.</p>
            </div>
            <div class="border-beam-b lg:border-b-0 lg:border-beam-r p-6 lg:p-10">
                <div class="font-tech text-[10px] text-[#FF3300] mb-3 tracking-widest">ADVANTAGE_02</div>
                <h3 class="text-xl font-bold uppercase mb-3">Modern Tech</h3>
                <p class="text-sm leading-relaxed opacity-80">Pakai teknologi terbaru tapi proven. Laravel, React, Docker — bukan experiment, tapi battle-tested stack.</p>
            </div>
            <div class="p-6 lg:p-10">
                <div class="font-tech text-[10px] text-[#FF3300] mb-3 tracking-widest">ADVANTAGE_03</div>
                <h3 class="text-xl font-bold uppercase mb-3">AI Integration</h3>
                <p class="text-sm leading-relaxed opacity-80">Bisa integrasiin AI & automation ke sistem yang udah ada. Scraping, chatbot, data analysis — satu paket.</p>
            </div>
        </div>
    </section>

    <!-- G. About -->
    <section class="w-full border-beam-b" id="about">
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-5 relative border-beam-b lg:border-b-0 lg:border-beam-r h-[350px] lg:h-auto overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center grayscale contrast-125 hover:grayscale-0 transition-all duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop');">
                </div>
            </div>

            <div class="lg:col-span-7 p-6 lg:p-16 flex flex-col bg-[#E6E6E6] justify-center">
                <div class="font-tech text-xs text-gray-500 uppercase mb-4 tracking-widest">ID: DHABY_A Anggika // WEB DEV</div>
                <h2 class="text-4xl lg:text-5xl uppercase font-bold tracking-tight-custom mb-6">DHABY<br>ANGGIKA PUTRA.</h2>
                <div class="w-20 h-2 bg-black mb-6 lg:mb-8"></div>
                <p class="text-base lg:text-xl font-medium leading-relaxed opacity-90 mb-8 max-w-xl">
                    Web Developer Bandung dengan pengalaman 3+ tahun. Fokus di Laravel, React, dan AI integration. Udah handle berbagai project dari startup sampai enterprise.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs font-tech border-black border-t pt-8">
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Experience</span>
                        <span class="text-lg font-bold">3+ YEARS</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Projects</span>
                        <span class="text-lg font-bold">20+ DONE</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Location</span>
                        <span class="text-lg font-bold">BANDUNG, ID</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- H. CTA: Let's Talk -->
    <section class="w-full border-beam-b bg-[#1A1A1A] text-white" id="contact">
        <div class="p-6 lg:p-16 text-center max-w-3xl mx-auto">
            <div class="font-tech text-[10px] text-[#FF3300] mb-4 tracking-widest uppercase">Ready to Start?</div>
            <h2 class="text-4xl lg:text-6xl font-bold uppercase tracking-tight-custom mb-6">Let's Build<br>Something.</h2>
            <div class="w-16 h-1 bg-[#FF3300] mx-auto mb-6"></div>
            <p class="text-base lg:text-lg opacity-80 mb-8 max-w-xl mx-auto">
                Diskusiin project kamu sekarang. Gratis konsultasi, gak ada komitmen. Langsung chat aja.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6285156416716?text=Halo%20Dhaby%2C%20saya%20mau%20konsultasi%20project%20web"
                    target="_blank"
                    class="border-beam bg-[#FF3300] hover:bg-white hover:text-black text-white transition-all duration-0 px-8 py-4 uppercase font-bold tracking-wider flex items-center justify-center gap-3 text-sm lg:text-base">
                    <iconify-icon icon="logos:whatsapp-icon" width="20"></iconify-icon>
                    WhatsApp
                </a>
                <a href="mailto:dhabyap@gmail.com"
                    class="border-beam bg-transparent hover:bg-white hover:text-black transition-all duration-0 px-8 py-4 uppercase font-bold tracking-wider flex items-center justify-center gap-3 text-sm lg:text-base">
                    <iconify-icon icon="solar:letter-linear" width="20"></iconify-icon>
                    Email
                </a>
            </div>

            <div class="mt-10 font-tech text-[10px] text-gray-500 uppercase tracking-widest">Response time: &lt; 24 hours</div>
        </div>
    </section>
@endsection