@extends('admin.layouts.admin')

@section('admin_content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold uppercase tracking-tight">Site Settings</h2>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @foreach($settings as $type => $group)
                <div class="mb-12">
                    <h3 class="text-lg font-bold uppercase border-b-2 border-black pb-2 mb-6">
                        {{ ucfirst($type) }} Settings
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($group as $setting)
                            <div class="form-group">
                                <label class="form-label">{{ str_replace('_', ' ', strtoupper($setting->key)) }}</label>

                                @if($setting->type === 'image')
                                    @if($setting->value)
                                        <div class="mb-4 w-48 border-2 border-black p-1 bg-gray-100">
                                            <img src="{{ \App\Models\Setting::url($setting->key) }}"
                                                class="w-full h-32 object-cover grayscale">
                                        </div>
                                    @endif
                                    <input type="file" name="{{ $setting->key }}" class="form-control">
                                    <p class="text-[10px] text-gray-500 mt-1">Upload new image to replace.</p>

                                @elseif($setting->type === 'textarea')
                                    <textarea name="{{ $setting->key }}" class="form-control"
                                        rows="4">{{ old($setting->key, $setting->value) }}</textarea>

                                @else
                                    <input type="text" name="{{ $setting->key }}" class="form-control"
                                        value="{{ old($setting->key, $setting->value) }}">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="mt-8 pt-6 border-t-2 border-black">
                <button type="submit" class="btn-admin btn-black w-full md:w-auto">Update All Settings</button>
            </div>
        </form>
    </div>
@endsection