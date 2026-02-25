<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'type'];

    /**
     * Get setting value by key.
     */
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Get setting value as a URL.
     */
    public static function url($key, $default = null)
    {
        $value = self::get($key, $default);

        if (!$value) {
            return $default;
        }

        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        return asset('storage/' . $value);
    }
}
