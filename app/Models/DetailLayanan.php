<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;

    protected $table = 'detail_layanan';

    protected $fillable = [
        'pekerjaan',
        'biaya',
    ];
}