<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index($program) {
        return view('pwl_3_1.program', ['program' => $program]);
    } 
}
