@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">New Service</h2>
        <a href="{{ route('admin.service.index') }}" class="btn-admin btn-outline text-xs">Back</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.service.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required placeholder="Back End.">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Icon (Iconify ID)</label>
                <input type="text" name="icon" class="form-control" placeholder="solar:database-linear">
            </div>
            <div class="form-group">
                <label class="form-label">Order</label>
                <input type="number" name="order" class="form-control" value="0">
            </div>
            <button type="submit" class="btn-admin btn-black">Create Service</button>
        </form>
    </div>
@endsection