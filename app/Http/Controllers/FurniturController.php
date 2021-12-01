<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Furnitur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\FurniturRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class FurniturController extends Controller
{
    public function index()
    {
        $items = Furnitur::all()->sortDesc();

        return view('pages.furnitur', [
            'items' => $items
        ]);
    }

    public function store(FurniturRequest $request)
    {
        $data = $request->all();
        
        $data['kode_barang'] = $this->generateKodeBarang(Furnitur::all(), $data, 'FN');

        QrCode::size(500)->format('png')->generate($data['kode_barang'], storage_path('app/public/gambar/qrcodes/'.$data['kode_barang'].'.png'));
        $data['qr'] = 'gambar/qrcodes/'.$data['kode_barang'].'.png';

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/furnitur', 'public');
        }

        Furnitur::create($data);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['kode_barang'] = 'FN'. Str::substr($request->jenis, 0, 2). Carbon::parse($request->tanggal_masuk)->isoFormat('YY'). Str::padLeft($id, 5, 0);
        $item = Furnitur::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $item = Furnitur::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data Dihapus!');
    }
}
