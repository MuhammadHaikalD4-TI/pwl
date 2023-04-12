<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'ayah', 'ibu', 'saudara_kandung'];
}
