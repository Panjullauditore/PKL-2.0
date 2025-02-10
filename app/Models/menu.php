<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class Menu extends Model
{

    protected $table = 'menu';

    protected $fillable = [
        'placeID',
        'culinaryID',
    ];

    public function place()
    {
        return $this->belongsTo(Places::class, 'placeID');
    }

    public function culinary()
    {
        return $this->belongsTo(Culinaries::class, 'culinaryID');
    }
}