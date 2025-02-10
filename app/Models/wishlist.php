<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class Wishlist extends Model
{

    protected $table = 'wishlist';

    protected $fillable = [
        'userID',
        'placeID',
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