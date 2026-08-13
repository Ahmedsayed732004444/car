<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_type',
        'user_id',
        'subject',
        'request_id',
        'title',
        'description',
        'status',
        'reviewed_by',
    ];

    protected $casts = [
        'user_type' => 'string',
        'subject' => 'string',
        'status' => 'string',
    ];

    protected function dateComplaint(): Attribute
    {
        return Attribute::make(
            get: fn($value) =>
            $value
                ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
                : null
        );
    }

    protected function scopeSearchValueFilter($query, $value)
    {
        $query->when($value, function ($query, $value) {
            return $query->whereAny([
                'complaints.id',
                'users.user_id',
                'users.name',
                'users.phone',
                'complaints.title',
                'complaints.description',
                'complaints.created_at',
            ], 'like', '%' . $value . '%');
        });
    }
}
