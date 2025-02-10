<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class Review extends Model
{

    protected $table = 'review';

    protected $fillable = [
        'userID',
        'placeID',
        'rating',
        'desc',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function place()
    {
        return $this->belongsTo(Places::class, 'placeID');
    }
}