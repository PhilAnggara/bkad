<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
    
    public function pindai()
    {
        return view('pages.pindai');
    }
    
    public function laporan()
    {
        return view('pages.laporan');
    }
}
