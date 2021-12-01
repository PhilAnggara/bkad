<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Elektronik;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ElektronikRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ElektronikController extends Controller
{
    public function index()
    {
        $items = Elektronik::all()->sortDesc();

        return view('pages.elektronik', [
            'items' => $items
        ]);
    }

    public function store(ElektronikRequest $request)
    {
        $data = $request->all();

        $data['kode_barang'] = $this->generateKodeBarang(Elektronik::all(), $data, 'EL');

        QrCode::size(500)->format('png')->generate($data['kode_barang'], storage_path('app/public/gambar/qrcodes/'.$data['kode_barang'].'.png'));
        $data['qr'] = 'gambar/qrcodes/'.$data['kode_barang'].'.png';

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/elektronik', 'public');
        }

        Elektronik::create($data);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['kode_barang'] = 'EL'. Str::substr($request->jenis, 0, 2). Carbon::parse($request->tanggal_masuk)->isoFormat('YY'). Str::padLeft($id, 5, 0);
        $item = Elektronik::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $item = Elektronik::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data Dihapus!');
    }
}
