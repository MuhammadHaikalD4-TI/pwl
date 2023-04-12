<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobis')->insert([
            [
                'nama' => 'Haikal',
                'hobi' => 'Menari',
                'deskripsi_hobi' => 'Melakukan tari modern diiringi oleh musik hiphop'
            ],
            [
                'nama' => 'Diouf',
                'hobi' => 'Nonton Film',
                'deskripsi_hobi' => 'Menonton film-film yang cocok ditontong bersama ayang'
            ],
            [
                'nama' => 'Fikril',
                'hobi' => 'Main Game',
                'deskripsi_hobi' => 'Bermain game online tanpa batas karena baru beli laptop'
            ],
        ]);
    }
}
