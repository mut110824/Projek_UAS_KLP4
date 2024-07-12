<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMontir extends Model
{
    use HasFactory;

    protected $table = 'kategori_montirs'; // Sesuaikan dengan nama tabel di database

    // Define relasi jika ada, misalnya dengan Montir
    public function montirs()
    {
        return $this->hasMany(Montir::class);
    }
}