@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Manage Services/Philosophy</h2>
        <a href="{{ route('admin.service.create') }}" class="btn-admin btn-black text-xs flex items-center gap-2">
            <iconify-icon icon="solar:add-circle-linear" width="18"></iconify-icon> New Service
        </a>
    </div>

    <div class="admin-card overflow-x-auto p-0">
        <table class="w-full text-left font-tech text-xs uppercase divide-y-2 divide-black">
            <thead class="bg-[#E6E6E6]">
                <tr>
                    <th class="p-4 border-r-2 border-black">Title</th>
                    <th class="p-4 border-r-2 border-black">Icon</th>
                    <th class="p-4 border-r-2 border-black">Order</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-2 divide-black">
                @forelse($services as $item)
                    <tr class="hover:bg-[#f9f9f9]">
                        <td class="p-4 border-r-2 border-black font-bold">{{ $item->title }}</td>
                        <td class="p-4 border-r-2 border-black">
                            @if($item->icon) <iconify-icon icon="{{ $item->icon }}" width="24"></iconify-icon> @endif
                        </td>
                        <td class="p-4 border-r-2 border-black">{{ $item->order }}</td>
                        <td class="p-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.service.edit', $item->id) }}" class="p-1 hover:text-[#FF3300]">
                                    <iconify-icon icon="solar:pen-new-square-linear" width="18"></iconify-icon>
                                </a>
                                <form action="{{ route('admin.service.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Delete this service?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1 hover:text-red-600">
                                        <iconify-icon icon="solar:trash-bin-trash-linear" width="18"></iconify-icon>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center opacity-50 italic">No services yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection