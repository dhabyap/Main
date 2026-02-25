@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Manage Projects</h2>
        <a href="{{ route('admin.project.create') }}" class="btn-admin btn-black text-xs flex items-center gap-2">
            <iconify-icon icon="solar:add-circle-linear" width="18"></iconify-icon> New Project
        </a>
    </div>

    <div class="admin-card overflow-x-auto p-0">
        <table class="w-full text-left font-tech text-xs uppercase divide-y-2 divide-black">
            <thead class="bg-[#E6E6E6]">
                <tr>
                    <th class="p-4 border-r-2 border-black">Thumbnail</th>
                    <th class="p-4 border-r-2 border-black">Title & Type</th>
                    <th class="p-4 border-r-2 border-black">Tags</th>
                    <th class="p-4 border-r-2 border-black">Category</th>
                    <th class="p-4 border-r-2 border-black">Status</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-2 divide-black">
                @forelse($projects as $project)
                    <tr class="hover:bg-[#f9f9f9]">
                        <td class="p-4 border-r-2 border-black w-24">
                            @if($project->thumbnail)
                                <img src="{{ filter_var($project->thumbnail, FILTER_VALIDATE_URL) ? $project->thumbnail : asset('storage/' . $project->thumbnail) }}"
                                    class="w-16 h-16 object-cover border border-black grayscale">
                            @else
                                <div class="w-16 h-16 bg-gray-200 border border-black flex items-center justify-center text-[8px]">
                                    NO IMG</div>
                            @endif
                        </td>
                        <td class="p-4 border-r-2 border-black font-bold">
                            {{ $project->title }}
                            <div class="text-[8px] text-[#FF3300] mt-1">{{ $project->type }}</div>
                        </td>
                        <td class="p-4 border-r-2 border-black">
                            <div class="flex flex-wrap gap-1">
                                @foreach($project->tags as $tag)
                                    <span class="bg-black text-white px-1 text-[8px]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="p-4 border-r-2 border-black">
                            <span class="px-2 py-1 text-[8px] border border-black {{ $project->category === 'professional' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">
                                {{ $project->category }}
                            </span>
                        </td>
                        <td class="p-4 border-r-2 border-black">
                            <span
                                class="px-2 py-1 {{ $project->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                {{ $project->status }}
                            </span>
                        </td>
                        <td class="p-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.project.edit', $project) }}" class="p-1 hover:text-[#FF3300]"
                                    title="Edit">
                                    <iconify-icon icon="solar:pen-new-square-linear" width="18"></iconify-icon>
                                </a>
                                <form action="{{ route('admin.project.destroy', $project) }}" method="POST"
                                    onsubmit="return confirm('Delete this project?')">
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
                        <td colspan="5" class="p-10 text-center opacity-50 italic">No projects yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        {{ $projects->links() }}
    </div>
@endsection