<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kendaraan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\KendaraanRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class KendaraanController extends Controller
{
    public function index()
    {
        $items = Kendaraan::all()->sortDesc();

        return view('pages.kendaraan', [
            'items' => $items
        ]);
    }

    public function store(KendaraanRequest $request)
    {
        $data = $request->all();

        $data['kode_barang'] = $this->generateKodeBarang(Kendaraan::all(), $data, 'KD');

        QrCode::size(500)->format('png')->generate($data['kode_barang'], storage_path('app/public/gambar/qrcodes/'.$data['kode_barang'].'.png'));
        $data['qr'] = 'gambar/qrcodes/'.$data['kode_barang'].'.png';

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/kendaraan', 'public');
        }

        Kendaraan::create($data);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['kode_barang'] = 'KD'. Str::substr($request->jenis, 0, 2). Carbon::parse($request->tanggal_masuk)->isoFormat('YY'). Str::padLeft($id, 5, 0);
        $item = Kendaraan::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $item = Kendaraan::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data Dihapus!');
    }
}
