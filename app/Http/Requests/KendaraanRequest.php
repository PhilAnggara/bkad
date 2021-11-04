<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KendaraanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'kode_barang' => 'required|max:255',
            'merk' => 'required|max:255',
            'jenis' => 'required|max:255',
            'no_polisi' => 'required|max:255',
            'gambar' => 'required|image',
            'tanggal_masuk' => 'required|date',
            'penanggung_jawab' => 'required|max:255',
            'status' => 'required|max:255'
        ];
    }
}
