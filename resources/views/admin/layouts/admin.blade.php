@extends('layouts.main')

@section('title', 'ADMIN PANEL | DHABY.DEV')

@section('extra_css')
    .admin-card {
    background: white;
    border: 2px solid var(--beam-black);
    padding: 2rem;
    }
    .form-group {
    margin-bottom: 1.5rem;
    }
    .form-label {
    display: block;
    font-family: 'Space Mono', monospace;
    font-size: 0.75rem;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
    color: #555;
    }
    .form-control {
    width: 100%;
    border: 2px solid var(--beam-black);
    padding: 0.75rem;
    font-family: 'Inter', sans-serif;
    background: transparent;
    }
    .form-control:focus {
    border-color: var(--safety-orange);
    outline: none;
    }
    .btn-admin {
    font-family: 'Space Mono', monospace;
    text-transform: uppercase;
    font-weight: bold;
    padding: 0.75rem 1.5rem;
    border: 2px solid var(--beam-black);
    cursor: pointer;
    transition: all 0.1s;
    }
    .btn-black {
    background: black;
    color: white;
    }
    .btn-black:hover {
    background: var(--safety-orange);
    }
    .btn-outline {
    background: transparent;
    }
    .btn-outline:hover {
    background: black;
    color: white;
    }

    /* Trix Brutalist Customization */
    trix-toolbar {
    background: #E6E6E6;
    border: 2px solid black !important;
    border-bottom: 0 !important;
    padding: 5px;
    }
    trix-toolbar .trix-button-group {
    border: 1px solid black !important;
    margin-bottom: 0 !important;
    border-radius: 0 !important;
    background: white;
    }
    trix-toolbar .trix-button {
    border-bottom: 0 !important;
    border-radius: 0 !important;
    }
    trix-toolbar .trix-button--active {
    background: #FF3300 !important;
    color: white !important;
    }
    trix-editor {
    border: 2px solid black !important;
    border-radius: 0 !important;
    min-height: 400px !important;
    background: white;
    font-family: 'Inter', sans-serif;
    }
    trix-editor:focus {
    border-color: #FF3300 !important;
    outline: none;
    }
@endsection

@section('extra_js_head')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        .trix-button-group--file-tools {
            display: none !important;
        }
    </style>
@endsection

@section('content')

    <div class="w-full border-beam-b bg-[#1A1A1A] py-10 px-6 lg:px-10">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <div class="font-tech text-xs text-[#FF3300] mb-2 uppercase tracking-widest flex items-center gap-2">
                    <iconify-icon icon="solar:shield-keyhole-linear" width="14"></iconify-icon> ROOT / ADMIN_PANEL
                </div>
                <h1 class="text-3xl lg:text-5xl text-white font-bold uppercase tracking-tight-custom">
                    Dashboard.
                </h1>
                <div class="mt-4 flex gap-4 text-xs font-tech text-gray-400">
                    <a href="{{ route('admin.dashboard') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.dashboard') ? 'text-[#FF3300]' : '' }}">#
                        DASHBOARD</a>
                    <a href="{{ route('admin.blog.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.blog.*') ? 'text-[#FF3300]' : '' }}">#
                        ARTICLES</a>
                    <a href="{{ route('admin.project.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.project.*') ? 'text-[#FF3300]' : '' }}">#
                        PROJECTS</a>
                    <a href="{{ route('admin.tech-stack.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.tech-stack.*') ? 'text-[#FF3300]' : '' }}">#
                        TECH</a>
                    <a href="{{ route('admin.service.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.service.*') ? 'text-[#FF3300]' : '' }}">#
                        SERVICES</a>
                    <a href="{{ route('admin.skill.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.skill.*') ? 'text-[#FF3300]' : '' }}">#
                        SKILLS</a>
                    <a href="{{ route('admin.settings.index') }}"
                        class="hover:text-[#FF3300] {{ request()->routeIs('admin.settings.*') ? 'text-[#FF3300]' : '' }}">#
                        SETTINGS</a>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('home') }}"
                    class="btn-admin btn-outline text-white border-white hover:bg-white hover:text-black text-xs">View
                    Site</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-admin btn-black text-xs">Logout</button>
                </form>
            </div>
        </div>
    </div>


    <section class="py-12 px-6 lg:px-10 min-h-[60vh]">
        <div class="container mx-auto">
            @if(session('success'))
                <div
                    class="bg-green-100 border-2 border-green-500 p-4 mb-8 font-tech text-xs uppercase flex items-center gap-2">
                    <iconify-icon icon="solar:check-circle-linear" width="18"></iconify-icon>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border-2 border-red-500 p-4 mb-8 font-tech text-xs uppercase">
                    <div class="flex items-center gap-2 mb-2 font-bold">
                        <iconify-icon icon="solar:danger-triangle-linear" width="18"></iconify-icon>
                        Input Validation Error
                    </div>
                    <ul class="list-disc list-inside opacity-80">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('admin_content')
        </div>
    </section>
@endsection