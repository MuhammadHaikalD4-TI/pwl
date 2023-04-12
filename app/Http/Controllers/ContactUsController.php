<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() {
        return view('pwl_3_1.contact-us');
    }
}
