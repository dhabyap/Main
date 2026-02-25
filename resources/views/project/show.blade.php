@extends('layouts.main')

@section('content')
    <!-- Project Detail Hero -->
    <section class="w-full border-beam-b bg-[#1A1A1A] py-20 px-6 lg:px-10">
        <div class="container mx-auto">
            <div class="font-tech text-xs text-[#FF3300] mb-4 uppercase tracking-widest flex flex-wrap items-center gap-2">
                <iconify-icon icon="solar:folder-path-linear" width="14"></iconify-icon> PROJECT_REGISTRY /
                <span
                    class="text-white bg-[#FF3300] px-2 py-0.5 border border-black">{{ $project->category === 'professional' ? 'Professional_Work' : 'Personal_Lab' }}</span>
                /
                {{ $project->type }}
            </div>
            <h1
                class="text-4xl md:text-6xl lg:text-7xl text-white font-bold uppercase tracking-tight-custom leading-none mb-8">
                {!! str_replace(' & ', '<br>', $project->title) !!}
            </h1>

            <div class="flex flex-wrap gap-3 mb-12">
                @foreach($project->tags as $tag)
                    <span class="text-white text-xs border border-white/30 px-3 py-1 font-tech uppercase bg-black/50">
                        {{ $tag }}
                    </span>
                @endforeach
            </div>

            @if($project->url)
                <a href="{{ $project->url }}" target="_blank"
                    class="btn-primary w-max flex items-center gap-2 bg-white text-black px-8 py-4 font-tech uppercase font-bold hover:bg-[#FF3300] hover:text-white transition-all">
                    Launch Project <iconify-icon icon="solar:arrow-right-up-linear" width="18"></iconify-icon>
                </a>
            @endif
        </div>
    </section>

    <!-- Project Content -->
    <section class="w-full border-beam-b bg-white py-16 px-6 lg:px-10">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left: Thumbnail/Showcase -->
            <div class="lg:col-span-7">
                <div class="border-2 border-black p-2 bg-[#E6E6E6]">
                    <img src="{{ filter_var($project->thumbnail, FILTER_VALIDATE_URL) ? $project->thumbnail : asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}"
                        class="w-full border-2 border-black grayscale hover:grayscale-0 transition-all duration-500">
                </div>
            </div>

            <!-- Right: Description/Intel -->
            <div class="lg:col-span-5 flex flex-col justify-start">
                <div class="font-tech text-xs text-gray-500 uppercase mb-4 border-b-2 border-black pb-2">
                    # PROJECT_INTEL
                </div>
                <div class="prose prose-lg max-w-none font-medium leading-relaxed opacity-90 mb-8">
                    {!! nl2br(e($project->description)) !!}
                </div>

                <div class="mt-auto border-t-2 border-black pt-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <span class="block font-tech text-[10px] text-gray-500 uppercase mb-1">Status</span>
                            <span class="font-bold uppercase tracking-tight">{{ $project->status }}</span>
                        </div>
                        <div>
                            <span class="block font-tech text-[10px] text-gray-500 uppercase mb-1">Completed</span>
                            <span
                                class="font-bold uppercase tracking-tight">{{ $project->created_at->format('M Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Navigation -->
    <section class="w-full border-beam-b bg-[#E6E6E6] py-10 px-6 lg:px-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}#work"
                class="font-tech text-xs uppercase hover:text-[#FF3300] transition-all flex items-center gap-2">
                <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Back to Registry
            </a>
            <div class="font-tech text-[10px] text-gray-400">
                EOF // {{ $project->slug }}
            </div>
        </div>
    </section>
@endsection

@section('extra_css')
    <style>
        .prose p {
            margin-bottom: 1.5rem;
        }
    </style>
@endsection