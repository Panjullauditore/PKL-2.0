<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'business_name',
        'address',
        'phone',
        'main_image',
        'gallery_images'
    ];

    protected $casts = [
        'gallery_images' => 'array'
    ];
}