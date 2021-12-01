<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use App\Models\Furnitur;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::where('status','Berfungsi')->get()->count();
        $elektronik = Elektronik::where('status','Berfungsi')->get()->count();
        $furnitur = Furnitur::where('status','Berfungsi')->get()->count();

        $total = $kendaraan + $elektronik + $furnitur;

        return view('pages.dashboard', [
            'total' => $total,
            'kendaraan' => $kendaraan,
            'elektronik' => $elektronik,
            'furnitur' => $furnitur
        ]);
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
