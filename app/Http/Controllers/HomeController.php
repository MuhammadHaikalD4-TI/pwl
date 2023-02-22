<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hello';
    }

    public function userByUsername($user)
    {
        return 'halo saudara '.$user;
    }

    public function userByUserID($id)
    {
        return 'halo user dengan ID : '.$id;
    }
}
    