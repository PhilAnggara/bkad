<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use App\Models\Furnitur;
use App\Models\Kendaraan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

    public function cetak()
    {
        $judul = 'Laporan Aset Kantor BKAD Kota Bitung.pdf';
        $kendaraan = Kendaraan::all();
        $elektronik = Elektronik::all();
        $furnitur = Furnitur::all();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.cetak', [
            'kendaraan' => $kendaraan,
            'elektronik' => $elektronik,
            'furnitur' => $furnitur,
        ]);

        // return view('pages.cetak', compact('kendaraan','elektronik','furnitur'));
        return $pdf->stream($judul);
    }
}
