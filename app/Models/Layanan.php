<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan'; // Pastikan tabel yang digunakan sesuai
    public $timestamps = false; // Nonaktifkan timestamps

    // Definisikan kolom yang dapat diisi
    protected $fillable = [
        'kode', 'nama', 'deskripsi', 'jenis_layanan', 'total_biaya', 'rating', 'montir'
    ];

    // Jika Anda tetap ingin menggunakan timestamps, aturnya secara manual
    // protected $dates = ['created_at', 'updated_at'];
    
    // Definisikan relasi dengan Montir
    public function montir()
    {
        return $this->belongsTo(Montir::class, 'montir');
    }

    public function jenis()
    {
        return $this->belongsTo(DetailLayanan::class, 'jenis_layanan', 'id');
    }
}