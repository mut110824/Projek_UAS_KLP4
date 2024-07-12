<?php

namespace Database\Seeders;

use App\Models\Montir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MontirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $montir = [
            [
                'nomor' => '100',
                'nama' => 'Daden',
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1990-01-01',
                'tmp_lahir' => 'Jakarta',
                'keahlian' => 'Mekanik',
            ],
            [
                'nomor' => '200',
                'nama' => 'Cecep',
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1990-02-02',
                'tmp_lahir' => 'Depok',
                'keahlian' => 'Mekanik',
            ],
            [
                'nomor' => '300',
                'nama' => 'Agus',
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1990-01-03',
                'tmp_lahir' => 'Bekasi',
                'keahlian' => 'Mekanik',
            ],
            [
                'nomor' => '400',
                'nama' => 'Iki',
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1990-01-04',
                'tmp_lahir' => 'Bogor',
                'keahlian' => 'Mekanik',
            ]
        ];

        foreach ($montir as $montir) {
            Montir::updateOrCreate(['nama' => $montir['nama']], $montir);
        }
    }
}