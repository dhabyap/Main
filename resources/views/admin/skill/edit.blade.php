@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Edit Skill</h2>
        <a href="{{ route('admin.skill.index') }}" class="btn-admin btn-outline text-xs">Back</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.skill.update', $skill) }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title', $skill->title) }}">
            </div>
            <div class="form-group">
                <label class="form-label">Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', $skill->order) }}">
            </div>
            <button type="submit" class="btn-admin btn-black">Update Skill</button>
        </form>
    </div>
@endsection