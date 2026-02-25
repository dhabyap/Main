@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Edit Service</h2>
        <a href="{{ route('admin.service.index') }}" class="btn-admin btn-outline text-xs">Back</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.service.update', $service) }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title', $service->title) }}">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"
                    rows="4">{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Icon (Iconify ID)</label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
            </div>
            <div class="form-group">
                <label class="form-label">Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', $service->order) }}">
            </div>
            <button type="submit" class="btn-admin btn-black">Update Service</button>
        </form>
    </div>
@endsection