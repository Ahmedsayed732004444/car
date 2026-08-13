<?php

namespace App\Models;

use App\Utils\CacheUtils;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class CacheStaticDataVersion extends Model
{
    protected $fillable = [
        'entity_name',
        'last_updated_at',
    ];

    protected $casts = [
        'last_updated_at' => 'datetime',
    ];

    protected $dates = ['last_updated_at'];

    public static function updateTimestamp(string $entityName): void
    {
        static::where('entity_name', $entityName)
            ->update(['last_updated_at' => now()]);
        CacheUtils::forget(CacheUtils::cacheStaticDataVersionAppKey($entityName));
    }

    public static function getTimestamp(string $entityName): ?Carbon
    {
        return CacheUtils::rememberForever(CacheUtils::cacheStaticDataVersionAppKey($entityName), function () use ($entityName) {
            return self::where('entity_name', $entityName)->value('last_updated_at');
        });
    }
}
