<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index($program) {
        echo "Program $program: ";
        echo "<ol><li>Belajar Laravel</li><li>Belajar PHP</li><li>Belajar MySQL</li></ol>";
    } 
}
