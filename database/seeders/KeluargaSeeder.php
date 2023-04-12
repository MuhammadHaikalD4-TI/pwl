<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluargas')->insert([
            [
                'nama' => 'Haikal',
                'ayah' => 'Suyanto',
                'ibu' => 'Siti Rosidah',
                'saudara_kandung' => 'Sevi dan Rahma'
            ],
            [
                'nama' => 'Diouf',
                'ayah' => 'Frisaranda',
                'ibu' => 'Gatau',
                'saudara_kandung' => 'Semuanya Frisaranda'
            ],
            [
                'nama' => 'Fikril',
                'ayah' => 'Gatau',
                'ibu' => 'Gatau',
                'saudara_kandung' => 'Kucing'
            ],
        ]);
    }
}
