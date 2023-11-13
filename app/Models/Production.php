<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    const ACTIVE = 1; // hoạt động
    const INACTIVE = 0; // không hoạt động

    protected $fillable = [
        'Thumbnail',
        'Name',
        'PriceSale',
        'Price',
        'Status',
        'created_at',
    ];
}
