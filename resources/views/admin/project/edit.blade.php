@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Edit Project: {{ $project->title }}</h2>
        <a href="{{ route('admin.project.index') }}" class="btn-admin btn-outline text-xs">Back to List</a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="form-group">
                        <label class="form-label">Project Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Type / Subtitle</label>
                        <input type="text" name="type" class="form-control" value="{{ old('type', $project->type) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tags (Comma separated)</label>
                        <input type="text" name="tags" class="form-control"
                            value="{{ old('tags', is_array($project->tags) ? implode(', ', $project->tags) : '') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Project URL</label>
                        <input type="url" name="url" class="form-control" value="{{ old('url', $project->url) }}">
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="form-group">
                        <label class="form-label">Thumbnail Image</label>
                        @if($project->thumbnail)
                            <div class="mb-4 relative group w-48">
                                <img src="{{ filter_var($project->thumbnail, FILTER_VALIDATE_URL) ? $project->thumbnail : asset('storage/' . $project->thumbnail) }}"
                                    class="w-full h-32 object-cover border-2 border-black grayscale group-hover:grayscale-0 transition-all">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all">
                                    <span class="text-white font-tech text-[10px]">CURRENT IMAGE</span>
                                </div>
                            </div>
                        @endif
                        <input type="file" name="thumbnail" class="form-control">
                        <p class="text-[10px] text-gray-500 mt-2">Leave empty to keep current image.</p>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="draft" {{ old('status', $project->status) == 'draft' ? 'selected' : '' }}>Draft
                            </option>
                            <option value="published" {{ old('status', $project->status) == 'published' ? 'selected' : '' }}>
                                Published</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Display Order</label>
                        <input type="number" name="order" class="form-control" value="{{ old('order', $project->order) }}">
                    </div>
                </div>
            </div>

            <div class="form-group mt-6">
                <label class="form-label">Description (Optional)</label>
                <textarea name="description" class="form-control"
                    rows="4">{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="mt-8 pt-6 border-t-2 border-black">
                <button type="submit" class="btn-admin btn-black w-full md:w-auto">Update Project</button>
            </div>
        </form>
    </div>
@endsection