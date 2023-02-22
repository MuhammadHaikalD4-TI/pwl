<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($news) {
        echo "Berita Terkini $news <br>";
        echo "Artikel adalah karangan faktual secara 
        lengkap dengan panjang tertentu yang dibuat 
        untuk dipublikasikan di media daring maupun 
        cetak (melalui koran, majalah, atau buletin) 
        dan bertujuan menyampaikan gagasan dan fakta 
        yang dapat meyakinkan, mendidik, dan menghibur.";
    }
}