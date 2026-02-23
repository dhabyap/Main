@extends('admin.layouts.admin')

@section('admin_content')
    <div class="mb-8">
        <a href="{{ route('admin.blog.index') }}"
            class="font-tech text-[10px] uppercase hover:text-[#FF3300] flex items-center gap-1 mb-2">
            <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Back to List
        </a>
        <h2 class="text-3xl font-bold uppercase tracking-tight">Create New Article</h2>
    </div>

    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data"
        class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf

        <div class="lg:col-span-2 flex flex-col gap-6">
            <div class="admin-card">
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required
                        placeholder="Article Title">
                </div>

                <div class="form-group">
                    <label class="form-label">Excerpt / Short Description</label>
                    <textarea name="excerpt" class="form-control h-24"
                        placeholder="Brief summary for the list page">{{ old('excerpt') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Content (Rich Text)</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                    <trix-editor input="content" class="brutalist-trix"></trix-editor>
                    <p class="text-[10px] mt-2 text-gray-400 italic">TIP: Use the toolbar to insert H1, H2, and Bold text.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="admin-card">
                <div class="form-group">
                    <label class="form-label">Featured Image</label>
                    <input type="file" name="thumbnail" class="form-control text-xs">
                </div>

                <!-- <div class="form-group border-t border-black pt-6 mt-6">
                        <label class="form-label">Gallery Images (Multiple Upload)</label>
                        <input type="file" name="gallery[]" class="form-control text-xs" multiple>
                        <p class="text-[10px] mt-2 text-gray-400">You can select multiple images for the article gallery.</p>
                    </div> -->

                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Publish Date (Optional)</label>
                    <input type="datetime-local" name="published_at" class="form-control text-xs"
                        value="{{ old('published_at') }}">
                </div>

                <hr class="border-black border mb-6">

                <button type="submit" class="btn-admin btn-black w-full">Save Article</button>
            </div>
        </div>
    </form>
@endsection