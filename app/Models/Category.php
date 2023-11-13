<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const VALUE_FACTORY = '0';
    const VALUE_FACTORYS = '1';
    protected $fillable = [
        'name',
        'excerpt',
        'is_active',
    ];
}
