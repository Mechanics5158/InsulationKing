<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'building_type',
        'location',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array',
    ];
}