<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('type');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        try {
            $data = $request->except('_token');

            foreach ($data as $key => $value) {
                $setting = Setting::where('key', $key)->first();

                if (!$setting) {
                    Log::warning('SETTING TIDAK DITEMUKAN', ['key' => $key]);
                    continue;
                }

                if ($setting->type === 'image') {

                    if (!$request->hasFile($key)) {
                        Log::error('UPLOAD FILE TIDAK TERKIRIM', [
                            'key' => $key,
                            'files' => array_keys($request->files->all())
                        ]);
                        continue;
                    }

                    try {
                        $file = $request->file($key);

                        if (!$file->isValid()) {
                            Log::error('FILE TIDAK VALID', ['key' => $key]);
                            continue;
                        }

                        if (
                            $setting->value &&
                            !filter_var($setting->value, FILTER_VALIDATE_URL) &&
                            file_exists(public_path($setting->value))
                        ) {
                            unlink(public_path($setting->value));
                        }

                        $uploadPath = public_path('uploads/settings');

                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0755, true);
                        }

                        $filename = uniqid() . '_' . $file->getClientOriginalName();

                        $file->move($uploadPath, $filename);

                        $setting->update([
                            'value' => 'uploads/settings/' . $filename
                        ]);

                        Log::info('UPLOAD IMAGE BERHASIL', [
                            'key' => $key,
                            'path' => 'uploads/settings/' . $filename
                        ]);

                    } catch (\Throwable $e) {
                        Log::error('UPLOAD IMAGE GAGAL', [
                            'key' => $key,
                            'error' => $e->getMessage(),
                            'trace' => $e->getTraceAsString()
                        ]);
                    }

                } else {
                    $setting->update([
                        'value' => $value
                    ]);
                }
            }

            return back()->with('success', 'Settings updated successfully.');

        } catch (\Throwable $e) {
            Log::critical('SETTINGS UPDATE CRASH', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->with('error', 'Terjadi kesalahan. Cek log.');
        }
    }
}