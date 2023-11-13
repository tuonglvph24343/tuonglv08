<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    const INACTIVE = 1; // NGHI HOC
    const ACTIVE = 0; // DI HOC
    protected $fillable = [
        'TenLop',
        'TenSinhVien',
        'Anh',
        'Is_Active',
        'ChuThich',
    ];
}
