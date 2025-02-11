<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use HasFactory;


class favorites extends Model
{

    protected $table = 'favorites';

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