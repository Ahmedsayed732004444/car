<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;


    protected $fillable = ['key', 'value', 'type', 'group'];


    protected static function booted()
    {
        static::saved(function ($setting) {
            // cache()->forget(CacheUtils::GENERAL_SETTING_APP_KEY);
        });

        static::deleted(function ($setting) {
            // cache()->forget(CacheUtils::GENERAL_SETTING_APP_KEY);
        });
    }

    // get value setting with casting datatype automatics
    public static function get($key, $default = null)
    {
        $setting = static::where('key', $key)->first(['key', 'value', 'type']);

        if (!$setting) return $default;

        return match ($setting->type) {
            'array' => json_decode($setting->value, true),
            'object' => json_decode($setting->value),
            'boolean' => (bool) $setting->value,
            'integer' => (int) $setting->value,
            'float' => (float) $setting->value,
            default => $setting->value
        };
    }

    // create or update setting value with determine datatype automatics
    public static function set($key, $value, $group = '')
    {
        $type = gettype($value);
        $storedValue = $value;

        if ($type === 'array' || $type === 'object') {
            $storedValue = json_encode($value);
        } elseif ($type === 'boolean') {
            $storedValue = $value ? '1' : '0';
        }

        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $storedValue,
                'type' => $type,
                'group' => $group
            ]
        );
    }
}
