<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $fillable = [
        'user_id',
        'token',
        'device_id',
        'platform',
        'device_model',
        'os_version',
        'app_version',
        'failure_count',
        'revoked_at',
        'revoked_reason',
        'last_used_at',
    ];

    protected $casts = [
        'revoked_at' => 'datetime',
        'last_used_at' => 'datetime',
        'failure_count' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->whereNull('revoked_at');
    }
}
