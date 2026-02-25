@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Edit Tech Item</h2>
        <a href="{{ route('admin.tech-stack.index') }}" class="btn-admin btn-outline text-xs">Back</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.tech-stack.update', $techStack->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name', $techStack->name) }}">
            </div>
            <div class="form-group">
                <label class="form-label">Icon (Iconify ID)</label>
                <input type="text" name="icon" class="form-control" required value="{{ old('icon', $techStack->icon) }}">
                <p class="text-[10px] text-gray-500 mt-1">Visit icon-sets.iconify.design for IDs.</p>
            </div>
            <div class="form-group">
                <label class="form-label">Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', $techStack->order) }}">
            </div>
            <button type="submit" class="btn-admin btn-black">Update Item</button>
        </form>
    </div>
@endsection