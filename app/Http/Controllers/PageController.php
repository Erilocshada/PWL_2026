<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }
    
    public function about()
    {
        return "Muhammad Pearl Ocshada / 244107020064";
    }

    public function articles($id)
    {
        return "Halaman Artikel ID: " . $id;
    }
    
}
