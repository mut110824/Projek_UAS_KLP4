<?php

namespace Database\Seeders;

use App\Models\KategoriMontir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriMontirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama' => 'Jasa',
            ],
            [
                'nama' => 'Pertanian',
            ],
            [
                'nama' => 'Industri',
            ],
            [
                'nama' => 'Kreatif',
            ]
        ];

        foreach ($kategori as $kat) {
            KategoriMontir::updateOrCreate(['nama' => $kat['nama']], $kat);
        }
    }
}