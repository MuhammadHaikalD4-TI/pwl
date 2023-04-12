<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    Public function index() {
        return view('beranda');
    }
}
?>