<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use App\Models\Furnitur;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class GambarController extends Controller
{    
    public function updateImage(Request $request, $id)
    {
        $data = $request->all();

        if ($data['category'] == 1) 
        {
            $data['gambar'] = $request->file('gambar')->store('gambar/kendaraan', 'public');
            $item = Kendaraan::find($id);
        }
        elseif ($data['category'] == 2) 
        {
            $data['gambar'] = $request->file('gambar')->store('gambar/elektronik', 'public');
            $item = Elektronik::find($id);
        }
        else 
        {
            $data['gambar'] = $request->file('gambar')->store('gambar/furnitur', 'public');
            $item = Furnitur::find($id);
        }

        $item->gambar = $data['gambar'];
        $item->save();

        return redirect()->back()->with('success', 'Gambar Berhasil Disimpan!');
    }
    
    public function deleteImage(Request $request, $id)
    {
        $data = $request->all();

        if ($data['category'] == 1) 
        {
            $item = Kendaraan::find($id);
        }
        elseif ($data['category'] == 2) 
        {
            $item = Elektronik::find($id);
        }
        else 
        {
            $item = Furnitur::find($id);
        }

        $item->gambar = "";
        $item->save();

        return redirect()->back()->with('toast_success', 'Gambar Berhasil Dihapus!');
    }
}
