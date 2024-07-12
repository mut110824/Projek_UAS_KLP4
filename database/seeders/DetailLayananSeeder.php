<?php

namespace Database\Seeders;

use App\Models\DetailLayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_layanan = [
            [
                'pekerjaan' => 'Dagang',
                'biaya' => 100000,
                'layanan_id' => 1,
                'montir_id' => 1,
            ],
            [
                'pekerjaan' => 'Tukang',
                'biaya' => 200000,
                'layanan_id' => 2,
                'montir_id' => 2,
            ],
            [
                'pekerjaan' => 'Trader',
                'biaya' => 300000,
                'layanan_id' => 3,
                'montir_id' => 3,
            ],
            [
                'pekerjaan' => 'Jualan',
                'biaya' => 400000,
                'layanan_id' => 4,
                'montir_id' => 4,
            ]
        ];

        foreach ($detail_layanan as $detail) {
            DetailLayanan::updateOrCreate(['pekerjaan' => $detail['pekerjaan']], $detail);
        }
    }
}