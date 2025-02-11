<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use HasFactory;


class favourites extends Model
{

    protected $table = 'galeri';

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