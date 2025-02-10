<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Countries extends Model
{

    protected $table = 'countries';

    protected $fillable = [
        'name',
    ];
}