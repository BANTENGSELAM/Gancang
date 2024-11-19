<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopulationData extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'children', 'teenagers', 'adults', 'elderly'];
}
