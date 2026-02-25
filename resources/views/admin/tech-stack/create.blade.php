@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">New Tech Item</h2>
        <a href="{{ route('admin.tech-stack.index') }}" class="btn-admin btn-outline text-xs">Back</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.tech-stack.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Laravel">
            </div>
            <div class="form-group">
                <label class="form-label">Icon (Iconify ID)</label>
                <input type="text" name="icon" class="form-control" required placeholder="logos:laravel">
                <p class="text-[10px] text-gray-500 mt-1">Visit icon-sets.iconify.design for IDs.</p>
            </div>
            <div class="form-group">
                <label class="form-label">Order</label>
                <input type="number" name="order" class="form-control" value="0">
            </div>
            <button type="submit" class="btn-admin btn-black">Create Item</button>
        </form>
    </div>
@endsection