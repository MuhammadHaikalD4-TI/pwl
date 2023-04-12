<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function index() {
        return view('pwl_3_1.about-us');
    }
}
