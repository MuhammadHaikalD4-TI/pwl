<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $data = Keluarga::all();
        return view('pwl_4_2.keluarga', ['data' => $data]);
    }
}
