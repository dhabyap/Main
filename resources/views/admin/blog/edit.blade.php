@extends('admin.layouts.admin')

@section('admin_content')
    <div class="mb-8">
        <a href="{{ route('admin.blog.index') }}"
            class="font-tech text-[10px] uppercase hover:text-[#FF3300] flex items-center gap-1 mb-2">
            <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Back to List
        </a>
        <h2 class="text-3xl font-bold uppercase tracking-tight">Edit Article</h2>
    </div>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
        class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        @method('PUT')

        <div class="lg:col-span-2 flex flex-col gap-6">
            <div class="admin-card">
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Excerpt / Short Description</label>
                    <textarea name="excerpt" class="form-control h-24">{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Content (Rich Text)</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content', $blog->content) }}">
                    <trix-editor input="content" class="brutalist-trix"></trix-editor>
                </div>

            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="admin-card">
                <div class="form-group">
                    <label class="form-label">Current Thumbnail</label>
                    @if($blog->thumbnail)
                        <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                            class="w-full h-40 object-cover border-2 border-black mb-4 grayscale">
                    @else
                        <div
                            class="w-full h-40 bg-gray-200 border-2 border-black mb-4 flex items-center justify-center text-xs uppercase">
                            No Thumbnail</div>
                    @endif
                    <label class="form-label">Change Image</label>
                    <input type="file" name="thumbnail" class="form-control text-xs">
                </div>

                <div class="form-group border-t border-black pt-6 mt-6">
                    <div class="flex justify-between items-center mb-4">
                        <label class="form-label mb-0">Article Media Helper</label>
                        <span class="font-tech text-[10px] text-gray-400">Click icon to copy tag</span>
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        @foreach($blog->images as $image)
                            @php $tag = '<img src="' . asset('storage/' . $image->image_path) . '" class="w-full border-2 border-black my-10 brutalist-img" alt="Article Image">'; @endphp
                            <div class="relative group aspect-square border border-black bg-gray-100 overflow-hidden">
                                <img src="{{ asset('storage/' . $image->image_path) }}"
                                    class="w-full h-full object-cover grayscale">
                                <div
                                    class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center transition-opacity gap-2">
                                    <button type="button" onclick="copyImageTag('{{ addslashes($tag) }}', this)"
                                        class="p-2 bg-white text-black border border-black hover:bg-[#FF3300] hover:text-white transition-colors title='Copy HTML Tag'">
                                        <iconify-icon icon="solar:copy-linear" width="18"></iconify-icon>
                                    </button>
                                    <form action="{{ route('admin.blog-image.destroy', $image->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this image?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-2 bg-red-600 text-white border border-black hover:bg-white hover:text-red-600 transition-colors"
                                            title="Delete">
                                            <iconify-icon icon="solar:trash-bin-trash-linear" width="18"></iconify-icon>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <label class="form-label">Add More Images</label>
                    <input type="file" name="gallery[]" class="form-control text-xs" multiple>
                    <p class="text-[10px] mt-2 text-gray-400">Upload images here first to use them in your content.</p>
                </div>

                <div class="form-group">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-control">
                        <option value="draft" {{ old('status', $blog->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $blog->status) === 'published' ? 'selected' : '' }}>
                            Published</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Publish Date</label>
                    <input type="datetime-local" name="published_at" class="form-control text-xs"
                        value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}">
                </div>

                <hr class="border-black border mb-6">

                <button type="submit" class="btn-admin btn-black w-full">Update Article</button>
            </div>
        </div>
    </form>
    @section('extra_js')
        <script>
            function copyImageTag(tag, btn) {
                navigator.clipboard.writeText(tag).then(() => {
                    const originalIcon = btn.innerHTML;
                    btn.innerHTML = '<iconify-icon icon="solar:check-read-linear" width="18"></iconify-icon>';
                    btn.classList.add('bg-green-500', 'text-white');

                    setTimeout(() => {
                        btn.innerHTML = originalIcon;
                        btn.classList.remove('bg-green-500', 'text-white');
                    }, 2000);
                });
            }
        </script>
    @endsection
@endsection