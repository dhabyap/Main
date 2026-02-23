@extends('layouts.main')

@section('title', $blog->title . ' | DHABY.DEV')

@section('extra_css')
    /* Content Styling */
    .article-content h2 {
    font-weight: 700;
    font-size: 2rem;
    text-transform: uppercase;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    line-height: 1.1;
    letter-spacing: -0.02em;
    }
    .article-content h3 {
    font-weight: 700;
    font-size: 1.5rem;
    text-transform: uppercase;
    margin-top: 2rem;
    margin-bottom: 1rem;
    line-height: 1.2;
    }
    .article-content p {
    font-size: 1.125rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    opacity: 0.9;
    }
    .article-content pre {
    background-color: #000;
    color: #fff;
    padding: 1.5rem;
    margin: 2rem 0;
    font-family: 'Space Mono', monospace;
    font-size: 0.875rem;
    overflow-x: auto;
    border: 2px solid var(--beam-black);
    }
    .article-content blockquote {
    border-left: 10px solid var(--safety-orange);
    background-color: #fff;
    padding: 2rem;
    margin: 2.5rem 0;
    font-style: italic;
    font-size: 1.25rem;
    font-weight: 500;
    }
@endsection

@section('content')
    <article class="w-full">
        <header class="border-beam-b bg-[#E6E6E6] pt-12 lg:pt-20 px-6 lg:px-10">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <a href="{{ route('blog.index') }}"
                        class="font-tech text-xs uppercase bg-black text-white px-3 py-1 hover:bg-[#FF3300] transition-colors">
                        &lt; Back to Log
                    </a>
                    <span class="font-tech text-xs text-gray-500 uppercase">/ Article Slug: {{ $blog->slug }}</span>
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tight-custom leading-tight mb-8">
                    {{ $blog->title }}
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 border-t-2 border-black py-8 font-tech text-xs uppercase">
                    <div>
                        <span class="text-gray-500 block mb-1">Published</span>
                        <span
                            class="font-bold">{{ $blog->published_at ? $blog->published_at->format('d M Y') : $blog->created_at->format('d M Y') }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 block mb-1">Author</span>
                        <span class="font-bold">Dhaby Anggika</span>
                    </div>
                    <div>
                        <span class="text-gray-500 block mb-1">Status</span>
                        <span class="font-bold uppercase">{{ $blog->status }}</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Featured Image -->
        @if($blog->thumbnail)
            <section class="border-beam-b h-[40vh] lg:h-[60vh] overflow-hidden">
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                    class="w-full h-full object-cover brutalist-img">
            </section>
        @endif

        <!-- Main Content -->
        <section class="bg-white py-16 lg:py-24 px-6 lg:px-10 border-beam-b">
            <div class="max-w-3xl mx-auto article-content">
                {!! $blog->content !!}
            </div>
        </section>

        <!-- Image Gallery -->
        @if($blog->images->count() > 0)
            <section class="bg-[#F6F6F6] py-16 lg:py-24 px-6 lg:px-10 border-beam-b">
                <div class="max-w-4xl mx-auto">
                    <div class="font-tech text-xs uppercase mb-8 flex items-center gap-4">
                        <span class="bg-black text-white px-3 py-1">Gallery</span>
                        <span class="text-gray-400">Total Shots: 0{{ $blog->images->count() }}</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($blog->images as $image)
                            <div class="border-4 border-black group overflow-hidden bg-white">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Gallery Item"
                                    class="w-full h-auto brutalist-img">
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif


        <!-- Article Navigation -->
        <nav class="border-y-2 border-black bg-[#E6E6E6]">
            <div class="grid grid-cols-1 md:grid-cols-2 divide-y-2 md:divide-y-0 md:divide-x-2 divide-black">
                @if($prev)
                    <a href="{{ route('blog.show', $prev->slug) }}"
                        class="p-8 lg:p-12 hover:bg-[#FF3300] hover:text-white transition-colors group">
                        <span class="font-tech text-[10px] uppercase block mb-4 opacity-70 group-hover:opacity-100">Previous
                            Article</span>
                        <span class="text-xl lg:text-2xl font-bold uppercase tracking-tight">{{ $prev->title }}</span>
                    </a>
                @else
                    <div class="p-8 lg:p-12 opacity-30 cursor-not-allowed">
                        <span class="font-tech text-[10px] uppercase block mb-4">No Previous Article</span>
                    </div>
                @endif

                @if($next)
                    <a href="{{ route('blog.show', $next->slug) }}"
                        class="p-8 lg:p-12 hover:bg-[#FF3300] hover:text-white transition-colors group text-right">
                        <span class="font-tech text-[10px] uppercase block mb-4 opacity-70 group-hover:opacity-100">Next
                            Article</span>
                        <span class="text-xl lg:text-2xl font-bold uppercase tracking-tight">{{ $next->title }}</span>
                    </a>
                @else
                    <div class="p-8 lg:p-12 opacity-30 cursor-not-allowed text-right">
                        <span class="font-tech text-[10px] uppercase block mb-4">No Next Article</span>
                    </div>
                @endif
            </div>
        </nav>
    </article>
@endsection