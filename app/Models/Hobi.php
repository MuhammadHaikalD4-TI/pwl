<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'hobi', 'deskripsi_hobi'];
}
