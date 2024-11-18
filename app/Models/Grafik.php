<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grafik extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'data',
    ];
}
