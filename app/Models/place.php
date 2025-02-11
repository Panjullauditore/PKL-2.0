<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    // Tentukan kolom-kolom yang dapat diisi massal
    protected $fillable = ['place_name', 'description', 'image'];
}
