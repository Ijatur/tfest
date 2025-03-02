<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'href',
    ];
}
