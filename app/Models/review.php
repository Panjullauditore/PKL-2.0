<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'review'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'userID',
        'placeID', 
        'rating',
        'desc'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}