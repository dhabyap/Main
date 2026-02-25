@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">New Project</h2>
        <a href="{{ route('admin.project.index') }}" class="btn-admin btn-outline text-xs">Back to List</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="form-group">
                        <label class="form-label">Project Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required
                            placeholder="e.g. MySuzuki Dashboard">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Type / Subtitle</label>
                        <input type="text" name="type" class="form-control" value="{{ old('type') }}"
                            placeholder="e.g. Admin Dashboard & Booking">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tags (Comma separated)</label>
                        <input type="text" name="tags" class="form-control" value="{{ old('tags') }}"
                            placeholder="Next.js, REST API, Laravel">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Project URL</label>
                        <input type="url" name="url" class="form-control" value="{{ old('url') }}"
                            placeholder="https://example.com">
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="form-group">
                        <label class="form-label">Thumbnail Image</label>
                        <input type="file" name="thumbnail" class="form-control">
                        <p class="text-[10px] text-gray-500 mt-2">Recommended size: 1200x800px. Max: 2MB.</p>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : 'selected' }}>Published
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Display Order</label>
                        <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}">
                    </div>
                </div>
            </div>

            <div class="form-group mt-6">
                <label class="form-label">Description (Optional)</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="mt-8 pt-6 border-t-2 border-black">
                <button type="submit" class="btn-admin btn-black w-full md:w-auto">Create Project</button>
            </div>
        </form>
    </div>
@endsection