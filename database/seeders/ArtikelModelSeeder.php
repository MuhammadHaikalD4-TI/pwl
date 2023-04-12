<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.

     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel__models')->insert([
            [
                'judul' => 'si Merah dari Kebun Bunga',
                'penulis' => 'Haikal',
                'tanggal_terbit' => '2023-03-08'
            ],
            [
                'judul' => 'Kelingking Asam',
                'penulis' => 'Haikal',
                'tanggal_terbit' => '2022-03-08'
            ],
            [
                'judul' => 'Ranting Dingin',
                'penulis' => 'Haikal',
                'tanggal_terbit' => '2021-03-08'
            ],
        ]);
    }
}
