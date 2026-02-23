<!-- Mobile Menu Overlay (Hidden by default) -->
<div id="mobile-menu"
    class="fixed inset-0 bg-[#E6E6E6] z-40 hidden flex-col pt-24 pb-8 overflow-y-auto transform transition-transform duration-300">
    <div class="flex flex-col font-tech text-xl uppercase divide-y-2 divide-black border-b-2 border-black">
        <a href="{{ url('/') }}#work"
            class="mobile-link px-6 py-6 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 flex justify-between items-center">
            <span>[01] Projects</span>
            <iconify-icon icon="solar:arrow-right-up-linear"></iconify-icon>
        </a>
        <a href="{{ url('/') }}#about"
            class="mobile-link px-6 py-6 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 flex justify-between items-center">
            <span>[02] Bio / Stats</span>
            <iconify-icon icon="solar:arrow-right-up-linear"></iconify-icon>
        </a>
        <a href="{{ route('blog.index') }}"
            class="mobile-link px-6 py-6 hover:bg-[#FF3300] hover:text-white transition-colors duration-0 flex justify-between items-center {{ request()->routeIs('blog.*') ? 'bg-[#FF3300] text-white' : '' }}">
            <span>[03] Blog</span>
            <iconify-icon icon="solar:document-bold-linear"></iconify-icon>
        </a>
        <a href="{{ url('/') }}#contact"
            class="mobile-link px-6 py-6 bg-black text-white hover:bg-[#FF3300] transition-colors duration-0 flex justify-between items-center">
            <span>Download CV</span>
            <iconify-icon icon="solar:file-download-linear"></iconify-icon>
        </a>
    </div>
    <div class="mt-auto px-6 pt-8">
        <p class="font-tech text-xs uppercase text-gray-500">System Status: Online</p>
    </div>
</div>

<!-- Navigation -->
<nav class="fixed top-0 left-0 w-full z-50 bg-[#E6E6E6] border-beam-b">
    <div class="flex flex-col lg:flex-row justify-between lg:items-stretch h-auto lg:h-20">
        <!-- Left: ID -->
        <div class="flex items-center justify-between p-4 lg:p-0 lg:w-1/4 lg:border-beam-r bg-[#E6E6E6] relative z-50">
            <a href="{{ url('/') }}" class="block pl-2 lg:pl-6 group">
                <span
                    class="text-2xl lg:text-4xl uppercase group-hover:text-[#FF3300] transition-colors duration-0 font-bold tracking-tight-custom">ABYSOFT</span>
            </a>
            <!-- Mobile Toggle Button -->
            <button id="menu-toggle"
                class="lg:hidden p-2 border-beam bg-white active:bg-black active:text-white transition-colors">
                <iconify-icon id="menu-icon" icon="solar:hamburger-menu-linear" width="24" height="24"></iconify-icon>
            </button>
        </div>

        <!-- Right: Links (Desktop) -->
        <div
            class="hidden lg:flex flex-1 justify-end items-center font-tech text-xs tracking-widest uppercase divide-x-2 divide-black">
            <a href="{{ url('/') }}#work"
                class="h-full flex items-center px-8 hover:bg-black hover:text-white transition-colors duration-0 border-l-2 border-black">
                [01] Projects
            </a>
            <a href="{{ url('/') }}#about"
                class="h-full flex items-center px-8 hover:bg-black hover:text-white transition-colors duration-0">
                [02] Bio / Stats
            </a>
            <a href="{{ route('blog.index') }}"
                class="h-full flex items-center px-8 hover:bg-black hover:text-white transition-colors duration-0 {{ request()->routeIs('blog.*') ? 'bg-black text-white' : '' }}">
                [03] Blog
            </a>
            <a href="{{ url('/') }}#contact"
                class="h-full flex items-center px-8 bg-[#FF3300] text-white hover:bg-black transition-colors duration-0 font-semibold border-l-2 border-black">
                <iconify-icon icon="solar:file-download-linear" width="16" height="16" class="mr-2"></iconify-icon> CV
                [PDF]
            </a>
        </div>
    </div>
</nav>