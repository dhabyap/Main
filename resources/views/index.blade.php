@extends('layouts.main')

@section('content')
    <!-- B. Hero Section: "The Interface" -->
    <section class="w-full border-beam-b grid grid-cols-1 lg:grid-cols-12 min-h-[75vh] lg:min-h-[85vh]">
        <!-- Left: The Visual -->
        <div
            class="lg:col-span-8 border-beam-b lg:border-b-0 lg:border-beam-r relative overflow-hidden group order-1 h-[40vh] lg:h-auto">
            <div class="absolute inset-0 bg-cover bg-center brutalist-img"
                style="background-image: url('{{ \App\Models\Setting::url('hero_image', 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop') }}');">
            </div>

            <!-- Metadata Overlay -->
            <div class="absolute top-4 left-4 bg-white border-beam p-2 font-tech text-[10px] lg:text-xs z-10">
                ROLE: {{ \App\Models\Setting::get('hero_role', 'WEB DEVELOPER // FULL-STACK') }}
            </div>

            <!-- Glitch Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#1A1A1A]/80 to-transparent pointer-events-none"></div>
        </div>

        <!-- Right: The Introduction -->
        <div class="lg:col-span-4 flex flex-col justify-between bg-[#E6E6E6] p-6 lg:p-10 relative order-2">
            <div class="">
                <div class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-3 lg:mb-4 flex items-center gap-2">
                    <iconify-icon icon="solar:record-circle-linear" width="12" class="animate-pulse"></iconify-icon>
                    CURRENT: {{ \App\Models\Setting::get('hero_current_work', 'PT. ME TECH') }}
                </div>
                <h1
                    class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tight-custom leading-[0.85] mb-4 lg:mb-6">
                    {!! str_replace(' & ', '<br>', \App\Models\Setting::get('hero_title', 'Logic & Laravel.')) !!}
                </h1>
                <div class="w-12 h-2 bg-[#FF3300] mb-4 lg:mb-6"></div>
                <p class="font-semibold text-base lg:text-lg leading-snug max-w-sm">
                    {{ \App\Models\Setting::get('hero_description', 'Web Developer specializing in resilient backend architecture and dynamic frontend interfaces. Expert in PHP (Laravel, CodeIgniter) and modern JavaScript (React, Next.js).') }}
                </p>
            </div>

            <div class="mt-8 lg:mt-0">
                <div class="font-tech text-[10px] mb-2 text-gray-500 uppercase">Localhost: 127.0.0.1:8000</div>
                <a href="#work"
                    class="group block w-full border-beam bg-transparent hover:bg-black hover:text-white transition-all duration-0 p-4 text-center uppercase font-bold tracking-wider flex justify-between items-center text-sm lg:text-base">
                    <span>View Projects</span>
                    <iconify-icon icon="solar:arrow-right-down-linear" width="20"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- C. Tech Stack: "The Toolkit" -->
    <section class="w-full border-beam-b overflow-hidden bg-white" id="stack">
        <div
            class="bg-black text-white px-4 lg:px-6 py-2 font-tech text-[10px] lg:text-xs border-beam-b tracking-widest uppercase flex items-center gap-2">
            <iconify-icon icon="solar:cpu-linear" width="14"></iconify-icon> System Dependencies
        </div>

        <!-- Marquee Container -->
        <div class="flex whitespace-nowrap overflow-hidden border-beam-b bg-[#E6E6E6] py-6 lg:py-8">
            <div class="flex animate-marquee">
                @php $techStacks = \App\Models\TechStack::orderBy('order', 'asc')->get(); @endphp
                @foreach($techStacks->merge($techStacks) as $tech) {{-- Duplicate for seamless marquee --}}
                    <div
                        class="flex items-center mx-6 lg:mx-8 gap-3 lg:gap-4 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
                        <iconify-icon icon="{{ $tech->icon }}" width="24" class="lg:w-[32px]"></iconify-icon>
                        <span class="font-bold text-lg lg:text-xl uppercase">{{ $tech->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- D. Philosophy -->
    <section class="w-full border-beam-b">
        <div class="grid grid-cols-1 md:grid-cols-3">
            @php $services = \App\Models\Service::orderBy('order', 'asc')->take(3)->get(); @endphp
            @foreach($services as $index => $service)
                <div
                    class="border-beam-b md:border-b-0 {{ !$loop->last ? 'lg:border-beam-r' : '' }} p-6 lg:p-12 hover:bg-white transition-colors duration-0 group relative cursor-help">
                    @if($index > 0)
                        <div class="absolute top-4 left-4 w-4 h-4 border-l-2 border-t-2 border-[#FF3300] hidden group-hover:block">
                        </div>
                        <div
                            class="absolute bottom-4 right-4 w-4 h-4 border-r-2 border-b-2 border-[#FF3300] hidden group-hover:block">
                        </div>
                    @endif

                    <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-tight-custom leading-none mb-4">
                        {!! str_replace(' ', '<br>', $service->title) !!}
                    </h2>
                    <div class="w-full h-[2px] bg-black mb-4"></div>

                    @if($service->icon)
                        <p class="font-tech text-xs uppercase tracking-widest text-[#FF3300] flex items-center gap-2 mb-4">
                            <iconify-icon icon="{{ $service->icon }}" width="14"></iconify-icon>
                            @if($service->icon == 'solar:protocol-linear') /// Protocol: REST API @endif
                        </p>
                    @endif

                    <p class="text-sm font-medium leading-relaxed opacity-80">
                        {{ $service->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Latest Blog Section (NEW ADDITION) -->
    <section class="w-full bg-[#E6E6E6] border-beam-b">
        <div class="p-6 lg:p-10 border-beam-b flex justify-between items-center bg-white">
            <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-tight">Latest Insight_</h2>
            <a href="{{ route('blog.index') }}"
                class="font-tech text-xs uppercase hover:text-[#FF3300] transition-colors flex items-center gap-2">
                View All <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 divide-x-2 divide-black bg-white border-beam-b">
            @php
                $latestBlogs = \App\Models\Blog::where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
            @endphp
            @forelse($latestBlogs as $blog)
                <a href="{{ route('blog.show', $blog->slug) }}"
                    class="p-8 hover:bg-[#FF3300] hover:text-white transition-colors group border-b-2 md:border-b-0 border-black">
                    <span
                        class="font-tech text-[10px] uppercase mb-2 block opacity-70 group-hover:opacity-100">{{ $blog->published_at->format('d M Y') }}</span>
                    <h3 class="text-xl font-bold uppercase tracking-tight">{{ $blog->title }}</h3>
                </a>
            @empty
                <div class="col-span-3 p-10 text-center opacity-50 italic">No articles published yet.</div>
            @endforelse
        </div>
    </section>

    <!-- E. Projects: "The Registry" -->
    <section class="w-full border-beam-b bg-[#1A1A1A]" id="work">
        <div
            class="border-beam-b bg-[#E6E6E6] p-4 flex justify-between items-center sticky top-[74px] lg:top-20 z-30 shadow-md">
            <h2 class="text-lg lg:text-xl font-bold uppercase tracking-tight">Project Registry</h2>
            <span class="font-tech text-[10px] lg:text-xs border border-black px-2 py-1 bg-white">INDEX: SELECTED</span>
        </div>

        @php
            $projects = \App\Models\Project::where('status', 'published')->orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();
        @endphp

        @forelse($projects as $project)
            <a href="{{ route('project.show', $project->slug) }}"
                class="group relative block w-full h-[55vh] md:h-[60vh] lg:h-[70vh] border-beam-b overflow-hidden cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center transition-all duration-300 grayscale group-hover:grayscale-0 group-hover:scale-105"
                    style="background-image: url('{{ filter_var($project->thumbnail, FILTER_VALIDATE_URL) ? $project->thumbnail : asset('storage/' . $project->thumbnail) }}');">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-full lg:w-2/3 p-4 md:p-6 lg:p-10 bg-gradient-to-t from-black via-black/80 to-transparent">
                    <!-- Category Badge -->
                    <div class="absolute top-3 right-3 lg:top-4 lg:right-4 z-20 flex flex-col items-end gap-2 text-center">
                        @if($project->category === 'professional')
                            <div class="bg-[#FF3300] text-white font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                <iconify-icon icon="solar:case-minimalistic-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                                Professional_Work
                            </div>
                        @else
                            <div class="bg-white text-black font-tech text-[9px] lg:text-xs px-2 py-0.5 lg:px-3 lg:py-1 border-2 border-black font-bold uppercase tracking-widest flex items-center gap-1 lg:gap-2 transform -rotate-1 group-hover:rotate-0 transition-transform shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                <iconify-icon icon="solar:user-circle-bold" width="12" class="lg:w-[14px]"></iconify-icon>
                                Personal_Lab
                            </div>
                        @endif
                    </div>

                    <div
                        class="font-tech text-[10px] lg:text-xs text-[#FF3300] mb-2 uppercase tracking-widest flex items-center gap-2">
                        <span>TYPE: {{ $project->type }}</span>
                    </div>
                    <h3
                        class="text-3xl md:text-4xl lg:text-5xl text-white font-bold uppercase tracking-tight leading-none mb-3 lg:mb-4 group-hover:translate-x-2 transition-transform duration-200">
                        {!! str_replace(' & ', '<br>', $project->title) !!}
                    </h3>
                    <div class="flex flex-wrap gap-2 mb-4 lg:mb-6">
                        @if($project->tags)
                            @foreach($project->tags as $tag)
                                <span
                                    class="text-white text-[10px] lg:text-xs border border-white/30 px-2 py-1 font-tech uppercase bg-black/50">{{ $tag }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div
                        class="bg-white text-black font-tech text-[10px] lg:text-xs uppercase px-4 lg:px-6 py-2 lg:py-3 font-bold group-hover:bg-[#FF3300] group-hover:text-white transition-colors duration-0 flex items-center gap-2 w-max">
                        Case Study <iconify-icon icon="solar:arrow-right-up-linear" width="14"></iconify-icon>
                    </div>
                </div>
            </a>
        @empty
            <div class="p-20 text-center text-white opacity-50 italic">Registry currently empty.</div>
        @endforelse
    </section>

    <!-- F. About: "The Operator" -->
    <section class="w-full border-beam-b" id="about">
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div
                class="lg:col-span-5 relative border-beam-b lg:border-b-0 lg:border-beam-r h-[350px] lg:h-auto overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center grayscale contrast-125 hover:grayscale-0 transition-all duration-500"
                    style="background-image: url('{{ \App\Models\Setting::url('about_image', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop') }}');">
                </div>
            </div>

            <div class="lg:col-span-7 p-6 lg:p-16 flex flex-col bg-[#E6E6E6] justify-center">
                <div class="font-tech text-xs text-gray-500 uppercase mb-4 tracking-widest">ID:
                    {{ \App\Models\Setting::get('about_id_tag', 'DHABY_ANGGIKA // WEB DEV') }}
                </div>
                <h2 class="text-4xl lg:text-5xl uppercase font-bold tracking-tight-custom mb-6">
                    {!! str_replace(' PUTRA.', '<br>PUTRA.', \App\Models\Setting::get('about_name', 'Dhaby Anggika PUTRA.')) !!}
                </h2>
                <div class="w-20 h-2 bg-black mb-6 lg:mb-8"></div>
                <p class="text-base lg:text-xl font-medium leading-relaxed opacity-90 mb-8 max-w-xl">
                    {{ \App\Models\Setting::get('about_description', 'I am a Web Developer with over 3 years of experience. I build web applications using PHP (CodeIgniter, Laravel) and JavaScript (React.js, Next.js).') }}
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs font-tech border-black border-t pt-8">
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Experience</span>
                        <span
                            class="text-lg font-bold">{{ \App\Models\Setting::get('experience_years', '3+ YEARS') }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Education</span>
                        <span class="text-lg font-bold">{{ \App\Models\Setting::get('education', 'STMIK BANDUNG') }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 uppercase mb-1">Location</span>
                        <span class="text-lg font-bold">{{ \App\Models\Setting::get('location', 'BANDUNG, ID') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- G. Capabilities -->
    <section class="border-beam-b p-6 lg:p-12 bg-white w-full">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl lg:text-3xl font-bold uppercase tracking-tight mb-6 lg:mb-8">System Capabilities</h2>
            <div class="border-t-2 border-black">
                @php $skills = \App\Models\Skill::orderBy('order', 'asc')->get(); @endphp
                @foreach($skills as $index => $skill)
                    <div
                        class="group flex flex-col md:flex-row justify-between items-start md:items-center py-4 lg:py-5 border-b-2 border-black hover:bg-[#FF3300] hover:text-white transition-colors duration-0 px-4 cursor-pointer">
                        <div class="font-tech text-xs uppercase w-32 opacity-70 group-hover:opacity-100 mb-2 md:mb-0">Svc
                            0{{ $index + 1 }}
                        </div>
                        <div class="flex-1 font-bold uppercase text-base lg:text-lg">{{ $skill->title }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection