@extends('layouts.main')

@section('title', 'BLOG | DHABY.DEV')

@section('content')
    <!-- Blog Hero -->
    <section class="w-full border-beam-b bg-[#1A1A1A] py-16 lg:py-24 px-6 lg:px-10">
        <div class="container mx-auto">
            <div class="font-tech text-xs text-[#FF3300] mb-4 uppercase tracking-widest flex items-center gap-2">
                <iconify-icon icon="solar:document-text-linear" width="14"></iconify-icon> System Log: Articles
            </div>
            <h1
                class="text-5xl md:text-7xl lg:text-8xl text-white font-bold uppercase tracking-tight-custom leading-[0.85]">
                Catatan &<br>Insight.
            </h1>
            <div class="w-24 h-3 bg-[#FF3300] mt-8"></div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="w-full bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 divide-y-2 lg:divide-y-0 lg:divide-x-2 divide-black">

            @forelse($blogs as $blog)
                <!-- Article Card -->
                <article
                    class="flex flex-col border-b-2 lg:border-b-2 border-black hover:bg-[#E6E6E6] transition-colors duration-0 group">
                    <div class="h-64 overflow-hidden border-beam-b">
                        @if($blog->thumbnail)
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                class="w-full h-full object-cover brutalist-img">
                        @else
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop"
                                alt="Default Thumbnail" class="w-full h-full object-cover brutalist-img">
                        @endif
                    </div>
                    <div class="p-6 lg:p-8 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-4">
                            <span class="font-tech text-[10px] uppercase bg-black text-white px-2 py-1">Article</span>
                            <span
                                class="font-tech text-[10px] uppercase text-gray-500">{{ $blog->published_at ? $blog->published_at->format('d M Y') : $blog->created_at->format('d M Y') }}</span>
                        </div>
                        <h2
                            class="text-2xl lg:text-3xl font-bold uppercase tracking-tight mb-4 group-hover:text-[#FF3300] transition-colors">
                            {{ $blog->title }}
                        </h2>
                        <p class="text-sm leading-relaxed opacity-80 mb-8 line-clamp-3">
                            {{ $blog->excerpt }}
                        </p>
                        <div class="mt-auto">
                            <a href="{{ route('blog.show', $blog->slug) }}"
                                class="inline-flex items-center gap-2 font-tech text-xs uppercase font-bold border-2 border-black px-4 py-2 hover:bg-black hover:text-white transition-all">
                                Read More <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full p-20 text-center">
                    <h2 class="text-4xl font-bold uppercase tracking-tight opacity-50">No articles found.</h2>
                </div>
            @endforelse

        </div>
    </section>

    <!-- Pagination -->
    <div class="w-full border-beam-b p-10 bg-[#E6E6E6] flex justify-center">
        {{ $blogs->links('pagination::simple-tailwind') }}
    </div>
@endsection