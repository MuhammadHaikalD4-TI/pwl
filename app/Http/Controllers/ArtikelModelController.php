<?php

namespace App\Http\Controllers;

use App\Models\Artikel_Model;
use Illuminate\Http\Request;

class ArtikelModelController extends Controller
{
    public function index()
    {
        $data = Artikel_Model::all();
        return view('artikel', ['artikel' => $data]);
    }
}
