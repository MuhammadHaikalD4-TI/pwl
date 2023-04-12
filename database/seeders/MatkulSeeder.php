<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkuls')->insert([
            [
                'nama' => 'Haikal',
                'kode' => '212111',
                'mata_kuliah' => 'Web Programming',
                'dosen' => 'Zawarudin',
                'deskripsi_mata_kuliah' => 'Melakukan pendalaman materi dan praktek pemrograman web',
                'tanggal_kelas' => '2023-04-05'
            ],
            [
                'nama' => 'Haikal',
                'kode' => '212112',
                'mata_kuliah' => 'Bussiness Intelligence',
                'dosen' => 'Endah',
                'deskripsi_mata_kuliah' => 'Melakukan pendalaman materi dan praktek Business Intelligence',
                'tanggal_kelas' => '2023-04-11'
            ],
            [
                'nama' => 'Haikal',
                'kode' => '212113',
                'mata_kuliah' => 'Project Management',
                'dosen' => 'Bella',
                'deskripsi_mata_kuliah' => 'Melakukan pendalaman materi dan praktek manajemen proyek',
                'tanggal_kelas' => '2023-04-08'
            ],
        ]);
    }
}
