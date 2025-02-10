<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use HasFactory;



class Culinaries extends Model
{

    protected $table = 'culinaries';

    protected $fillable = [
        'name',
        'image',
    ];
}