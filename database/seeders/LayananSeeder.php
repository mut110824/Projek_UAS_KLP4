<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            [
                'kode' => '100',
                'nama' => 'Kiki',
                'deskripsi' => 'ada aja',
                'jenis_layanan' => '1',
                'total_biaya' => 900000,
                'rating' => 1,
                'montir_id' => 1,
            ],
            [
                'kode' => '200',
                'nama' => 'Siti',
                'deskripsi' => 'ada aja',
                'jenis_layanan' => '2',
                'total_biaya' => 7000000,
                'rating' => 2,
                'montir_id' => 2,
            ],
            [
                'kode' => '300',
                'nama' => 'Dewi',
                'deskripsi' => 'ada aja',
                'jenis_layanan' => '3',
                'total_biaya' => 200000,
                'rating' => 3,
                'montir_id' => 3,
            ],
            [
                'kode' => '400',
                'nama' => 'Roby',
                'deskripsi' => 'ada aja',
                'jenis_layanan' => '4',
                'total_biaya' => 300000,
                'rating' => 4,
                'montir_id' => 4,
            ]
        ];

        foreach ($layanan as $layanan) {
            Layanan::updateOrCreate(['nama' => $layanan['nama']], $layanan);
        }
    }
}