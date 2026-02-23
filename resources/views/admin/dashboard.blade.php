@extends('admin.layouts.admin')

@section('admin_content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="admin-card flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold uppercase mb-2">Total Articles</h3>
                <div class="text-5xl font-bold text-[#FF3300]">
                    {{ \App\Models\Blog::count() }}
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('admin.blog.index') }}" class="btn-admin btn-outline text-xs inline-block">Manage
                    Content</a>
            </div>
        </div>

        <div class="admin-card flex flex-col justify-between bg-black text-white">
            <div>
                <h3 class="text-xl font-bold uppercase mb-2">System Status</h3>
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="font-tech text-sm">ONLINE_SECURE</span>
                </div>
            </div>
            <div class="mt-8 font-tech text-[10px] opacity-50 uppercase">
                Kernel: v10.50<br>
                Uptime: 100%
            </div>
        </div>

        <div class="admin-card border-dashed border-gray-300 opacity-60 flex items-center justify-center text-center">
            <div class="font-tech text-xs uppercase">
                More Stats<br>In Development
            </div>
        </div>
    </div>
@endsection