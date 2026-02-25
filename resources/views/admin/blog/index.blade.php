@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Manage Articles</h2>
        <a href="{{ route('admin.blog.create') }}" class="btn-admin btn-black text-xs flex items-center gap-2">
            <iconify-icon icon="solar:add-circle-linear" width="18"></iconify-icon> New Article
        </a>
    </div>

    <div class="admin-card overflow-x-auto p-0">
        <table class="w-full text-left font-tech text-xs uppercase divide-y-2 divide-black">
            <thead class="bg-[#E6E6E6]">
                <tr>
                    <th class="p-4 border-r-2 border-black">Thumbnail</th>
                    <th class="p-4 border-r-2 border-black">Title</th>
                    <th class="p-4 border-r-2 border-black">Status</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-2 divide-black">
                @forelse($blogs as $blog)
                    <tr class="hover:bg-[#f9f9f9]">
                        <td class="p-4 border-r-2 border-black w-24">
                            @if($blog->thumbnail)
                                <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                                    class="w-16 h-16 object-cover border border-black grayscale">
                            @else
                                <div class="w-16 h-16 bg-gray-200 border border-black flex items-center justify-center text-[8px]">
                                    NO IMG</div>
                            @endif
                        </td>
                        <td class="p-4 border-r-2 border-black font-bold">
                            {{ $blog->title }}
                            <div class="text-[8px] text-gray-500 mt-1 uppercase tracking-tighter">Slug: {{ $blog->slug }}</div>
                        </td>
                        <td class="p-4 border-r-2 border-black">
                            <span
                                class="px-2 py-1 {{ $blog->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                {{ $blog->status }}
                            </span>
                        </td>
                        <td class="p-4">
                            <div class="flex gap-2">
                                <a href="{{ route('blog.show', $blog->slug) }}" target="_blank" class="p-1 hover:text-[#FF3300]"
                                    title="View">
                                    <iconify-icon icon="solar:eye-linear" width="18"></iconify-icon>
                                </a>
                                <a href="{{ route('admin.blog.edit', $blog) }}" class="p-1 hover:text-[#FF3300]" title="Edit">
                                    <iconify-icon icon="solar:pen-new-square-linear" width="18"></iconify-icon>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $blog) }}" method="POST"
                                    onsubmit="return confirm('Delete this article?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1 hover:text-red-600" title="Delete">
                                        <iconify-icon icon="solar:trash-bin-trash-linear" width="18"></iconify-icon>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center opacity-50 italic">No articles yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        {{ $blogs->links() }}
    </div>
@endsection