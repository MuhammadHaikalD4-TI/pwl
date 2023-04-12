<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'kode', 'mata_kuliah', 'dosen', 'deskripsi_mata_kuliah', 'tanggal_kelas'];
}
