<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Places_Tags extends Model
{

    protected $table = 'places_tags';

    protected $fillable = [
        'placeID',
        'tagID',
    ];

    public function place()
    {
        return $this->belongsTo(Places::class, 'placeID');
    }

    public function tag()
    {
        return $this->belongsTo(Tags::class, 'tagID');
    }
}