<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;
    protected $table = 'places';

    protected $fillable = [
        'name',
        'phoneNum',
        'email',
        'location',
        'desc',
    ];
}